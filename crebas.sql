/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     4/18/2025 1:59:46 AM                         */
/*==============================================================*/


drop table if exists BALASAN;

drop table if exists PENGADUAN;

/*==============================================================*/
/* Table: BALASAN                                               */
/*==============================================================*/
create table BALASAN
(
   ID_BALASAN           int not null,
   ID_PENGADUAN         int,
   KETERANGAN           text,
   primary key (ID_BALASAN)
);

/*==============================================================*/
/* Table: PENGADUAN                                             */
/*==============================================================*/
create table PENGADUAN
(
   ID_PENGADUAN         int not null,
   ID_USER              int,
   PENGADUAN            text,
   STATUS               varchar(222),
   primary key (ID_PENGADUAN)
);

alter table BALASAN add constraint FK_RELATIONSHIP_1 foreign key (ID_PENGADUAN)
      references PENGADUAN (ID_PENGADUAN) on delete restrict on update restrict;

