# -*- coding: utf-8 -*-

import osgeo.ogr

#Fichero que vamos a utilizar
nombre_fichero = "shp/PROVINCIAS_NO_CANARIAS_WGS84.shp"
#Cargamos el fichero a un data source
datasource = osgeo.ogr.Open(nombre_fichero)
#Obtenemos el número de capas
numero_capas = datasource.GetLayerCount()
print("El fichero contiene {} capas".format(numero_capas))
#Recorremos todas las capas
for indice_capa in range(numero_capas):
    #Obtenemos la capa actual
    capa = datasource.GetLayer(indice_capa)
    #Obtenemos el nombre de la capa
    nombre_capa = capa.GetName()
    #Obtenemos el número de features de la capa
    numero_features = capa.GetFeatureCount()
    #Mostramos en pantalla
    print("La capa {} se llama {}".format(indice_capa,nombre_capa))
    print("La capa {} tiene {} features".format(indice_capa,numero_capas))
    #Recorremos las features
    for indice_feature in range(numero_features):
        #Seleccionamos la feature actual
        feature = capa.GetFeature(indice_feature)
        #Obtenemos la geometría de la feature
        geometria = feature.GetGeometryRef()
        #Obtenemos el nombre/tipo de la geometria
        nombre_geometria = geometria.GetGeometryName()
        #Imprimimos el tipo de geometría
        print("Feature {} tipo de geometría: {}".format(indice_feature,nombre_geometria))
        #Obtenemos los atributos por su nombre y los imprimimos
        atributo_texto = feature.GetField("Texto")
        print("Feature {} atributo Texto: {}".format(indice_feature, atributo_texto))
        atributo_texto_alt = feature.GetField("Texto_Alt")
        print("Feature {} atributo Texto Alt: {}".format(indice_feature, atributo_texto_alt))
        atributo_cod_ccaa = feature.GetField("Cod_CCAA")
        print("Feature {} atributo Cod CCAA: {}".format(indice_feature, atributo_cod_ccaa))
        atributo_ccaa = feature.GetField("CCAA")
        print("Feature {} atributo CCAA: {}".format(indice_feature, atributo_ccaa))
        print("")
    print("")
datasource = None