-- Adminer 4.7.7 PostgreSQL dump

DROP TABLE IF EXISTS "archivos";
DROP SEQUENCE IF EXISTS archivo_id_seq;
CREATE SEQUENCE archivo_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1;

CREATE TABLE "public"."archivos" (
    "id" integer DEFAULT nextval('archivo_id_seq') NOT NULL,
    "nombre_carpeta" character varying(150) NOT NULL,
    "xml_original" text NOT NULL,
    "xml_charter" text NOT NULL,
    "fecha" timestamp NOT NULL,
    CONSTRAINT "idx_42832_primary" PRIMARY KEY ("id")
) WITH (oids = false);

TRUNCATE "archivos";

DROP TABLE IF EXISTS "usuarios";
DROP SEQUENCE IF EXISTS usuario_id_seq;
CREATE SEQUENCE usuario_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1;

CREATE TABLE "public"."usuarios" (
    "id" integer DEFAULT nextval('usuario_id_seq') NOT NULL,
    "username" character varying(15) NOT NULL,
    "pass" character varying(255) NOT NULL,
    "rol" character varying(10) NOT NULL,
    CONSTRAINT "idx_42844_primary" PRIMARY KEY ("id")
) WITH (oids = false);

TRUNCATE "usuarios";
INSERT INTO "usuarios" ("id", "username", "pass", "rol") VALUES
(11,	'admin',	'$2y$10$giw3zVPUXbXft8yd7svUIeijVt.Q.qxKI2naWln7kO2DTn6ACaBCq',	'admin'),
(18,	'usuario',	'$2y$10$UU.DxCZUCMxIwVd5b2YGU.gasV6Bid6.uaSg4M0UHszqSScf.cIP2',	'usuario');

-- 2020-11-12 12:56:25.849867-04
