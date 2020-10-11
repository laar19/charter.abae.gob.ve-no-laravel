-- Adminer 4.7.7 PostgreSQL dump

\connect "charter";

DROP TABLE IF EXISTS "archivo";
DROP SEQUENCE IF EXISTS archivo_id_seq;
CREATE SEQUENCE archivo_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 2 CACHE 1;

CREATE TABLE "charter"."archivo" (
    "id" integer DEFAULT nextval('archivo_id_seq') NOT NULL,
    "nombre" character varying(50) NOT NULL,
    "ruta" character varying(100) NOT NULL,
    "fecha" character varying(10) NOT NULL,
    CONSTRAINT "idx_42832_primary" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "archivo" ("id", "nombre", "ruta", "fecha") VALUES
(2,	'VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701.xml',	'XML_Miranda/11_10_20_04.19/VRSS-1_MSS-2_0162_0172_20150303_L2B_0000020701.xml',	'11/10/2020');

DROP TABLE IF EXISTS "imagen";
DROP SEQUENCE IF EXISTS imagen_id_seq;
CREATE SEQUENCE imagen_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1 CACHE 1;

CREATE TABLE "charter"."imagen" (
    "id" integer DEFAULT nextval('imagen_id_seq') NOT NULL,
    "nombre" character varying(50) NOT NULL,
    "ruta" character varying(100) NOT NULL,
    "fecha" character varying(10) NOT NULL,
    CONSTRAINT "idx_42838_primary" PRIMARY KEY ("id")
) WITH (oids = false);


DROP TABLE IF EXISTS "usuario";
DROP SEQUENCE IF EXISTS usuario_id_seq;
CREATE SEQUENCE usuario_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 7 CACHE 1;

CREATE TABLE "charter"."usuario" (
    "id" integer DEFAULT nextval('usuario_id_seq') NOT NULL,
    "username" character varying(15) NOT NULL,
    "pass" character varying(15) NOT NULL,
    CONSTRAINT "idx_42844_primary" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "usuario" ("id", "username", "pass") VALUES
(1,	'lmeza',	'1234'),
(2,	'jose',	'1234'),
(3,	'navegacion',	'2017');

DROP TABLE IF EXISTS "xml";
DROP SEQUENCE IF EXISTS xml_id_seq;
CREATE SEQUENCE xml_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1 CACHE 1;

CREATE TABLE "charter"."xml" (
    "id" integer DEFAULT nextval('xml_id_seq') NOT NULL,
    "nombre" character varying(150) NOT NULL,
    "ruta" character varying(150) NOT NULL,
    "fecha" character varying(10) NOT NULL,
    CONSTRAINT "idx_42850_primary" PRIMARY KEY ("id")
) WITH (oids = false);


-- 2020-10-11 15:28:46.961032-04
