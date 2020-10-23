-- Adminer 4.7.7 PostgreSQL dump

\connect "charter";

DROP TABLE IF EXISTS "archivos";
DROP SEQUENCE IF EXISTS archivo_id_seq;
CREATE SEQUENCE archivo_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 125 CACHE 1;

CREATE TABLE "charter"."archivos" (
    "id" integer DEFAULT nextval('archivo_id_seq') NOT NULL,
    "nombre_carpeta" character varying(150) NOT NULL,
    "xml_original" text NOT NULL,
    "xml_charter" text NOT NULL,
    "fecha" timestamp NOT NULL,
    CONSTRAINT "idx_42832_primary" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "archivos" ("id", "nombre_carpeta", "xml_original", "xml_charter", "fecha") VALUES
(123,	'18-10-20-07.26-603d10bd20be917c63c39cdc047a8feb',	'<?xml version="1.0" encoding="GBK"?>

<productMeta> 
  <productId>0000020701</productId>  
  <sceneId>340037</sceneId>  
  <satelliteId>VRSS-1</satelliteId>  
  <recStationId>FGS-1</recStationId>  
  <sensorId>MSS-2</sensorId>  
  <orbitId>13104</orbitId>  
  <productDate>2015 04 08 15:46:31.142850</productDate>  
  <productLevel>LEVEL2B</productLevel>  
  <bands>1,2,3,4</bands>  
  <pixelSpacing>10.000</pixelSpacing>  
  <dataFormatDes>GEOTIFF</dataFormatDes>  
  <cloudCoverage>21</cloudCoverage>  
  <quality>7</quality>  
  <productType>Standard</productType>  
  <sceneCount>1</sceneCount>  
  <sceneShift>0</sceneShift>  
  <imagingStartTime>2015 03 03 15:32:39.046381</imagingStartTime>  
  <imagingStopTime>2015 03 03 15:32:43.728869</imagingStopTime>  
  <gain>0,57,114,57</gain>  
  <intergralLevel>5</intergralLevel>  
  <sunElevation>68.636</sunElevation>  
  <sunAzimuth>140.769</sunAzimuth>  
  <roll>19.948389</roll>  
  <mtfcPro>No</mtfcPro>  
  <ephemerisData>GPS</ephemerisData>  
  <attitudeData>StarsensorAtt</attitudeData>  
  <earthModel>WGS_84</earthModel>  
  <mapProjection>UTM</mapProjection>  
  <resampleTechnique>CC</resampleTechnique>  
  <satPath>167</satPath>  
  <satRow>171</satRow>  
  <scenePath>162</scenePath>  
  <sceneRow>172</sceneRow>  
  <sceneCenterLat>10.355719</sceneCenterLat>  
  <sceneCenterLong>-66.582580</sceneCenterLong>  
  <dataUpperLeftLat>10.522281</dataUpperLeftLat>  
  <dataUpperLeftLong>-66.708771</dataUpperLeftLong>  
  <dataUpperRightLat>10.455870</dataUpperRightLat>  
  <dataUpperRightLong>-66.394202</dataUpperRightLong>  
  <dataLowerLeftLat>10.256141</dataLowerLeftLat>  
  <dataLowerLeftLong>-66.766835</dataLowerLeftLong>  
  <dataLowerRightLat>10.189805</dataLowerRightLat>  
  <dataLowerRightLong>-66.452530</dataLowerRightLong>  
  <productUpperLeftLat>10.522682</productUpperLeftLat>  
  <productUpperLeftLong>-66.764941</productUpperLeftLong>  
  <productUpperRightLat>10.519846</productUpperRightLat>  
  <productUpperRightLong>-66.393666</productUpperRightLong>  
  <productLowerLeftLat>10.192108</productLowerLeftLat>  
  <productLowerLeftLong>-66.767282</productLowerLeftLong>  
  <productLowerRightLat>10.189362</productLowerRightLat>  
  <productLowerRightLong>-66.396396</productLowerRightLong>  
  <dataUpperLeftX>750759.856146</dataUpperLeftX>  
  <dataUpperLeftY>1164074.624821</dataUpperLeftY>  
  <dataUpperRightX>785269.217800</dataUpperRightX>  
  <dataUpperRightY>1156993.634126</dataUpperRightY>  
  <dataLowerLeftX>744609.153288</dataLowerLeftX>  
  <dataLowerLeftY>1134581.633404</dataLowerLeftY>  
  <dataLowerRightX>779114.521956</dataLowerRightX>  
  <dataLowerRightY>1127496.377117</dataLowerRightY>  
  <productUpperLeftX>744609.153288</productUpperLeftX>  
  <productUpperLeftY>1164074.624821</productUpperLeftY>  
  <productUpperRightX>785269.217800</productUpperRightX>  
  <productUpperRightY>1164074.624821</productUpperRightY>  
  <productLowerLeftX>744609.153288</productLowerLeftX>  
  <productLowerLeftY>1127496.377117</productLowerLeftY>  
  <productLowerRightX>785269.217800</productLowerRightX>  
  <productLowerRightY>1127496.377117</productLowerRightY>  
  <imageName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_1.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_2.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_3.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_4.tif</imageName>  
  <browseName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701.jpg</browseName>  
  <thumbName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_THUMB.jpg</thumbName>  
  <scenePathBias>A</scenePathBias>
  <sceneRowBias>2</sceneRowBias>
</productMeta>
',	'<?xml version="1.0" encoding="UTF-8"?>
<eos:EarthObservation xmlns:eos="http://miranda.abae.gob.ve" xmlns:eop="http://miranda.abae.gob.ve/index/popcontentinfo.html?conid=209608" xmlns:gml="http://www.opengis.net/gml" version="1.0">
  <gml:metaDataProperty>
    <eop:EarthObservationMetaData>
      <eop:identifier>ABAE</eop:identifier>
      <eop:parentIdentifier>urn:ogc:def:EOP:ABAE</eop:parentIdentifier>
      <eop:status></eop:status>
    </eop:EarthObservationMetaData>
  </gml:metaDataProperty>
  <gml:validTime>
    <gml:TimePeriod>
      <gml:beginPosition>2015-03-03T15:32:39.046+0000</gml:beginPosition>
      <gml:endPosition>2015-03-03T15:32:43.728+0000</gml:endPosition>
    </gml:TimePeriod>
  </gml:validTime>
  <gml:using>
    <eop:EarthObservationEquipment>
      <eop:platform>
        <eop:Platform>
          <eop:shortName>VRSS-1</eop:shortName>
        </eop:Platform>
      </eop:platform>
      <eop:instrument>
        <eop:Instrument>
          <eop:shortName>PMC</eop:shortName>
        </eop:Instrument>
      </eop:instrument>
      <eop:sensor>
        <eop:Sensor>
          <eop:sensorType> </eop:sensorType>
          <eop:operationalMode>MSS</eop:operationalMode>
        </eop:Sensor>
      </eop:sensor>
    </eop:EarthObservationEquipment>
  </gml:using>
  <gml:target>
    <eop:Footprint>
      <eop:referenceSystemIdentifier codeSpace="EPSG">EPSG:4326</eop:referenceSystemIdentifier>
      <gml:multiExtentOf>
        <gml:surfaceMembers>
          <gml:Polygon>
            <gml:exterior>
              <gml:LinearRing>
                <gml:posList>10.522281 -66.708771 10.455870 -66.394202 10.256141 -66.766835 10.189805 -66.452530 10.522281 -66.708771</gml:posList>
              </gml:LinearRing>
            </gml:exterior>
          </gml:Polygon>
        </gml:surfaceMembers>
      </gml:multiExtentOf>
    </eop:Footprint>
  </gml:target>
  <eop:fileName>ICON.JPG</eop:fileName>
  <eop:fileName>PREVIEW.JPG</eop:fileName>
  <eop:BrowseInformation>
    <eop:type>QUICKLOOK</eop:type>
  </eop:BrowseInformation>
</eos:EarthObservation>
',	'2020-10-18 18:26:29.848546'),
(124,	'18-10-20-07.26-603d10bd20be917c63c39cdc047a8feb',	'<?xml version="1.0" encoding="GBK"?>

<productMeta> 
  <productId>0000020701</productId>  
  <sceneId>340037</sceneId>  
  <satelliteId>VRSS-1</satelliteId>  
  <recStationId>FGS-1</recStationId>  
  <sensorId>MSS-2</sensorId>  
  <orbitId>13104</orbitId>  
  <productDate>2015 04 08 15:46:31.142850</productDate>  
  <productLevel>LEVEL2B</productLevel>  
  <bands>1,2,3,4</bands>  
  <pixelSpacing>10.000</pixelSpacing>  
  <dataFormatDes>GEOTIFF</dataFormatDes>  
  <cloudCoverage>21</cloudCoverage>  
  <quality>7</quality>  
  <productType>Standard</productType>  
  <sceneCount>1</sceneCount>  
  <sceneShift>0</sceneShift>  
  <imagingStartTime>2015 03 03 15:32:39.046381</imagingStartTime>  
  <imagingStopTime>2015 03 03 15:32:43.728869</imagingStopTime>  
  <gain>0,57,114,57</gain>  
  <intergralLevel>5</intergralLevel>  
  <sunElevation>68.636</sunElevation>  
  <sunAzimuth>140.769</sunAzimuth>  
  <roll>19.948389</roll>  
  <mtfcPro>No</mtfcPro>  
  <ephemerisData>GPS</ephemerisData>  
  <attitudeData>StarsensorAtt</attitudeData>  
  <earthModel>WGS_84</earthModel>  
  <mapProjection>UTM</mapProjection>  
  <resampleTechnique>CC</resampleTechnique>  
  <satPath>167</satPath>  
  <satRow>171</satRow>  
  <scenePath>162</scenePath>  
  <sceneRow>172</sceneRow>  
  <sceneCenterLat>10.355719</sceneCenterLat>  
  <sceneCenterLong>-66.582580</sceneCenterLong>  
  <dataUpperLeftLat>10.522281</dataUpperLeftLat>  
  <dataUpperLeftLong>-66.708771</dataUpperLeftLong>  
  <dataUpperRightLat>10.455870</dataUpperRightLat>  
  <dataUpperRightLong>-66.394202</dataUpperRightLong>  
  <dataLowerLeftLat>10.256141</dataLowerLeftLat>  
  <dataLowerLeftLong>-66.766835</dataLowerLeftLong>  
  <dataLowerRightLat>10.189805</dataLowerRightLat>  
  <dataLowerRightLong>-66.452530</dataLowerRightLong>  
  <productUpperLeftLat>10.522682</productUpperLeftLat>  
  <productUpperLeftLong>-66.764941</productUpperLeftLong>  
  <productUpperRightLat>10.519846</productUpperRightLat>  
  <productUpperRightLong>-66.393666</productUpperRightLong>  
  <productLowerLeftLat>10.192108</productLowerLeftLat>  
  <productLowerLeftLong>-66.767282</productLowerLeftLong>  
  <productLowerRightLat>10.189362</productLowerRightLat>  
  <productLowerRightLong>-66.396396</productLowerRightLong>  
  <dataUpperLeftX>750759.856146</dataUpperLeftX>  
  <dataUpperLeftY>1164074.624821</dataUpperLeftY>  
  <dataUpperRightX>785269.217800</dataUpperRightX>  
  <dataUpperRightY>1156993.634126</dataUpperRightY>  
  <dataLowerLeftX>744609.153288</dataLowerLeftX>  
  <dataLowerLeftY>1134581.633404</dataLowerLeftY>  
  <dataLowerRightX>779114.521956</dataLowerRightX>  
  <dataLowerRightY>1127496.377117</dataLowerRightY>  
  <productUpperLeftX>744609.153288</productUpperLeftX>  
  <productUpperLeftY>1164074.624821</productUpperLeftY>  
  <productUpperRightX>785269.217800</productUpperRightX>  
  <productUpperRightY>1164074.624821</productUpperRightY>  
  <productLowerLeftX>744609.153288</productLowerLeftX>  
  <productLowerLeftY>1127496.377117</productLowerLeftY>  
  <productLowerRightX>785269.217800</productLowerRightX>  
  <productLowerRightY>1127496.377117</productLowerRightY>  
  <imageName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_1.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_2.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_3.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_4.tif</imageName>  
  <browseName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701.jpg</browseName>  
  <thumbName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_THUMB.jpg</thumbName>  
  <scenePathBias>A</scenePathBias>
  <sceneRowBias>2</sceneRowBias>
</productMeta>
',	'<?xml version="1.0" encoding="UTF-8"?>
<eos:EarthObservation xmlns:eos="http://miranda.abae.gob.ve" xmlns:eop="http://miranda.abae.gob.ve/index/popcontentinfo.html?conid=209608" xmlns:gml="http://www.opengis.net/gml" version="1.0">
  <gml:metaDataProperty>
    <eop:EarthObservationMetaData>
      <eop:identifier>ABAE</eop:identifier>
      <eop:parentIdentifier>urn:ogc:def:EOP:ABAE</eop:parentIdentifier>
      <eop:status></eop:status>
    </eop:EarthObservationMetaData>
  </gml:metaDataProperty>
  <gml:validTime>
    <gml:TimePeriod>
      <gml:beginPosition>2015-03-03T15:32:39.046+0000</gml:beginPosition>
      <gml:endPosition>2015-03-03T15:32:43.728+0000</gml:endPosition>
    </gml:TimePeriod>
  </gml:validTime>
  <gml:using>
    <eop:EarthObservationEquipment>
      <eop:platform>
        <eop:Platform>
          <eop:shortName>VRSS-1</eop:shortName>
        </eop:Platform>
      </eop:platform>
      <eop:instrument>
        <eop:Instrument>
          <eop:shortName>PMC</eop:shortName>
        </eop:Instrument>
      </eop:instrument>
      <eop:sensor>
        <eop:Sensor>
          <eop:sensorType> </eop:sensorType>
          <eop:operationalMode>MSS</eop:operationalMode>
        </eop:Sensor>
      </eop:sensor>
    </eop:EarthObservationEquipment>
  </gml:using>
  <gml:target>
    <eop:Footprint>
      <eop:referenceSystemIdentifier codeSpace="EPSG">EPSG:4326</eop:referenceSystemIdentifier>
      <gml:multiExtentOf>
        <gml:surfaceMembers>
          <gml:Polygon>
            <gml:exterior>
              <gml:LinearRing>
                <gml:posList>10.522281 -66.708771 10.455870 -66.394202 10.256141 -66.766835 10.189805 -66.452530 10.522281 -66.708771</gml:posList>
              </gml:LinearRing>
            </gml:exterior>
          </gml:Polygon>
        </gml:surfaceMembers>
      </gml:multiExtentOf>
    </eop:Footprint>
  </gml:target>
  <eop:fileName>ICON.JPG</eop:fileName>
  <eop:fileName>PREVIEW.JPG</eop:fileName>
  <eop:BrowseInformation>
    <eop:type>QUICKLOOK</eop:type>
  </eop:BrowseInformation>
</eos:EarthObservation>
',	'2020-10-18 18:26:38.950517'),
(125,	'18-10-20-07.31-603d10bd20be917c63c39cdc047a8feb',	'<?xml version="1.0" encoding="GBK"?>

<productMeta> 
  <productId>0000020701</productId>  
  <sceneId>340037</sceneId>  
  <satelliteId>VRSS-1</satelliteId>  
  <recStationId>FGS-1</recStationId>  
  <sensorId>MSS-2</sensorId>  
  <orbitId>13104</orbitId>  
  <productDate>2015 04 08 15:46:31.142850</productDate>  
  <productLevel>LEVEL2B</productLevel>  
  <bands>1,2,3,4</bands>  
  <pixelSpacing>10.000</pixelSpacing>  
  <dataFormatDes>GEOTIFF</dataFormatDes>  
  <cloudCoverage>21</cloudCoverage>  
  <quality>7</quality>  
  <productType>Standard</productType>  
  <sceneCount>1</sceneCount>  
  <sceneShift>0</sceneShift>  
  <imagingStartTime>2015 03 03 15:32:39.046381</imagingStartTime>  
  <imagingStopTime>2015 03 03 15:32:43.728869</imagingStopTime>  
  <gain>0,57,114,57</gain>  
  <intergralLevel>5</intergralLevel>  
  <sunElevation>68.636</sunElevation>  
  <sunAzimuth>140.769</sunAzimuth>  
  <roll>19.948389</roll>  
  <mtfcPro>No</mtfcPro>  
  <ephemerisData>GPS</ephemerisData>  
  <attitudeData>StarsensorAtt</attitudeData>  
  <earthModel>WGS_84</earthModel>  
  <mapProjection>UTM</mapProjection>  
  <resampleTechnique>CC</resampleTechnique>  
  <satPath>167</satPath>  
  <satRow>171</satRow>  
  <scenePath>162</scenePath>  
  <sceneRow>172</sceneRow>  
  <sceneCenterLat>10.355719</sceneCenterLat>  
  <sceneCenterLong>-66.582580</sceneCenterLong>  
  <dataUpperLeftLat>10.522281</dataUpperLeftLat>  
  <dataUpperLeftLong>-66.708771</dataUpperLeftLong>  
  <dataUpperRightLat>10.455870</dataUpperRightLat>  
  <dataUpperRightLong>-66.394202</dataUpperRightLong>  
  <dataLowerLeftLat>10.256141</dataLowerLeftLat>  
  <dataLowerLeftLong>-66.766835</dataLowerLeftLong>  
  <dataLowerRightLat>10.189805</dataLowerRightLat>  
  <dataLowerRightLong>-66.452530</dataLowerRightLong>  
  <productUpperLeftLat>10.522682</productUpperLeftLat>  
  <productUpperLeftLong>-66.764941</productUpperLeftLong>  
  <productUpperRightLat>10.519846</productUpperRightLat>  
  <productUpperRightLong>-66.393666</productUpperRightLong>  
  <productLowerLeftLat>10.192108</productLowerLeftLat>  
  <productLowerLeftLong>-66.767282</productLowerLeftLong>  
  <productLowerRightLat>10.189362</productLowerRightLat>  
  <productLowerRightLong>-66.396396</productLowerRightLong>  
  <dataUpperLeftX>750759.856146</dataUpperLeftX>  
  <dataUpperLeftY>1164074.624821</dataUpperLeftY>  
  <dataUpperRightX>785269.217800</dataUpperRightX>  
  <dataUpperRightY>1156993.634126</dataUpperRightY>  
  <dataLowerLeftX>744609.153288</dataLowerLeftX>  
  <dataLowerLeftY>1134581.633404</dataLowerLeftY>  
  <dataLowerRightX>779114.521956</dataLowerRightX>  
  <dataLowerRightY>1127496.377117</dataLowerRightY>  
  <productUpperLeftX>744609.153288</productUpperLeftX>  
  <productUpperLeftY>1164074.624821</productUpperLeftY>  
  <productUpperRightX>785269.217800</productUpperRightX>  
  <productUpperRightY>1164074.624821</productUpperRightY>  
  <productLowerLeftX>744609.153288</productLowerLeftX>  
  <productLowerLeftY>1127496.377117</productLowerLeftY>  
  <productLowerRightX>785269.217800</productLowerRightX>  
  <productLowerRightY>1127496.377117</productLowerRightY>  
  <imageName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_1.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_2.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_3.tif,VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_4.tif</imageName>  
  <browseName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701.jpg</browseName>  
  <thumbName>VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701_THUMB.jpg</thumbName>  
  <scenePathBias>A</scenePathBias>
  <sceneRowBias>2</sceneRowBias>
</productMeta>
',	'<?xml version="1.0" encoding="UTF-8"?>
<eos:EarthObservation xmlns:eos="http://miranda.abae.gob.ve" xmlns:eop="http://miranda.abae.gob.ve/index/popcontentinfo.html?conid=209608" xmlns:gml="http://www.opengis.net/gml" version="1.0">
  <gml:metaDataProperty>
    <eop:EarthObservationMetaData>
      <eop:identifier>ABAE</eop:identifier>
      <eop:parentIdentifier>urn:ogc:def:EOP:ABAE</eop:parentIdentifier>
      <eop:status></eop:status>
    </eop:EarthObservationMetaData>
  </gml:metaDataProperty>
  <gml:validTime>
    <gml:TimePeriod>
      <gml:beginPosition>2015-03-03T15:32:39.046+0000</gml:beginPosition>
      <gml:endPosition>2015-03-03T15:32:43.728+0000</gml:endPosition>
    </gml:TimePeriod>
  </gml:validTime>
  <gml:using>
    <eop:EarthObservationEquipment>
      <eop:platform>
        <eop:Platform>
          <eop:shortName>VRSS-1</eop:shortName>
        </eop:Platform>
      </eop:platform>
      <eop:instrument>
        <eop:Instrument>
          <eop:shortName>PMC</eop:shortName>
        </eop:Instrument>
      </eop:instrument>
      <eop:sensor>
        <eop:Sensor>
          <eop:sensorType> </eop:sensorType>
          <eop:operationalMode>MSS</eop:operationalMode>
        </eop:Sensor>
      </eop:sensor>
    </eop:EarthObservationEquipment>
  </gml:using>
  <gml:target>
    <eop:Footprint>
      <eop:referenceSystemIdentifier codeSpace="EPSG">EPSG:4326</eop:referenceSystemIdentifier>
      <gml:multiExtentOf>
        <gml:surfaceMembers>
          <gml:Polygon>
            <gml:exterior>
              <gml:LinearRing>
                <gml:posList>10.522281 -66.708771 10.455870 -66.394202 10.256141 -66.766835 10.189805 -66.452530 10.522281 -66.708771</gml:posList>
              </gml:LinearRing>
            </gml:exterior>
          </gml:Polygon>
        </gml:surfaceMembers>
      </gml:multiExtentOf>
    </eop:Footprint>
  </gml:target>
  <eop:fileName>ICON.JPG</eop:fileName>
  <eop:fileName>PREVIEW.JPG</eop:fileName>
  <eop:BrowseInformation>
    <eop:type>QUICKLOOK</eop:type>
  </eop:BrowseInformation>
</eos:EarthObservation>
',	'2020-10-18 18:31:33.959413');

DROP TABLE IF EXISTS "usuarios";
DROP SEQUENCE IF EXISTS usuario_id_seq;
CREATE SEQUENCE usuario_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 20 CACHE 1;

CREATE TABLE "charter"."usuarios" (
    "id" integer DEFAULT nextval('usuario_id_seq') NOT NULL,
    "username" character varying(15) NOT NULL,
    "pass" character varying(255) NOT NULL,
    "rol" character varying(10) NOT NULL,
    CONSTRAINT "idx_42844_primary" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "usuarios" ("id", "username", "pass", "rol") VALUES
(11,	'admin',	'$2y$10$giw3zVPUXbXft8yd7svUIeijVt.Q.qxKI2naWln7kO2DTn6ACaBCq',	'admin'),
(18,	'usuario',	'$2y$10$UU.DxCZUCMxIwVd5b2YGU.gasV6Bid6.uaSg4M0UHszqSScf.cIP2',	'usuario');

-- 2020-10-22 20:16:58.241777-04
