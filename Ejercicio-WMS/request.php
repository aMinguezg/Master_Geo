<?xml version='1.0' encoding="ISO-8859-1" standalone="no" ?>
<!DOCTYPE WMT_MS_Capabilities SYSTEM "http://schemas.opengis.net/wms/1.1.1/WMS_MS_Capabilities.dtd"
 [
 <!ELEMENT VendorSpecificCapabilities EMPTY>
 ]>  <!-- end of DOCTYPE declaration -->

<WMT_MS_Capabilities version="1.1.1">

<!-- MapServer version 6.2.1 OUTPUT=PNG OUTPUT=JPEG OUTPUT=KML SUPPORTS=PROJ SUPPORTS=AGG SUPPORTS=FREETYPE SUPPORTS=CAIRO SUPPORTS=SVG_SYMBOLS SUPPORTS=ICONV SUPPORTS=XMP SUPPORTS=FRIBIDI SUPPORTS=WMS_SERVER SUPPORTS=WMS_CLIENT SUPPORTS=WFS_SERVER SUPPORTS=WFS_CLIENT SUPPORTS=WCS_SERVER SUPPORTS=SOS_SERVER SUPPORTS=FASTCGI SUPPORTS=THREADS SUPPORTS=GEOS INPUT=JPEG INPUT=ORACLESPATIAL INPUT=OGR INPUT=GDAL INPUT=SHAPEFILE -->

<Service>
  <Name>OGC:WMS</Name>
  <Title>La Rioja - Cartografia tematica [IDErioja]</Title>
  <Abstract>Infraestructura de Datos Espaciales de La Rioja (Espana). Servicio OGC WMS del Gobierno de La Rioja de Cartografia Tematica.</Abstract>
  <KeywordList>
      <Keyword>IDERIOJA</Keyword>
      <Keyword> LA RIOJA</Keyword>
  </KeywordList>
  <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php"/>
  <ContactInformation>
    <ContactPersonPrimary>
      <ContactPerson>Gonzalo Lopez Garcia</ContactPerson>
      <ContactOrganization>Direccion General de Urbanismo y Vivienda - Consejeria de Obras Publicas, Politica Local y Politica Territorial - Gobierno de La Rioja (Espana)</ContactOrganization>
    </ContactPersonPrimary>
      <ContactPosition>Jefe de Seccion de Sistemas de Informacion Geografica y Cartografia</ContactPosition>
    <ContactAddress>
        <AddressType>POSTAL</AddressType>
        <Address>C/Prado Viejo, 62 bis</Address>
        <City>Logrono</City>
        <StateOrProvince>La Rioja</StateOrProvince>
        <PostCode>26071</PostCode>
        <Country>Spain, Spanish State</Country>
    </ContactAddress>
      <ContactVoiceTelephone>+34 941.291.100 Ext 4578</ContactVoiceTelephone>
      <ContactFacsimileTelephone>+34 941.291.100 Ext 4578</ContactFacsimileTelephone>
  <ContactElectronicMailAddress>gonzalo.lopez@larioja.org,sig@larioja.org</ContactElectronicMailAddress>
  </ContactInformation>
  <Fees>NONE</Fees>
  <AccessConstraints>NONE</AccessConstraints>
</Service>

