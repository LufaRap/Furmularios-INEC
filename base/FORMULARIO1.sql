/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     20/01/2018 12:02:12                          */
/*==============================================================*/


drop table if exists CANTON;

drop table if exists DOCTOR;

drop table if exists ESTABLECIMIENTO_DE_SALUD;

drop table if exists FORMULARIO;

drop table if exists MADRE;

drop table if exists NACIDO_VIVO;

drop table if exists PROVINCIA;

drop table if exists REGISTRO_CIVIL;

/*==============================================================*/
/* Table: CANTON                                                */
/*==============================================================*/
create table CANTON
(
   ID_CANTON            int not null auto_increment,
   ID_REGIS             int not null,
   ID_MADRE             int not null,
   ID_ESTABL            int not null,
   NOMBRE_CANTON        char(50) not null,
   primary key (ID_CANTON)
);

/*==============================================================*/
/* Table: DOCTOR                                                */
/*==============================================================*/
create table DOCTOR
(
   ID_DOC               int not null auto_increment,
   ID_ESTABL            int not null,
   TIPO_DOC             varchar(50) not null,
   DESCRIP_DOC          varchar(50) not null,
   NOMBRE_DOC           varchar(50) not null,
   APEL_DOC             varchar(50) not null,
   TELEF_DOC            int not null,
   CEDUL_DOC            int not null,
   OBSERVACION_DOC      varchar(100),
   primary key (ID_DOC)
);

/*==============================================================*/
/* Table: ESTABLECIMIENTO_DE_SALUD                              */
/*==============================================================*/
create table ESTABLECIMIENTO_DE_SALUD
(
   ID_ESTABL            int not null auto_increment,
   ID_FORM              int not null,
   TIPO_ESTABL          varchar(50) not null,
   NOMBRE_ESTABL        varchar(50) not null,
   PARROQUIA_ESTABL     varchar(50) not null,
   LOCALIDAD_ESTABL     varchar(50) not null,
   DIRECCION_ESTABL     varchar(50) not null,
   TELEFONO_ESTABL      int not null,
   primary key (ID_ESTABL)
);

/*==============================================================*/
/* Table: FORMULARIO                                            */
/*==============================================================*/
create table FORMULARIO
(
   ID_FORM              int not null auto_increment,
   NUM_FORM             int not null,
   primary key (ID_FORM)
);

/*==============================================================*/
/* Table: MADRE                                                 */
/*==============================================================*/
create table MADRE
(
   ID_MADRE             int not null auto_increment,
   ID_FORM              int not null,
   ID_DOC               int not null,
   NOMBRE_MADRE         varchar(50) not null,
   APEL_MADRE           varchar(50) not null,
   CEDUL_MADRE          int not null,
   FECHNACH_MADRE       date not null,
   EDAD_MADRE           int not null,
   CONTROLES_MADRE      int not null,
   HIJOSACTUAL_MADRE    int not null,
   HIJOSVIVMUER_MADRE   int not null,
   HIJOSMUER_MADRE      int not null,
   NACIONALIDAD_MADRE   varchar(50) not null,
   DESCRIPNACIO_MADRE   varchar(50),
   NUMEMBARAZ_MADRE     int not null,
   NUMPARTOS_MADRE      int not null,
   ETNIA_MADRE          varchar(50) not null,
   ESTADOCIVIL_MADRE    varchar(50) not null,
   ALFABETISMO_MADRE    varchar(50) not null,
   INSTRUCCION_MADRE    varchar(50) not null,
   PARROQUIA_MADRE      varchar(50) not null,
   LOCALIDAD_MADRE      varchar(50) not null,
   DIRECCIONDOM_MADRE   varchar(50) not null,
   primary key (ID_MADRE)
);

/*==============================================================*/
/* Table: NACIDO_VIVO                                           */
/*==============================================================*/
create table NACIDO_VIVO
(
   ID_NV                int not null auto_increment,
   ID_MADRE             int not null,
   NOMBRE_NV            varchar(50) not null,
   APEL_NV              varchar(50) not null,
   SEXO_NV              varchar(15) not null,
   FECH_NV              date not null,
   TALLA_NV             int not null,
   CEDULA_NV            int not null,
   PESO_NV              int not null,
   SEMANASG_NV          int not null,
   TIPOPARTO_NV         varchar(15) not null,
   APGAR_NV             int not null,
   PRODUCEMBAR_NV       varchar(30) not null,
   primary key (ID_NV)
);

/*==============================================================*/
/* Table: PROVINCIA                                             */
/*==============================================================*/
create table PROVINCIA
(
   ID_PROV              int not null auto_increment,
   ID_REGIS             int not null,
   ID_MADRE             int not null,
   ID_ESTABL            int not null,
   NOMBRE_PROV          varchar(50) not null,
   primary key (ID_PROV)
);

/*==============================================================*/
/* Table: REGISTRO_CIVIL                                        */
/*==============================================================*/
create table REGISTRO_CIVIL
(
   ID_REGIS             int not null auto_increment,
   ID_FORM              int not null,
   OFICINA_REGIS        varchar(50) not null,
   PARROQUIA_REGIS      varchar(50) not null,
   FECHAINS_REGIS       date not null,
   ACTA_REGIS           int not null,
   primary key (ID_REGIS)
);

alter table CANTON add constraint FK_PERTENECE_2 foreign key (ID_ESTABL)
      references ESTABLECIMIENTO_DE_SALUD (ID_ESTABL) on delete restrict on update restrict;

alter table CANTON add constraint FK_TIENE_1 foreign key (ID_REGIS)
      references REGISTRO_CIVIL (ID_REGIS) on delete restrict on update restrict;

alter table CANTON add constraint FK_VIVE foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table DOCTOR add constraint FK_ATIENDE foreign key (ID_ESTABL)
      references ESTABLECIMIENTO_DE_SALUD (ID_ESTABL) on delete restrict on update restrict;

alter table ESTABLECIMIENTO_DE_SALUD add constraint FK_PERTENECE_1 foreign key (ID_FORM)
      references FORMULARIO (ID_FORM) on delete restrict on update restrict;

alter table MADRE add constraint FK_ASISTE foreign key (ID_DOC)
      references DOCTOR (ID_DOC) on delete restrict on update restrict;

alter table MADRE add constraint FK_REGISTRA foreign key (ID_FORM)
      references FORMULARIO (ID_FORM) on delete restrict on update restrict;

alter table NACIDO_VIVO add constraint FK_TIENE foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table PROVINCIA add constraint FK_PERTENCE_1 foreign key (ID_ESTABL)
      references ESTABLECIMIENTO_DE_SALUD (ID_ESTABL) on delete restrict on update restrict;

alter table PROVINCIA add constraint FK_TIENE_2 foreign key (ID_REGIS)
      references REGISTRO_CIVIL (ID_REGIS) on delete restrict on update restrict;

alter table PROVINCIA add constraint FK_VIVE_1 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table REGISTRO_CIVIL add constraint FK_PERTENECE foreign key (ID_FORM)
      references FORMULARIO (ID_FORM) on delete restrict on update restrict;

