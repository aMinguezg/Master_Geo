from osgeo import ogr, osr
"""
	Vamos a extraer los ríos que pasan por Asturias
    empleando Shapely

"""
import shapely.wkt


#Fichero de origen Ríos
fichero_rios = "shp/RIOSESP_WGS84.shp"
#Lo abrimos con el data source de origen
data_source_rios = ogr.Open(fichero_rios)
#Recuperamos la capa del origen
capa_rios = data_source_rios.GetLayer()


#Preparamos el fichero /de destino/nuevo/a crear/
fichero_destino = "shp/rios_asturias.shp"
#Creamos el data source de destino
data_source_destino = ogr.GetDriverByName("ESRI Shapefile").CreateDataSource(fichero_destino)
#Creamos la capa de destino, con la referencia espacial del fichero de origen
capa_destino = data_source_destino.CreateLayer("Rios Asturias",capa_rios.GetSpatialRef())

#Y su molde. Nada más queremos guardar su nombre y la longitud de su cauce

#Un atributo con el nombre del río
esquema_atributo = ogr.FieldDefn("NOMBRE", ogr.OFTString)
esquema_atributo.SetWidth(40)

capa_destino.CreateField(esquema_atributo)

#Un atributo con el cauce del río
esquema_atributo = ogr.FieldDefn("CAUCE", ogr.OFTReal)
esquema_atributo.SetWidth(20)
esquema_atributo.SetPrecision(11)
capa_destino.CreateField(esquema_atributo)




#Fichero de origen Provincias
fichero_provincias = "shp/PROVINCIAS_NO_CANARIAS_WGS84.shp"
#Lo abrimos con el data source de origen
data_source_provincias = ogr.Open(fichero_provincias)
#Recuperamos la capa del origen
capa_provincias = data_source_provincias.GetLayer()

#Vamos a buscar la geometría de Asturias (Codigo=33).
geometria_asturias = None

feature_provincia = capa_provincias.GetNextFeature()
while feature_provincia:
    #¿Es Asturias?
    if feature_provincia.GetField("Codigo") == "33":
        #Guardamos la geometría
        geometria_asturias = feature_provincia.GetGeometryRef().Clone()
    #Actualizamos la feature de origen
    feature_provincia = capa_provincias.GetNextFeature()
#Liberamos el data source de provincias
data_source_provincias = None

#Ahora recorremos el SHP de los ríos y volcamos los ríos que están en Asturias
capa_destino_esquema = capa_destino.GetLayerDefn()
feature_rio = capa_rios.GetNextFeature()

while feature_rio:
    """
        ¿Está la geometría del río dentro de Asturias?
        Tenemos que comprobarlo con Shapely
        PERO
        Shapely funciona sobre un plano, es decir 2D.
        Así que habrá que pasar las geometrías a una proyección 2D
        (Porque WGS84 trabaja con longitudes y latitudes).

        Obviamente, la geometría de Asturias la podíamos (y debíamos) haber
        transformado fuera del bucle. También parte del código que le sigue.
        Se hace aquí dentro para explicar mejor el ejemplo de Shapely.
    """
    #EPSG:3035 Proyección 2D útil para Europa.
    referencia_espacial_2D = osr.SpatialReference()
    referencia_espacial_2D.ImportFromEPSG(3035)

    #Transformamos la geometría de Asturias
    transformacion = osr.CoordinateTransformation(geometria_asturias.GetSpatialReference(), referencia_espacial_2D)
    geometria_asturias.Transform(transformacion)


    #Ahora hacemos lo mismo con la feature de río actual.
    #Nótese que se vuelve a hacer la transformación debido a que el fichero
    #de provincias podría haber una proyección diferente a la del fichero ríos.
    geometria_rio = feature_rio.GetGeometryRef().Clone()
    referencia_espacial_rio = geometria_rio.GetSpatialReference()
    transformacion = osr.CoordinateTransformation(referencia_espacial_rio, referencia_espacial_2D)
    geometria_rio.Transform(transformacion)


    """
        En este momento, tenemos las geometrías de Asturias y el río actual
        proyectadas en un plano 2D.
        Shapely y OGR pueden interoperar si convertimos las geometrías a WKT
    """
    geometria_asturias_shapely = shapely.wkt.loads(geometria_asturias.ExportToWkt())
    geometria_rio_shapely = shapely.wkt.loads(geometria_rio.ExportToWkt())

    #¿Contiene Asturias al río?
    if geometria_asturias_shapely.contains(geometria_rio_shapely):
        #Entonces volcamos
        #Volcamos al nuevo
        #Creamos la feature de destino
        feature_destino = ogr.Feature(capa_destino_esquema)
        """ Podríamos añadir la geometría original del río directamente
            pero para continuar con el ejemplo, vamos a realizar el proceso
            inverso al anterior
        """
        #La geometría en Shapely a WKT
        geometria_rio_wkt = shapely.wkt.dumps(geometria_rio_shapely)
        #El WKT lo pasamos a Geometría OGR
        geometria_destino = ogr.CreateGeometryFromWkt(geometria_rio_wkt)
        #Ahora tenemos la geometría pero en 2D, hay que deshacer la transformación
        transformacion = osr.CoordinateTransformation(referencia_espacial_2D,feature_rio.GetGeometryRef().GetSpatialReference())
        geometria_destino.Transform(transformacion)
        #Ahora ya asignamos la geometría a la nueva feature
        feature_destino.SetGeometry(geometria_destino)
        #Rellenamos los atributos
        feature_destino.SetField("NOMBRE",feature_rio.GetField("NOM_CAUCE"))
        feature_destino.SetField("CAUCE",feature_rio.GetField("LONG_CAUCE"))

        #Volcamos a la capa
        capa_destino.CreateFeature(feature_destino)
        #Limpiamos referencia
        feature_destino = None

    #Actualizamos la feature de origen
    feature_rio = capa_rios.GetNextFeature()

#Una vez acabado el bucle, liberamos los data sources
data_source_destino = None
data_source_provincias = None
data_source_rios = None