
/*==============================================================*/
/* Table : Absence                                              */
/*==============================================================*/
create table Absence
(
   code_absence         int not null AUTO_INCREMENT,
   mat_agent            varchar(254) not null,
   d_debut              datetime,
   d_fin                datetime,
   raison               varchar(254),
   justifier            varchar(254),
   duree                int,
   primary key (code_absence)
);

/*==============================================================*/
/* Table : Agent                                                */
/*==============================================================*/
create table Agent
(
   mat_agent            varchar(254) not null,
   code_direction       varchar(254) not null,
   code_poste           int not null,
   nom_agent            varchar(254),
   prenom_agent         varchar(254),
   sexe                 varchar(254),
   date_naiss           datetime,
   lieu_naiss           varchar(254),
   situation_matri      varchar(254),
   nbr_enfant           int,
   email                varchar(254),
   telephone            int,
   adresse              varchar(254),
   categorie            varchar(254),
   nationalite          varchar(254),
   date_embauche        datetime,
   date_service         datetime,
   statut               varchar(254),
   niveau_recru         varchar(254),
   photo                varchar(254),
   classe               varchar(254),
   echelle              varchar(254),
   echelon              varchar(254),
   emploi               varchar(254),
   primary key (mat_agent)
);

/*==============================================================*/
/* Table : Compte                                               */
/*==============================================================*/
create table Compte
(
   code_compte          int not null AUTO_INCREMENT,
   nom_user             varchar(254),
   prenom_user          varchar(254),
   identifiant          varchar(254),
   pwd                  varchar(254),
   profil               varchar(254),
   primary key (code_compte)
);

/*==============================================================*/
/* Table : Conge                                                */
/*==============================================================*/
create table Conge
(
   code_conge           int not null AUTO_INCREMENT,
   mat_agent            varchar(254) not null,
   d_debut              datetime,
   d_fin                datetime,
   lieujouissance       varchar(254),
   observation          varchar(254),
   statut               varchar(254),
   periode_travail      varchar(254),
   primary key (code_conge)
);

/*==============================================================*/
/* Table : Departement                                          */
/*==============================================================*/
create table Departement
(
   code_departement     int not null AUTO_INCREMENT,
   code_direction       varchar(254) not null,
   nom_departement      varchar(254),
   chef_departement     varchar(254),
   primary key (code_departement)
);

/*==============================================================*/
/* Table : Direction                                            */
/*==============================================================*/
create table Direction
(
   code_direction       int not null AUTO_INCREMENT,
   nom_direction        varchar(254),
   chef_direction       varchar(254),
   primary key (code_direction)
);

/*==============================================================*/
/* Table : Formation                                            */
/*==============================================================*/
create table Formation
(
   code_formation       int not null AUTO_INCREMENT,
   mat_agent            varchar(254) not null,
   intitule             varchar(254),
   description          varchar(254),
   d_debut              datetime,
   d_fin                datetime,
   primary key (code_formation)
);

/*==============================================================*/
/* Table : Mission                                              */
/*==============================================================*/
create table Mission
(
   code_mission         int not null AUTO_INCREMENT,
   mat_agent            varchar(254) not null,
   intitule             varchar(254),
   d_debut              datetime,
   d_fin                datetime,
   statut               varchar(254),
   observation          varchar(254),
   primary key (code_mission)
);

/*==============================================================*/
/* Table : Note                                                 */
/*==============================================================*/
create table Note
(
   code_note            int not null AUTO_INCREMENT,
   mat_agent            varchar(254) not null,
   note                 int,
   date_note            datetime,
   observation          varchar(254),
   primary key (code_note)
);

/*==============================================================*/
/* Table : Payement                                             */
/*==============================================================*/
create table Payement
(
   code_payement        int not null AUTO_INCREMENT,
   mat_agent            varchar(254) not null,
   type_payement        varchar(254),
   date_payement        datetime,
   observation          varchar(254),
   primary key (code_payement)
);

/*==============================================================*/
/* Table : Poste                                                */
/*==============================================================*/
create table Poste
(
   code_poste           int not null AUTO_INCREMENT,
   code_service         varchar(254) not null,
   intitule             varchar(254),
   primary key (code_poste)
);

/*==============================================================*/
/* Table : Service                                              */
/*==============================================================*/
create table Service
(
   code_service         int not null AUTO_INCREMENT,
   code_departement     varchar(254) not null,
   nom_service          varchar(254),
   chef_service         varchar(254),
   primary key (code_service)
);

alter table Absence add constraint FK_Association_7 foreign key (mat_agent)
      references Agent (mat_agent) on delete restrict on update restrict;

alter table Agent add constraint FK_Association_3 foreign key (code_direction)
      references Direction (code_direction) on delete restrict on update restrict;

alter table Agent add constraint FK_Association_4 foreign key (code_poste)
      references Poste (code_poste) on delete restrict on update restrict;

alter table Conge add constraint FK_Association_5 foreign key (mat_agent)
      references Agent (mat_agent) on delete restrict on update restrict;

alter table Departement add constraint FK_Association_13 foreign key (code_direction)
      references Direction (code_direction) on delete restrict on update restrict;

alter table Formation add constraint FK_Association_6 foreign key (mat_agent)
      references Agent (mat_agent) on delete restrict on update restrict;

alter table Mission add constraint FK_Association_8 foreign key (mat_agent)
      references Agent (mat_agent) on delete restrict on update restrict;

alter table Note add constraint FK_Association_9 foreign key (mat_agent)
      references Agent (mat_agent) on delete restrict on update restrict;

alter table Payement add constraint FK_Association_14 foreign key (mat_agent)
      references Agent (mat_agent) on delete restrict on update restrict;

alter table Poste add constraint FK_Association_10 foreign key (code_service)
      references Service (code_service) on delete restrict on update restrict;

alter table Service add constraint FK_Association_12 foreign key (code_departement)
      references Departement (code_departement) on delete restrict on update restrict;
