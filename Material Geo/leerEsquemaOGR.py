# -*- coding: utf-8 -*-

from osgeo import ogr

#Fichero que vamos a utilizar
nombre_fichero = "shp/PROVINCIAS_NO_CANARIAS_WGS84.shp"
#Creamos el data source
dataSource = ogr.Open(nombre_fichero)
#Seleccionamos la capa 0
capa = dataSource.GetLayer(0)
#Seleccionamos la referencia espacial
referencia_espacial = capa.GetSpatialRef().ExportToProj4()
#Imprimimos el nombre del fichero y la referencia espacial
print("Fichero: ",nombre_fichero," Referencia espacial: ",referencia_espacial,"\n")
#Seleccionamos el esquema de la cama
capa_esquema = capa.GetLayerDefn()
#Recorremos todos los atributos que tiene el fichero
for indice_atributo in range(capa_esquema.GetFieldCount()):
    #Seleccionamos el esquema del atributo
    atributo_esquema = capa_esquema.GetFieldDefn(indice_atributo)
    #Seleccionamos el nombre del atributo
    nombre =  atributo_esquema.GetName()
    #Seleccionamos el código tipo del atributo
    codigo_tipo = atributo_esquema.GetType()
    #Con el código, podemos obtener el código en formato texto
    tipo = atributo_esquema.GetFieldTypeName(codigo_tipo)
    #Seleccionamos el ancho del campo
    ancho = atributo_esquema.GetWidth()
    #Seleccionamos la precisión del campo
    precision = atributo_esquema.GetPrecision()
    #Imprimimos todo por pantalla
    print("Atributo: ",nombre," de tipo ",tipo," con ancho ",ancho," y precisión ",precision)
