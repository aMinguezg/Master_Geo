from osgeo import ogr, osr
"""
	En este ejemplo, vamos a extraer del SHP de ríos de España
    los que tengan más de 100km de longitud.
"""

#Fichero de origen
fichero_origen = "shp/RIOSESP_WGS84.shp"
#Lo abrimos con el data source de origen
data_source_origen = ogr.Open(fichero_origen)
#Recuperamos la capa del origen
capa_origen = data_source_origen.GetLayer()



#Preparamos el fichero /de destino/nuevo/a crear/
fichero_destino = "shp/rios_100km.shp"
#Creamos el data source de destino
data_source_destino = ogr.GetDriverByName("ESRI Shapefile").CreateDataSource(fichero_destino)
#Creamos la capa de destino, con la referencia espacial del fichero de origen
capa_destino = data_source_destino.CreateLayer("Rios 100km",capa_origen.GetSpatialRef())

#A continuación, damos forma al molde.

#Un atributo con el nombre del río
esquema_atributo = ogr.FieldDefn("NOMBRE", ogr.OFTString)
esquema_atributo.SetWidth(40)

capa_destino.CreateField(esquema_atributo)

#Un atributo con el cauce del río
esquema_atributo = ogr.FieldDefn("CAUCE", ogr.OFTReal)
esquema_atributo.SetWidth(20)
esquema_atributo.SetPrecision(11)
capa_destino.CreateField(esquema_atributo)


"""
    A partir de aquí, iteramos por las features de origen, y volcamos aquellas
    que cumplen la condición
"""
capa_destino_esquema = capa_destino.GetLayerDefn()
feature_origen = capa_origen.GetNextFeature()
while feature_origen:
    #¿Cumple la condición la feature de origen?
    if feature_origen.GetField("LONG_CAUCE") > 100:
        #Volcamos al nuevo
        #Creamos la feature de destino
        feature_destino = ogr.Feature(capa_destino_esquema)
        #Establecemos la geometría
        feature_destino.SetGeometry(feature_origen.GetGeometryRef())
        #Rellenamos los atributos
        feature_destino.SetField("NOMBRE",feature_origen.GetField("NOM_CAUCE"))
        feature_destino.SetField("CAUCE",feature_origen.GetField("LONG_CAUCE"))

        #Volcamos a la capa
        capa_destino.CreateFeature(feature_destino)
        #Limpiamos referencia
        feature_destino = None

    #Actualizamos la feature de origen
    feature_origen = capa_origen.GetNextFeature()

#Una vez acabado el bucle, liberamos los data sources

data_source_destino = None
data_source_origen = None