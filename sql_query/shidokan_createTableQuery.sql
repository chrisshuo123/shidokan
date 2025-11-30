use shidokan_db;

show tables;

/* 1 - TABLE INSTRUKTUR, LEVEL DAN, BLACKBELT, BLACKBELTMANY */

/* 1.1 - TABLE INSTRUKTUR */
/* Create Table */
create table instruktur (
	idInstruktur int(10) primary key not null,
    name varchar(100) not null
);

/* --Modify Column-- */
/* idInstruktur (yang awalnya adalah idName) lupa di Auto_increment sbg Primary Key */
alter table instruktur
	modify idName int(10) auto_increment;    
/* Menambahkan column nomor sertifikat, tgl Issued */
alter table instruktur
	add nomorSertifikat varchar(100),
	add dateIssued DATE; /* Ini dateIssued dipindah ke table blackbelt */

/* Tambah constraint fk_idLevelDan */
alter table instruktur
	add idInstruktur_fkLevelDan int(10); /* Setelah ini diganti namanya jadi fk_idLevelDan */
alter table instruktur
	add constraint idInstruktur_fkLevelDan foreign key (idInstruktur_fkLevelDan)
    references levelDan(idLevelDan);
    
/* Pengurutan column & Penambahan column baru */
alter table instruktur
	modify idInstruktur_fkLevelDan int(10) after nomorSertifikat;
alter table instruktur
	add column namaBelakang varchar(100) not null after name,
    add column prestasi LONGTEXT not null after dateIssued,
    add column emailAddress varchar(100) not null after prestasi,
    add column noTelp int(20) not null after emailAddress,
    add column pesanTambahan LONGTEXT after noTelp;
alter table instruktur
	add column foto LONGBLOB after noTelp;
alter table instruktur
	modify column foto LONGBLOB not null;

/* Di-set null untuk sementara waktu yang Table Instruktur */
alter table instruktur
	modify column namaBelakang varchar(100) null,
    modify column prestasi LONGTEXT null,
    modify column emailAddress varchar(100) null,
    modify column noTelp int(20) null,
    modify column pesanTambahan LONGTEXT;
alter table instruktur
	modify column foto LONGBLOB null;
    
/* ganti nama column dari 'nama' menjadi 'namaDepan' */
alter table instruktur
	change column name namaDepan varchar(100);

/* Alter constraint fk Level DAN, and adding new fk_idStatus column */
/* Change a fk column on idInstruktur_fkLevelDan to fk_idLevelDan */
alter table instruktur
drop constraint idInstruktur_fkLevelDan;
alter table instruktur
change column idInstruktur_fkLevelDan fk_idLevelDan int(10);
/* Add a FK column fk_idStatus */
alter table instruktur
add column fk_idStatus int(10);
alter table instruktur
modify column fk_idStatus int(10) after dateIssued;

/* Add namaBelakang for table Instruktur */
alter table instruktur
add column fk_branch int(10) After namaBelakang;
/* Renaming the fk column of fk_branch to fk_idBranch */
alter table instruktur
change column fk_branch fk_idBranch int(10);
/* Giving constraint fk for idBranch and idStatus FK in Table Instruktur */
alter table instruktur
	add constraint fk_idBranch foreign key (fk_idBranch)
    references branch(idBranch);
/* Add Constraint for fk status */
alter table instruktur
	add constraint fk_idStatus foreign key (fk_idStatus)
    references status(idStatus);

/* Remove column instructor for DAN Level */
alter table instruktur
    drop column nomorSertifikat,
    drop column dateIssued;
    
/* Drop also fk_idLevelDan */
alter table instruktur
	drop column fk_idLevelDan;

/* Adding the blackbelt list on each Instruktur profile */
alter table instruktur
	add column fk_idBlackbelt int(10) after fk_idBranch;
alter table instruktur
	add constraint fk_idBlackbelt foreign key (fk_idBlackbelt)
    references blackbelt(idBlackbelt);

select * from instruktur;
/* --- */

/* Create new Table for blackBeltList */
create table blackBelt(
	idBlackBelt int(10) not null primary key auto_increment,
    fk_idLevelDan int(10),
    nomorSertifikat varchar(100),
    dateIssued DATE
);
/* The data Blackbelt List are Inserted Into shidokan_dataQuery.sql */

/* Because there's 1 instructor owns >1 blackbelt, so we need M:N to make this happen */
create table blackBeltMany (
	idBlackBeltMany int(10) primary key not null auto_increment,
    fk_idInstruktur int(10),
    fk_idBlackBelt int(10)
);

/* Remove the fk_idBlackbelt column in table Instruktur.  We now use blackbeltmany 
to data the blackbelt Holders */
alter table instruktur
	drop constraint fk_idBlackbelt;
alter table instruktur
	drop column fk_idBlackbelt;

select * from instruktur;

/* Add fk_idInstruktur and fk_idBlackbelt foreign Key column + constraint in table
blackBeltMany */
/* add Constraint for idInstruktur FK column in table blackBeltMany */
alter table blackBeltMany
	add constraint fk_idInstruktur foreign key (fk_idInstruktur)
    references instruktur(idInstruktur);
/* add Constraint for idBlackBelt FK column in table blackBeltMany */
alter table blackBeltMany
	add constraint fk_idBlackBelt foreign key (fk_idBlackBelt)
    references blackbelt(idBlackBelt);
    
select * from instruktur;
select * from blackBelt;
select * from blackBeltMany;

/* -------------------- */

/* Create table Level DAN */
create table levelDan(
	idLevelDan int(10) primary key not null,
    levelDan varchar(100)
);
alter table levelDan
	modify idLevelDan int(10) auto_increment;

/* Insert the 5 Level of Blackbelt to the Table Level DAN */
insert into levelDan(levelDan)
VALUES('shodan'),
	('nidan'),
    ('sandan'),
    ('yondan'),
    ('godan');

select * from instruktur;
select * from levelDan;

/* 2 - TABLE PENGAJAR & TABLE STATUS */

/* Create table Pengajar */
create table pengajar(
	idPengajar int(10) primary key not null auto_increment,
    fk_IdInstruktur int(10),
	expertise LONGTEXT not null
);

/* Create table status */
create table status(
	idStatus INT(10) not null primary key auto_increment,
    status varchar(100) not null
);

/* Insert 4 types of status */
insert into status(status)
VALUES('Aktif'),
	('Meninggal Dunia'),
    ('Dicabut'),
    ('Mengundurkan Diri');

select * from pengajar;
select * from status;

/* 3 - TABLE BRANCH & TABLE DOJO */
/* For Instructor who Owns their own Dojos */
create table branch(
	idBranch int(10) not null primary key auto_increment,
    branch varchar(100) not null
);

/* Insert 8 Branches Location where the Instructors we're registered in Shidokan Indonesia */
insert into branch(branch)
	values
		('Surabaya'), ('Bali'), ('Semarang'), ('Bandung'), ('Flores'), ('Luwuk'), ('Bitung'), ('Lombok');

select * from branch;

/* Create the Table Dojo to list Dojos Name */
create table dojo(
	idDojo int(10) not null primary key auto_increment,
    namaDojo varchar(100) not null,
    alamatDojo LONGTEXT not null,
    foto LONGBLOB not null
);

select * from dojo;
select * from branch;