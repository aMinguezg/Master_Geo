# -*- coding: utf-8 -*-

from osgeo import ogr, osr

"""
    Este script convierte cambia el el sistema de referencia espacial
    de todas las geometrias del fichero a otro especificado.
    En este caso concreto, vamos a leer ficheros que están en sistemas 3D (WGS84)
    para convertirlos a una proyección 2D.
"""
#Establecemos la referencia espacial
"""
    La referencia espacial de destino (proyección en 2D)
    Se utiliza para representar la zona Euro
    https://spatialreference.org/ref/epsg/etrs89-etrs-laea/
    EPSG:3035
"""
referencia_espacial_destino = osr.SpatialReference()
referencia_espacial_destino.ImportFromEPSG(4326)

#Preparamos el fichero /de destino/nuevo/a crear/
fichero_destino = "shp/compatible_OSM.shp"
#Creamos el data source de destino
data_source_destino = ogr.GetDriverByName("ESRI Shapefile").CreateDataSource(fichero_destino)

#Fichero de origen
fichero_origen = "shp/PROVINCIAS_NO_CANARIAS_WGS84.shp"
#Lo abrimos con el data source de origen
data_source_origen = ogr.Open(fichero_origen)
#Recuperamos la capa del origen
capa_origen = data_source_origen.GetLayer()

"""
    Ahora ya tenemos abiertos y preparados tanto el fichero de origen, como
    el fichero de destino.
    El primer paso es copiar el esquema/molde de la capa de origen, en la
    capa de destino. Es decir, la definición de los atributos.
"""

#Creamos la capa en el destino, con el nombre de la capa de origen
capa_destino = data_source_destino.CreateLayer(capa_origen.GetName())

#Creamos el esquema/molde en la capa de destino.
capa_origen_esquema = capa_origen.GetLayerDefn()

#Cada atributo definido en el molde la capa de origen, lo volcamos en la de destino
for i in range(0,capa_origen_esquema.GetFieldCount()):
    atributo_origen_esquema = capa_origen_esquema.GetFieldDefn(i)
    capa_destino.CreateField(atributo_origen_esquema)

"""
    Ya tenemos preparado el molde en el destino. Ahora habrá que ir volcando
    los valores de los atributos DESPUÉS DE hacer las operaciones pertinentes.
    En este caso, vamos a transformar las geometrías.
"""

capa_destino_esquema = capa_destino.GetLayerDefn()
feature_origen = capa_origen.GetNextFeature()
#Iteramos por las features de origen.
while feature_origen:
    #La operación que queremos hacer, es transformar las coordenadas.
    #Podríamos aprovechar aquí decidir si esta feature se añade al fichero o no
    #Y otro tipo de operaciones, obviamente.
    """
        Recuperamos la referencia espacial de la geometría y la cambiamos
        por la de destino
    """
    geometria_origen = feature_origen.GetGeometryRef()
    #Referencia de origen
    referencia_espacial_origen = geometria_origen.GetSpatialReference()
    print(referencia_espacial_origen)
    #Clonamos la geometria de origen
    geometria_destino = geometria_origen.Clone()
    #Creamos una transformación con la referencia de origen y de destino
    transformacion = osr.CoordinateTransformation(referencia_espacial_origen, referencia_espacial_destino)
    #Ejecutamos la transformación
    geometria_destino.Transform(transformacion)

    """
        A partir de aquí, seguimos el proceso normal: crear y rellenar la feature destino
        con los valores de atributo y asignarle la geometría correspondiente
    """
    #Creamos la feature de destino
    feature_destino = ogr.Feature(capa_destino_esquema)
    #Establecemos la geometría
    feature_destino.SetGeometry(geometria_destino)
    #Recorremos cada uno de los atributos
    for i in range(0, capa_destino_esquema.GetFieldCount()):
        #Y le establecemos el valor en la feature de destino
        feature_destino.SetField(capa_destino_esquema.GetFieldDefn(i).GetNameRef(), feature_origen.GetField(i))

    #Una vez lista la feature, la añadimos a la capa
    capa_destino.CreateFeature(feature_destino)
    #Limpiamos referencia y actualizamos la feature de origen
    feature_destino = None
    feature_origen = capa_origen.GetNextFeature()

#Una vez acabado el bucle, liberamos los data sources

data_source_destino = None
data_source_origen = None





