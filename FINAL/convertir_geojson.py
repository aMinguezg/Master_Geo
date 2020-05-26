import json
import ogr

driver = ogr.GetDriverByName('ESRI Shapefile')
shp_path = r'shp\ZonasVulnerablesZonaMadrid.shp'
data_source = driver.Open(shp_path, 0)
nombre_variable = "resultado"

fc = {
    'type': 'FeatureCollection',
    'features': []
    }

lyr = data_source.GetLayer(0)
for feature in lyr:
    fc['features'].append(feature.ExportToJson(as_object=True))

with open('geojson_ZonasVulnerablesZonaMadrid.js', 'w') as f:
    f.write(nombre_variable+ " = ")
    json.dump(fc, f)