
create database gestion_scolarite ;

use gestion_scolarite;

create table Admin (
    id_Admin int primary key auto_increment ,
    email varchar(40) unique ,
    password text ,
    unique(id_Admin)
) ;

create table Gestionnaire (
    id_Gestionnaire int primary key auto_increment ,
    email varchar(40)  unique ,
    password text ,
    unique(id_Gestionnaire)

) ;

create table Paiement (
    id_paiement int primary key auto_increment , 
    libelle text ,
    montantRestant real ,
    montantTotal real , 
    montantAPayer real ,
    datePaiement date ,
    statutPaiement boolean
);

create table Etudiant (
    id_etudiant int  primary key auto_increment ,
    nom varchar(30) ,
    prenom varchar(30) ,
    date_naissance date ,
    matricule varchar(30) ,
    email varchar(40) ,
    password text , 
    unique (email) ,
    unique (matricule) ,
    id_paiement int ,
    foreign key (id_paiement) references Paiement (id_paiement) on delete cascade on update cascade
);


create table Annee_academique (
    id_annee int primary key  auto_increment ,
    libelle varchar(30) ,
    duree int ,
    id_paiement int  ,
    foreign key (id_paiement) references Paiement (id_paiement) on delete cascade on update cascade
);


create table Filiere (
    id_filiere int primary key auto_increment ,
    libelle varchar(30) ,
    id_etudiant int ,
    foreign key (id_etudiant) references Etudiant (id_etudiant) on delete cascade on update cascade
);

create table Niveau (
    id_niveau int primary key auto_increment ,
    libelle varchar(30) ,
    id_filiere int ,
    id_etudiant int ,
    foreign key (id_filiere) references Filiere (id_filiere) on delete cascade on update cascade ,
    foreign key (id_etudiant) references Etudiant (id_etudiant) on delete cascade on update cascade 
);

INSERT INTO admin (email , password) VALUES ('admin@gmail.com' , 'passer' );