<Capability>
  <Request>
    <GetCapabilities>
      <Format>application/vnd.ogc.wms_xml</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Post>
        </HTTP>
      </DCPType>
    </GetCapabilities>
    <GetMap>
      <Format>image/png</Format>
      <Format>image/jpeg</Format>
      <Format>image/png; mode=8bit</Format>
      <Format>application/x-pdf</Format>
      <Format>image/svg+xml</Format>
      <Format>image/tiff</Format>
      <Format>application/vnd.google-earth.kml+xml</Format>
      <Format>application/vnd.google-earth.kmz</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Post>
        </HTTP>
      </DCPType>
    </GetMap>
    <GetFeatureInfo>
      <Format>text/html</Format>
      <Format>application/vnd.ogc.gml</Format>
      <Format>text/plain</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Post>
        </HTTP>
      </DCPType>
    </GetFeatureInfo>
    <DescribeLayer>
      <Format>text/xml</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Post>
        </HTTP>
      </DCPType>
    </DescribeLayer>
    <GetLegendGraphic>
      <Format>image/png</Format>
      <Format>image/jpeg</Format>
      <Format>image/png; mode=8bit</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Post>
        </HTTP>
      </DCPType>
    </GetLegendGraphic>
    <GetStyles>
      <Format>text/xml</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://ogc.larioja.org/wms/request.php?"/></Post>
        </HTTP>
      </DCPType>
    </GetStyles>
  </Request>
  <Exception>
    <Format>application/vnd.ogc.se_xml</Format>
    <Format>application/vnd.ogc.se_inimage</Format>
    <Format>application/vnd.ogc.se_blank</Format>
  </Exception>
  <VendorSpecificCapabilities />
  <UserDefinedSymbolization SupportSLD="1" UserLayer="0" UserStyle="1" RemoteWFS="0"/>
  <Layer>
    <Name>la_rioja_-_cartografia_tematica_iderioja</Name>
    <Title>La Rioja - Cartografia tematica [IDErioja]</Title>
    <Abstract>Infraestructura de Datos Espaciales de La Rioja (Espana). Servicio OGC WMS del Gobierno de La Rioja de Cartografia Tematica.</Abstract>
    <KeywordList>
        <Keyword>IDERIOJA</Keyword>
        <Keyword> LA RIOJA</Keyword>
    </KeywordList>
    <SRS>EPSG:25830</SRS>
    <SRS>EPSG:23030</SRS>
    <SRS>EPSG:32630</SRS>
    <SRS>EPSG:4230</SRS>
    <SRS>EPSG:4258</SRS>
    <SRS>EPSG:4326</SRS>
    <SRS>EPSG:3857</SRS>
    <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
    <BoundingBox SRS="EPSG:25830"
                minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
    <Attribution>
        <Title>INFRAESTRUCTURA DE DATOS ESPACIALES DEL GOBIERNO DE LA RIOJA</Title>
        <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://www.iderioja.org"/>
        <LogoURL width="180" height="91">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.iderioja.org/imagenes/logo2006.png"/>
          </LogoURL>
    </Attribution>
    <ScaleHint min="0" max="114747.655138817" />
    <Layer>
      <Title>Servicios e instalaciones</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>actividades_al_aire_libre</Name>
        <Title>Actividades al aire libre</Title>
        <Abstract>Actividades al aire libre</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="104" height="39">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=actividades_al_aire_libre&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>actividades_deportivas</Name>
        <Title>Actividades deportivas</Title>
        <Abstract>Actividades deportivas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="184" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=actividades_deportivas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>areas_recreativas</Name>
        <Title>Áreas recreativas</Title>
        <Abstract>Áreas recreativas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="150" height="25">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=areas_recreativas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>captaciones</Name>
        <Title>Captaciones</Title>
        <Abstract>Captaciones</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="118" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=captaciones&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>centros_educativos</Name>
        <Title>Centros educativos</Title>
        <Abstract>Centros educativos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="165" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=centros_educativos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>cuadricula_minera_1980</Name>
        <Title>Cuadrícula minera 1980</Title>
        <Abstract>Cuadrícula minera 1980</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="192" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=cuadricula_minera_1980&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <ScaleHint min="0" max="24.9451424214819" />
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>cuadricula_minera_2015</Name>
        <Title>Cuadrícula minera 2015</Title>
        <Abstract>Cuadrícula minera 2015</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="190" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=cuadricula_minera_2015&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>depositos</Name>
        <Title>Depósitos</Title>
        <Abstract>Depósitos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="102" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=depositos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>derechos_mineros_areas</Name>
        <Title>Derechos mineros_áreas</Title>
        <Abstract>Derechos mineros_áreas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="200" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=derechos_mineros_areas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>derechos_mineros_puntos</Name>
        <Title>Derechos mineros_puntos</Title>
        <Abstract>Derechos mineros_puntos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="210" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=derechos_mineros_puntos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>estaciones_de_itv_autorizadas</Name>
        <Title>Estaciones de ITV autorizadas</Title>
        <Abstract>Estaciones de ITV autorizadas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="239" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=estaciones_de_itv_autorizadas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>infraestructuras_de_navegacion_aerea</Name>
        <Title>Infraestructuras de navegación aérea</Title>
        <Abstract>Infraestructuras de navegación aérea</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="281" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=infraestructuras_de_navegacion_aerea&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>instalaciones_deportivas</Name>
        <Title>Instalaciones deportivas</Title>
        <Abstract>Instalaciones deportivas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="195" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=instalaciones_deportivas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>oficinas_de_atencion_al_ciudadano</Name>
        <Title>Oficinas de Atención al Ciudadano</Title>
        <Abstract>Oficinas de Atención al Ciudadano</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="263" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=oficinas_de_atencion_al_ciudadano&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>piercing_tatuajes_y_micropigmentacion_establecimientos</Name>
        <Title>Piercing tatuajes y micropigmentación_establecimientos</Title>
        <Abstract>Piercing tatuajes y micropigmentación_establecimientos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="411" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=piercing_tatuajes_y_micropigmentacion_establecimientos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>registro_de_explotaciones_ganaderas</Name>
        <Title>Registro de explotaciones ganaderas</Title>
        <Abstract>Registro de explotaciones ganaderas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="280" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=registro_de_explotaciones_ganaderas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>tomas_de_agua</Name>
        <Title>Tomas de agua</Title>
        <Abstract>Tomas de agua</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="136" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=tomas_de_agua&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Medio físico</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>acuiferos</Name>
        <Title>Acuíferos</Title>
        <Abstract>Acuíferos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="99" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=acuiferos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>hidrografia</Name>
        <Title>Hidrografía</Title>
        <Abstract>Hidrografía</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="107" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=hidrografia&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>lineas_tectonicas</Name>
        <Title>Lineas tectónicas</Title>
        <Abstract>Lineas tectónicas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="152" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=lineas_tectonicas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>modelo_digital_de_elevaciones_1x1_m_-_vuelo_lidar_2016</Name>
        <Title>Modelo Digital de Elevaciones 1x1 m - Vuelo LIDAR 2016</Title>
        <Abstract>Modelo Digital de Elevaciones 1x1 m - Vuelo LIDAR 2016</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="410" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=modelo_digital_de_elevaciones_1x1_m_-_vuelo_lidar_2016&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>puntos_singulares_geologico-mineros</Name>
        <Title>Puntos singulares geológico-mineros</Title>
        <Abstract>Puntos singulares geológico-mineros</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="282" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=puntos_singulares_geologico-mineros&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>unidades_geologicas</Name>
        <Title>Unidades geólogicas</Title>
        <Abstract>Unidades geólogicas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="170" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=unidades_geologicas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Gestión del territorio</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>arboles_singulares</Name>
        <Title>Árboles singulares</Title>
        <Abstract>Árboles singulares</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="155" height="25">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=arboles_singulares&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>areas_de_interes_especial_de_especies_protegidas_de_fauna</Name>
        <Title>Áreas de interés especial de especies protegidas de fauna</Title>
        <Abstract>Áreas de interés especial de especies protegidas de fauna</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="420" height="25">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=areas_de_interes_especial_de_especies_protegidas_de_fauna&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>areas_de_interes_de_especies_protegidas_de_flora</Name>
        <Title>Áreas de interés de especies protegidas de flora</Title>
        <Abstract>Áreas de interés de especies protegidas de flora</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="355" height="25">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=areas_de_interes_de_especies_protegidas_de_flora&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>areas_naturales_singulares</Name>
        <Title>Áreas Naturales Singulares</Title>
        <Abstract>Áreas Naturales Singulares</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="213" height="25">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=areas_naturales_singulares&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>espacios_protegidos_red_natura_2000</Name>
        <Title>Espacios Protegidos Red Natura 2000</Title>
        <Abstract>Espacios Protegidos Red Natura 2000</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="290" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=espacios_protegidos_red_natura_2000&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>humedales_ramsar</Name>
        <Title>Humedales RAMSAR</Title>
        <Abstract>Humedales RAMSAR</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="173" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=humedales_ramsar&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>inventario_espanol_de_zonas_humedas</Name>
        <Title>Inventario español de zonas húmedas</Title>
        <Abstract>Inventario español de zonas húmedas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="284" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=inventario_espanol_de_zonas_humedas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>lineas_electricas_de_alta_tension_en_zonas_de_proteccion</Name>
        <Title>Líneas eléctricas de alta tensión en zonas de protección</Title>
        <Abstract>Líneas eléctricas de alta tensión en zonas de protección</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="410" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=lineas_electricas_de_alta_tension_en_zonas_de_proteccion&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>montes_de_utilidad_publica_mups</Name>
        <Title>Montes de Utilidad Publica_MUPs</Title>
        <Abstract>Montes de Utilidad Publica_MUPs</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="257" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=montes_de_utilidad_publica_mups&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>montes_ordenados</Name>
        <Title>Montes ordenados</Title>
        <Abstract>Montes ordenados</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="159" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=montes_ordenados&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>reforestaciones</Name>
        <Title>Reforestaciones</Title>
        <Abstract>Reforestaciones</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="145" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=reforestaciones&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>eliminacion_de_combustibles_lenosos_en_montes_no_de_up</Name>
        <Title>Eliminación de combustibles leñosos en montes no de UP</Title>
        <Abstract>Eliminación de combustibles leñosos en montes no de UP</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="420" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=eliminacion_de_combustibles_lenosos_en_montes_no_de_up&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>parques_naturales</Name>
        <Title>Parques naturales</Title>
        <Abstract>Parques naturales</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="154" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=parques_naturales&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>plan_especial_proteccion_medio_ambiente_natural_pepman</Name>
        <Title>Plan Especial Protección Medio Ambiente Natural_PEPMAN</Title>
        <Abstract>Plan Especial Protección Medio Ambiente Natural_PEPMAN</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="432" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=plan_especial_proteccion_medio_ambiente_natural_pepman&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>proteccion_de_la_avifauna_en_lineas_electricas_de_alta_tension</Name>
        <Title>Protección de la avifauna en líneas eléctricas de alta tensión</Title>
        <Abstract>Protección de la avifauna en líneas eléctricas de alta tensión</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="437" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=proteccion_de_la_avifauna_en_lineas_electricas_de_alta_tension&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>reserva_de_la_biosfera</Name>
        <Title>Reserva de la Biosfera</Title>
        <Abstract>Reserva de la Biosfera</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=reserva_de_la_biosfera&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>reservas_naturales</Name>
        <Title>Reservas naturales</Title>
        <Abstract>Reservas naturales</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="161" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=reservas_naturales&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>suelo_industrial</Name>
        <Title>Suelo industrial</Title>
        <Abstract>Suelo industrial</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="135" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=suelo_industrial&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>terrenos_acotados_de_setas</Name>
        <Title>Terrenos acotados de setas</Title>
        <Abstract>Terrenos acotados de setas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="223" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=terrenos_acotados_de_setas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>terrenos_cinegeticos_y_no_cinegeticos</Name>
        <Title>Terrenos Cinegéticos y No Cinegéticos</Title>
        <Abstract>Terrenos Cinegéticos y No Cinegéticos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="295" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=terrenos_cinegeticos_y_no_cinegeticos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>urbanismo_planeamiento_urbanistico</Name>
        <Title>Urbanismo_Planeamiento urbanístico</Title>
        <Abstract>Urbanismo_Planeamiento urbanístico</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="284" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=urbanismo_planeamiento_urbanistico&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>urbanismo_instrumentos_de_ordenacion_del_territorio</Name>
        <Title>Urbanismo_Instrumentos de ordenación del territorio</Title>
        <Abstract>Urbanismo_Instrumentos de ordenación del territorio</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="388" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=urbanismo_instrumentos_de_ordenacion_del_territorio&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>directriz_de_proteccion_de_suelo_no_urbanizable_de_la_rioja</Name>
        <Title>Directriz de protección de suelo no urbanizable de La Rioja</Title>
        <Abstract>Directriz de protección de suelo no urbanizable de La Rioja</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="422" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=directriz_de_proteccion_de_suelo_no_urbanizable_de_la_rioja&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>zona_de_exclusion_para_la_ubicacion_de_parques_eolicos</Name>
        <Title>Zona de exclusión para la ubicación de parques eólicos</Title>
        <Abstract>Zona de exclusión para la ubicación de parques eólicos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="397" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=zona_de_exclusion_para_la_ubicacion_de_parques_eolicos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>zonas_de_proteccion_para_la_alimentacion_de_especies_necrofagas_de_interes_comunitario</Name>
        <Title>Zonas de Protección para la Alimentación de Especies Necrófagas de Interés Comunitario</Title>
        <Abstract>Zonas de Protección para la Alimentación de Especies Necrófagas de Interés Comunitario</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="636" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=zonas_de_proteccion_para_la_alimentacion_de_especies_necrofagas_de_interes_comunitario&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>zonificacion_de_los_espacios_protegidos_red_natura_2000</Name>
        <Title>Zonificación de los Espacios Protegidos Red Natura 2000</Title>
        <Abstract>Zonificación de los Espacios Protegidos Red Natura 2000</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="420" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=zonificacion_de_los_espacios_protegidos_red_natura_2000&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Sociedad y cultura</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>barrios_de_bodegas</Name>
        <Title>Barrios de bodegas</Title>
        <Abstract>Barrios de bodegas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="162" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=barrios_de_bodegas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>barrios_de_bodegas_-_elementos</Name>
        <Title>Barrios de bodegas - Elementos</Title>
        <Abstract>Barrios de bodegas - Elementos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="144" height="192">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=barrios_de_bodegas_-_elementos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>bic_camino_de_santiago</Name>
        <Title>BIC Camino de Santiago</Title>
        <Abstract>BIC Camino de Santiago</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="198" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=bic_camino_de_santiago&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>monumentos_asociados_al_camino_de_santiago_frances</Name>
        <Title>Monumentos asociados al Camino de Santiago Francés</Title>
        <Abstract>Monumentos asociados al Camino de Santiago Francés</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="407" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=monumentos_asociados_al_camino_de_santiago_frances&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>camino_de_santiago_del_interior</Name>
        <Title>Camino de Santiago del Interior</Title>
        <Abstract>Camino de Santiago del Interior</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="244" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=camino_de_santiago_del_interior&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>monumentos_asociados_al_camino_de_santiago_del_interior</Name>
        <Title>Monumentos asociados al Camino de Santiago del Interior</Title>
        <Abstract>Monumentos asociados al Camino de Santiago del Interior</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="425" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=monumentos_asociados_al_camino_de_santiago_del_interior&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>bienes_de_interes_cultural</Name>
        <Title>Bienes de interés cultural</Title>
        <Abstract>Bienes de interés cultural</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="100" height="39">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=bienes_de_interes_cultural&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Vías de comunicación</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>carreteras</Name>
        <Title>Carreteras</Title>
        <Abstract>Carreteras</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="125" height="124">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=carreteras&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>carreteras_exteriores</Name>
        <Title>Carreteras exteriores</Title>
        <Abstract>Carreteras exteriores</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="176" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=carreteras_exteriores&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>etapas_de_los_senderos</Name>
        <Title>Etapas de los senderos</Title>
        <Abstract>Etapas de los senderos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="190" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=etapas_de_los_senderos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>ferrocarril</Name>
        <Title>Ferrocarril</Title>
        <Abstract>Ferrocarril</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="100" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=ferrocarril&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>incidencias_en_la_red_de_carreteras</Name>
        <Title>Incidencias en la red de carreteras</Title>
        <Abstract>Incidencias en la red de carreteras</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="259" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=incidencias_en_la_red_de_carreteras&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>obras_en_la_red_de_carreteras</Name>
        <Title>Obras en la red de carreteras</Title>
        <Abstract>Obras en la red de carreteras</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="227" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=obras_en_la_red_de_carreteras&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>puntos_de_interes_de_senderos</Name>
        <Title>Puntos de interés de senderos</Title>
        <Abstract>Puntos de interés de senderos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="238" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=puntos_de_interes_de_senderos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>puntos_kilometricos</Name>
        <Title>Puntos kilométricos</Title>
        <Abstract>Puntos kilométricos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="168" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=puntos_kilometricos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Cubierta terrestre</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>corine_land_cover_1990_nivel_3</Name>
        <Title>Corine Land Cover 1990 Nivel 3</Title>
        <Abstract>Corine Land Cover 1990 Nivel 3</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="244" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=corine_land_cover_1990_nivel_3&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>corine_land_cover_2000_nivel_3</Name>
        <Title>Corine Land Cover 2000 Nivel 3</Title>
        <Abstract>Corine Land Cover 2000 Nivel 3</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="244" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=corine_land_cover_2000_nivel_3&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>corine_land_cover_2000_nivel_5</Name>
        <Title>Corine Land Cover 2000 Nivel 5</Title>
        <Abstract>Corine Land Cover 2000 Nivel 5</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="243" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=corine_land_cover_2000_nivel_5&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>corine_land_cover_2006_nivel_3</Name>
        <Title>Corine Land Cover 2006 Nivel 3</Title>
        <Abstract>Corine Land Cover 2006 Nivel 3</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="244" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=corine_land_cover_2006_nivel_3&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>inventario_de_frutales</Name>
        <Title>Inventario de Frutales</Title>
        <Abstract>Inventario de Frutales</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="176" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=inventario_de_frutales&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <ScaleHint min="0" max="49.8902848429637" />
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>habitats_de_interes_comunitario</Name>
        <Title>Hábitats de Interés Comunitario</Title>
        <Abstract>Hábitats de Interés Comunitario</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="248" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=habitats_de_interes_comunitario&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>mapa_forestal</Name>
        <Title>Mapa forestal</Title>
        <Abstract>Mapa forestal</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="126" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=mapa_forestal&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <ScaleHint min="0" max="49.8902848429637" />
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>siose_2005</Name>
        <Title>SIOSE 2005</Title>
        <Abstract>SIOSE 2005</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="116" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=siose_2005&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <ScaleHint min="0" max="49.8902848429637" />
      </Layer>
    </Layer>
    <Layer>
      <Title>Información geodésica y cartográfica</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>cuadricula_utm_de_1_x_1_km</Name>
        <Title>Cuadrícula UTM de 1 x 1 km</Title>
        <Abstract>Cuadrícula UTM de 1 x 1 km</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="219" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=cuadricula_utm_de_1_x_1_km&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>cuadricula_utm_de_10_x_10_km</Name>
        <Title>Cuadrícula UTM de 10 x 10 km</Title>
        <Abstract>Cuadrícula UTM de 10 x 10 km</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="237" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=cuadricula_utm_de_10_x_10_km&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>descarga_de_ortofotos</Name>
        <Title>Descarga de ortofotos</Title>
        <Abstract>Descarga de ortofotos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="187" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=descarga_de_ortofotos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>hojas_cartograficas_10000</Name>
        <Title>Hojas cartográficas 10000</Title>
        <Abstract>Hojas cartográficas 10000</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="213" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=hojas_cartograficas_10000&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>hojas_cartograficas_25000</Name>
        <Title>Hojas cartográficas 25000</Title>
        <Abstract>Hojas cartográficas 25000</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="212" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=hojas_cartograficas_25000&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>hojas_cartograficas_5000</Name>
        <Title>Hojas cartográficas 5000</Title>
        <Abstract>Hojas cartográficas 5000</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="204" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=hojas_cartograficas_5000&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>hojas_cartograficas_50000</Name>
        <Title>Hojas cartográficas 50000</Title>
        <Abstract>Hojas cartográficas 50000</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="213" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=hojas_cartograficas_50000&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>puntos_geodesicos</Name>
        <Title>Puntos geodésicos</Title>
        <Abstract>Puntos geodésicos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="163" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=puntos_geodesicos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>relieve_sombreado</Name>
        <Title>Relieve sombreado</Title>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
      </Layer>
    </Layer>
    <Layer>
      <Title>Información topográfica</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>descarga_de_cartografia_topografica</Name>
        <Title>Descarga de cartografía topográfica</Title>
        <Abstract>Descarga de cartografía topográfica</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="277" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=descarga_de_cartografia_topografica&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>hojas_del_mapa_topografico_regional_bta</Name>
        <Title>Hojas del Mapa Topográfico Regional_BTA</Title>
        <Abstract>Hojas del Mapa Topográfico Regional_BTA</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="320" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=hojas_del_mapa_topografico_regional_bta&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vias_pecuarias_lineas</Name>
        <Title>Vías pecuarias_líneas</Title>
        <Abstract>Vías pecuarias_líneas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="178" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=vias_pecuarias_lineas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vias_pecuarias_poligonos</Name>
        <Title>Vías pecuarias_polígonos</Title>
        <Abstract>Vías pecuarias_polígonos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="205" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=vias_pecuarias_poligonos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Protección Civil</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_agrupaciones_de_voluntarios</Name>
        <Title>Emergencias_Agrupaciones de voluntarios</Title>
        <Abstract>Emergencias_Agrupaciones de voluntarios</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="316" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_agrupaciones_de_voluntarios&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_centros_de_conservacion_de_carreteras</Name>
        <Title>Emergencias_Centros de conservación de carreteras</Title>
        <Abstract>Emergencias_Centros de conservación de carreteras</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="388" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_centros_de_conservacion_de_carreteras&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_parques_de_bomberos</Name>
        <Title>Emergencias_Parques de bomberos</Title>
        <Abstract>Emergencias_Parques de bomberos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="274" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_parques_de_bomberos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_2_33_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 2_33 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 2_33 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="492" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_2_33_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_5_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 5 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 5 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="466" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_5_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_10_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 10 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 10 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="475" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_10_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_25_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 25 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 25 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="474" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_25_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_50_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 50 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 50 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="475" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_50_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_100_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 100 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 100 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="484" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_100_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_500_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 500 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 500 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="484" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_500_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_precipitaciones_maximas_periodo_de_retorno_de_1000_a</Name>
        <Title>Emergencias_Precipitaciones máximas periodo de retorno de 1000 a</Title>
        <Abstract>Emergencias_Precipitaciones máximas periodo de retorno de 1000 a</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="493" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_precipitaciones_maximas_periodo_de_retorno_de_1000_a&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_recursos_sanitarios</Name>
        <Title>Emergencias_Recursos sanitarios</Title>
        <Abstract>Emergencias_Recursos sanitarios</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="261" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_recursos_sanitarios&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <ScaleHint min="0" max="12472.5712107409" />
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_riesgos_naturales_por_incendios</Name>
        <Title>Emergencias_Riesgos naturales por incendios</Title>
        <Abstract>Emergencias_Riesgos naturales por incendios</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="340" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_riesgos_naturales_por_incendios&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_riesgos_naturales_por_nevadas</Name>
        <Title>Emergencias_Riesgos naturales por nevadas</Title>
        <Abstract>Emergencias_Riesgos naturales por nevadas</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="332" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_riesgos_naturales_por_nevadas&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_vialidad</Name>
        <Title>Emergencias_Vialidad</Title>
        <Abstract>Emergencias_Vialidad</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="178" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_vialidad&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonas_basicas_de_salud</Name>
        <Title>Emergencias_Zonas básicas de salud</Title>
        <Abstract>Emergencias_Zonas básicas de salud</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="284" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonas_basicas_de_salud&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonas_de_riesgo_tecnologico</Name>
        <Title>Emergencias_Zonas de riesgo tecnológico</Title>
        <Abstract>Emergencias_Zonas de riesgo tecnológico</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="318" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonas_de_riesgo_tecnologico&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonificacion_de_la_guarderia_forestal</Name>
        <Title>Emergencias_Zonificación de la Guardería Forestal</Title>
        <Abstract>Emergencias_Zonificación de la Guardería Forestal</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="373" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonificacion_de_la_guarderia_forestal&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonificacion_de_la_guardia_civil</Name>
        <Title>Emergencias_Zonificación de la Guardía Civil</Title>
        <Abstract>Emergencias_Zonificación de la Guardía Civil</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="332" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonificacion_de_la_guardia_civil&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonificacion_de_las_agrupaciones_de_voluntarios</Name>
        <Title>Emergencias_Zonificación de las agrupaciones de voluntarios</Title>
        <Abstract>Emergencias_Zonificación de las agrupaciones de voluntarios</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="444" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonificacion_de_las_agrupaciones_de_voluntarios&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonificacion_de_los_retenes_de_incendios</Name>
        <Title>Emergencias_Zonificación de los retenes de incendios</Title>
        <Abstract>Emergencias_Zonificación de los retenes de incendios</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="396" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonificacion_de_los_retenes_de_incendios&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>emergencias_zonificacion_de_los_servicios_de_extincion_y_salvamento</Name>
        <Title>Emergencias_Zonificación de los servicios de extinción y salvamento</Title>
        <Abstract>Emergencias_Zonificación de los servicios de extinción y salvamento</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="494" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=emergencias_zonificacion_de_los_servicios_de_extincion_y_salvamento&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>mapa_de_riesgos_del_transporte_de_mercancias_peligrosas_por_carretera_y_ferrocarril</Name>
        <Title>Mapa de riesgos del transporte de mercancías peligrosas por carretera y ferrocarril</Title>
        <Abstract>Mapa de riesgos del transporte de mercancías peligrosas por carretera y ferrocarril</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="585" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=mapa_de_riesgos_del_transporte_de_mercancias_peligrosas_por_carretera_y_ferrocarril&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Sin asignar</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>estaciones_de_medicion</Name>
        <Title>Estaciones de medición</Title>
        <Abstract>Estaciones de medición</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="406" height="141">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=estaciones_de_medicion&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>nucleos_urbanos</Name>
        <Title>Núcleos urbanos</Title>
        <Abstract>Núcleos urbanos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="145" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=nucleos_urbanos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Unidades administrativas</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>municipios</Name>
        <Title>Municipios</Title>
        <Abstract>Municipios</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="103" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=municipios&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>perimetro</Name>
        <Title>Perímetro</Title>
        <Abstract>Perímetro</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="101" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=perimetro&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Calidad ambiental, salud y seguridad humanas</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>ruido_estudios_de_los_niveles_sonoros_periodo_conjunto_dia_tarde_y_noche</Name>
        <Title>Ruido_Estudios de los niveles sonoros_Periodo conjunto día tarde y noche</Title>
        <Abstract>Ruido_Estudios de los niveles sonoros_Periodo conjunto día tarde y noche</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="533" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=ruido_estudios_de_los_niveles_sonoros_periodo_conjunto_dia_tarde_y_noche&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>ruido_estudios_de_los_niveles_sonoros_periodo_dia</Name>
        <Title>Ruido_Estudios de los niveles sonoros_Periodo día</Title>
        <Abstract>Ruido_Estudios de los niveles sonoros_Periodo día</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="375" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=ruido_estudios_de_los_niveles_sonoros_periodo_dia&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>ruido_estudios_de_los_niveles_sonoros_periodo_tarde</Name>
        <Title>Ruido_Estudios de los niveles sonoros_Periodo tarde</Title>
        <Abstract>Ruido_Estudios de los niveles sonoros_Periodo tarde</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="390" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=ruido_estudios_de_los_niveles_sonoros_periodo_tarde&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>ruido_estudios_de_los_niveles_sonoros_periodo_noche</Name>
        <Title>Ruido_Estudios de los niveles sonoros_Periodo noche</Title>
        <Abstract>Ruido_Estudios de los niveles sonoros_Periodo noche</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="396" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=ruido_estudios_de_los_niveles_sonoros_periodo_noche&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>zonas_vulnerables_a_la_contaminacion_por_nitratos</Name>
        <Title>Zonas vulnerables a la contaminacion por nitratos</Title>
        <Abstract>Zonas vulnerables a la contaminacion por nitratos</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="366" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=zonas_vulnerables_a_la_contaminacion_por_nitratos&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer>
      <Title>Poblaciones y edificaciones</Title>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>viviendas_de_proteccion_oficial_vpo</Name>
        <Title>Viviendas de Protección Oficial VPO</Title>
        <Abstract>Viviendas de Protección Oficial VPO</Abstract>
        <SRS>EPSG:25830</SRS>
        <SRS>EPSG:23030</SRS>
        <SRS>EPSG:32630</SRS>
        <SRS>EPSG:4230</SRS>
        <SRS>EPSG:4258</SRS>
        <SRS>EPSG:4326</SRS>
        <SRS>EPSG:3857</SRS>
        <LatLonBoundingBox minx="-3.26238" miny="41.8506" maxx="-1.54024" maxy="42.7076" />
        <BoundingBox SRS="EPSG:25830"
                    minx="478513" miny="4.63419e+06" maxx="619564" maxy="4.72834e+06" />
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="277" height="22">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://ogc.larioja.org/wms/request.php?version=1.1.1&amp;service=WMS&amp;request=GetLegendGraphic&amp;layer=viviendas_de_proteccion_oficial_vpo&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
  </Layer>
</Capability>
</WMT_MS_Capabilities>
