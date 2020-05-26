# -*- coding: utf-8 -*-

from osgeo import ogr, osr
#Nombre del fichero a crear
nombre_fichero = "ejemplo.geojson"
#Vamos a crearlo con formato GeoJSON
gestor = ogr.GetDriverByName("GeoJSON")
#Creamos el datasource
datasource = gestor.CreateDataSource(nombre_fichero)
#Establecemos la referencia espacial
referencia_espacial = osr.SpatialReference()
referencia_espacial.SetWellKnownGeogCS('WGS84')
#Creamos la capa
capa = datasource.CreateLayer("Primera capa", referencia_espacial)
#Creamos el esquema de atributos de la feature (característica)
#Nombre del atributo y tipo
esquema_atributo = ogr.FieldDefn("ID", ogr.OFTInteger)
#El ancho máximo (espacios que ocupa)
esquema_atributo.SetWidth(4)
#Lo añadimos a la capa
capa.CreateField(esquema_atributo)

#Creamos otro pero que se llama nombre y sea texto
esquema_atributo = ogr.FieldDefn("NOMBRE", ogr.OFTString)
esquema_atributo.SetWidth(20)
capa.CreateField(esquema_atributo)

#Ahora vamos a llenar la lista de features, tenemos dos atributos que rellenar

#Atributos para Mieres
atributo_id = 1
atributo_nombre = "Mieres"
longitud = -5.7785282
latitud = 43.249719
#Necesitamos crear la geometría, formato WKT

#El WTK lo transformamos en un objeto
geometria = ogr.CreateGeometryFromWkt(geometria_wkt)


#Creamos la feature y la rellenamos con la información
feature = ogr.Feature(capa.GetLayerDefn())
feature.SetGeometry(geometria)
feature.GetGeometry()
feature.SetField("ID", atributo_id)
feature.SetField("NOMBRE", atributo_nombre)
capa.CreateFeature(feature)

#Liberamos
datasource = None