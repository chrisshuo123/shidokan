-- 1 - CREATE TABLE DB FOR SHIDOKAN WEBSITE
-- 1.1. BLACKBELT TABLE
-- Create Blackbelt Table
CREATE TABLE blackbelt (
    idBlackBelt int(10) primary key NOT NULL auto_increment,
    fk_idLevelDan int(10),
    nomorSertifikat VARCHAR(100),
    dateIssued DATE
);
-- Rename wrong Column names
ALTER TABLE blackbelt
CHANGE fk_idLevelDan idLevelDan_fkBlackBelt INT(10);
-- Add blackbelt FK Constraint
ALTER TABLE blackbelt
    ADD CONSTRAINT idLevelDan_fkBlackBelt FOREIGN KEY (idLevelDan_fkBlackBelt)
    REFERENCES leveldan(idLevelDan);

-- 1.2. INSTRUKTUR TABLE
-- Create instruktur table
CREATE TABLE instruktur(
    idInstruktur INT(11) PRIMARY KEY NOT NULL auto_increment,
    namaDepan VARCHAR(100) NOT NULL,
    namaBelakang VARCHAR(100) NOT NULL,
    fk_idBranch INT(11),
    fk_idStatus INT(11),
    prestasi longtext,
    emailAddress VARCHAR(100),
    noTelp INT(11),
    foto LONGBLOB,
    pesanTambahan LONGTEXT
);
-- Rename wrong column names
-- First, drop the constraint for the renamed FKs
ALTER TABLE instruktur
    DROP CONSTRAINT fk_idBranch,
    DROP CONSTRAINT fk_idStatus;
-- Then rename the wrong fk column names
ALTER TABLE instruktur
    CHANGE fk_idBranch idBranch_fkInstruktur INT(11),
    CHANGE fk_idStatus idStatus_fkInstruktur INT(11);
-- Proceed to re-add the constraint after renaming the wrong FK Column Names:
ALTER TABLE instruktur
    ADD CONSTRAINT idBranch_fkInstruktur FOREIGN KEY (idBranch_fkInstruktur)
    REFERENCES branch(idBranch),
    ADD CONSTRAINT idStatus_fkInstruktur FOREIGN KEY (idStatus_fkInstruktur)
    REFERENCES status(idStatus);

-- 1.3. BLACKBELTMANY TABLE
-- Create blackbeltmany table
CREATE TABLE blackbeltmany (
    idBlackBeltMany INT(10) PRIMARY KEY NOT NULL auto_increment,
    fk_idInstruktur INT(10),
    fk_idBlackBelt INT(10)
);
-- Rename the wrong column names
-- Before that, drop constraint first
ALTER TABLE blackbeltmany
    DROP CONSTRAINT fk_idInstruktur,
    DROP CONSTRAINT fk_idBlackBelt;
-- Then start the renaming column process
ALTER TABLE blackbeltmany
    CHANGE fk_idInstruktur idInstruktur_fkBlackBeltMany INT(10),
    CHANGE fk_idBlackBelt idBlackBelt_fkBlackBeltMany INT(10);
-- Now, Add the constraint again
ALTER TABLE blackbeltmany
    ADD CONSTRAINT idInstruktur_fkBlackBeltMany FOREIGN KEY (idInstruktur_fkBlackBeltMany)
    REFERENCES instruktur(idInstruktur),
    ADD CONSTRAINT idBlackBelt_fkBlackBeltMany FOREIGN KEY (idBlackBelt_fkBlackBeltMany)
    REFERENCES blackbelt(idBlackBelt);

-- 1.4. DOJO TABLE
-- Create the Dojo table
CREATE TABLE dojo(
    idDojo INT(10) PRIMARY KEY NOT NULL auto_increment,
    namaDojo VARCHAR(100) NOT NULL,
    alamatDojo TEXT NOT NULL,
    foto BLOB
);
-- Add Column idInstruktur FK in table Dojo, as a Blackbelt Instructur In charge of the Dojo (Owner Dojo / Pengelola)
alter table dojo
add column idInstruktur_fkInstruktur int(10) after alamatDojo;
-- Because every Dojo needs Instructor as Owner or the Manager (Pemilik atau Pengelola), we need to add the fkInstruktur ID from Table Instruktur into this Dojo Table:
-- Rename any wrong column name
alter table dojo
CHANGE idInstruktur_fkInstruktur idInstruktur_fkDojo INT(10);
-- Add Constraint to the New FK Column
alter table dojo
ADD CONSTRAINT idInstruktur_fkDojo FOREIGN KEY (idInstruktur_fkDojo)
REFERENCES instruktur(idInstruktur);

-- 1.5. TABLE MAINLY FOR THE FOREIGN KONSTRAINTS

-- 1.5.1. BRANCH TABLE
-- Create the Branch table
CREATE TABLE branch(
    idBranch INT(10) PRIMARY KEY auto_increment,
    branch VARCHAR(100) NOT NULL
);
-- Insert the data needed
INSERT INTO branch(branch)
    VALUES
        ('Surabaya'),('Bali'),('Semarang'),('Bandung'),('Flores'),('Luwuk'),('Bitung'),('Lombok');
-- Add foto column in this table branch
ALTER TABLE branch
ADD COLUMN foto_lokasi BLOB after branch;
-- Insert the images needed
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/surabaya.JPG')
WHERE idBranch = 1;
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/bali.JPG')
WHERE idBranch = 2;
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/semarang.JPG')
WHERE idBranch = 3;
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/bandung.JPG')
WHERE idBranch = 4;
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/flores.JPG')
WHERE idBranch = 5;
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/luwuk.JPG')
WHERE idBranch = 6;
UPDATE branch
SET foto_lokasi = LOAD_FILE('D:/XAMPP/htdocs/shidokan-web/admin/public/img/location/bitung.JPG')
WHERE idBranch = 7;
-- Lombok berhubungan belum ada, maka di comment dulu bagian image lombok
-- SET foto_lokasi = LOAD_FILE('D:/xampp/htdocs/shidokan-web/admin/public/img/location/lombok.jpg')
-- WHERE idBranch = 8,
-- Now, change the datatype from BLOB into LONGBLOB
ALTER TABLE branch
CHANGE foto_lokasi foto_lokasi LONGBLOB;

-- 1.5.2. LEVEL DAN TABLE
-- Create the levelDan Table
CREATE TABLE levelDan(
    idLevelDan INT(10) PRIMARY KEY NOT NULL auto_increment,
    levelDan VARCHAR(100)
);
-- Insert the data needed
INSERT INTO levelDan(levelDan)
    VALUES
        ('shodan'),('nidan'),('sandan'),('yondan'),('godan');

-- 1.5.3. STATUS TABLE
-- Create the Status table
CREATE TABLE status(
    idStatus INT(10) PRIMARY KEY NOT NULL auto_increment,
    status VARCHAR(100) NOT NULL
);
-- Insert the data needed
INSERT INTO status(status)
    VALUES
        ('Aktif'),('Meninggal Dunia'),('Dicabut'),('Mengundurkan Diri');