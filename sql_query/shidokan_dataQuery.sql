use shidokan_db;
show tables;

describe instruktur;

/* 1 - Querying Instructor's Profile */
insert into instruktur(namaDepan, namaBelakang, fk_idBranch, noTelp, fk_idStatus)
				/* Ganti jadi namaDepan, namaBelakang, fk_idBranch, noTelp, fk_idStatus */
VALUES('Tiovano', 'Tikori Maihesa', 5, null, 1),
	('I Putu Ray', 'Lewi Andrean', 2, null, 1),
    ('Soedhihono', 'Soedjianto', 3, null, 2),
    ('Athik', 'Roji Pamuji', 3, null, 3),
    ('Budiyanto', null, 3, null, 3),
    ('Danu', 'Supramono', 3, null, 3),
    ('Raphael', 'Jenar Wibisono', 3, null, 3),
    ('Ivan', 'Weda', 1, null, 3),
    ('Delvia', 'Disnia Dela', 1, null, 3),
    ('Widiyanto', 'Tri Handoko', 3, null, 3),
    ('Supriyanto', null, 3, null, 3),
    ('Gembong', 'Satria Negara', 3, null, 3),
    ('Erwin', 'Haritjahyo', 1, null, 3),
    ('Melkhianus', 'Raharjo Jemahun', 2, null, 1),
    ('Steven', 'Stevanus', 3, null, 3),
    ('Amir', null, 3, null, 3),
    ('Dedy', 'Setio', 1, null, 1),
    ('William', 'Adriano', 4, null, 1),
    ('Darwin', 'Kurniawan', 1, null, 4),
    ('Gabriel', 'Constantine Nangin', 2, null, 1),
    ('Rahmat', 'Syahroni S Larau', 6, null, 1),
    ('Mohammad', 'Agung Saleh', 6, null, 1),
    ('Laode', 'Suwarno Nur', 6, null, 1),
    ('Adnan', 'Yusuf Mamonto', 7, null, 1),
    /* DAN II */
    /* namaDepan, namaBelakang, fk_idBranch, noTelp, fk_idStatus */
    ('Oktavian', 'Eka Putra', 2, null, 1),
    ('Abdul', 'Halim', 1, null, 1),
	/* DAN III */
    ('Bambang', 'Soengging', 1, null, 3),
    ('Made', 'Senjaya', 2, null, 3),
    ('Wijaya', 'The', 2, null, 3),
    ('Suryadi', 'Wanda', 2, null, 3),
    ('Abdul', 'Aziz', 8, null, 3),
    ('Ivan', 'Andinata', 3, null, 3),
    ('Johan', 'Samuel Nangin', 2, null, 1), /* DAN II & III */
    /* DAN IV */
    ('Erick', 'Danurahardja', 1, null, 1), /* DAN III & IV */
    ('Achmad', 'Noer Hidayat', 1, null, 1);

select * from blackbelt;

/* 2 - Insert blackbelt's Cert Number & The date issued (still seperate, and not link
with each instructor's profile) */
insert into blackbelt(fk_idLevelDan, nomorsertifikat, dateIssued)
values
	/* DAN I */
    /* Tiovano Tikori Maihesa */
    (1, 'INA 001-0002', '2020-12-12'),
    /* I Putu Ray Lewi Andrean */
    (1, 'INA 001-0003', '2020-12-12'),
    /* Soedhihono Soedjianto */
    (1, 'INA 001-0004', '2021-09-05'),
    /* Athik Roji Pamuji */
    (1, 'INA 001-0005', '2021-09-05'),
    /* Budiyanto */
    (1, 'INA 002-0005', '2021-05-05'),
    /* Danu Supramono */
    (1, 'INA 002-0006', '2021-05-05'),
    /* Raphael Jenar Wibisono */
    (1, 'INA 002-0007', '2021-05-05'),
    /* Iwan Weda */
    (1, 'INA 001-0006', '2022-02-07'),
    /* Delvia Disnia Dela */
    (1, 'INA 001-0007', '2022-02-07'),
    /* Widiyanto Tri Handoko */
    (1, 'INA 001-0008', '2022-02-07'),
    /* Supriyanto */
    (1, 'INA 001-0009', '2022-02-07'),
    /* Gembong Satria Negara */
    (1, 'INA 002-0008', '2022-07-07'),
    /* Erwin Haritjahyo */
    (1, 'INA 002-0009', '2022-07-07'),
    /* Melkianus Raharjo Jemahun */
    (1, 'INA 001-0013', '2022-06-26'),
    /* Steven Stevanus */
    (1, 'INA 001-0014', '2022-06-26'),
	/* Amir */
    (1, 'INA 001-0015', '2022-06-26'),
    /* Dedy Setio */
    (1, 'INA 001-0016', '2023-01-15'),
    /* William Adriano */
    (1, 'INA 003-0001', '2023-01-15'),
    /* Darwin kurniawan */
    (1, '1-102', '2023-06-24'),
    /* Gabriel Constantine Nangin */
    (1, '1-101', '2023-06-24'),
    /* Rahmat Syahroni S Larau */
    (1, 'INA 001-0018', '2024-02-25'),
    /* Mohammad Agung Saleh */
    (1, 'INA 001-0019', '2024-02-25'),
    /* Laode Suwarno Nur */
    (1, '1-190', '2024-05-24'),
    /* Adnan Yusuf Mamonto */
    (1, '1-214', '2024-09-29'),
    
    /* DAN II */
    /* Oktavian Eka Putra */
	(2, 'INA 001-0012', '2022-06-26'),
    /* Abdul Halim */
    (2, 'INA 001-0017', '2024-02-25'),
    
    /* DAN III */
    /* Bambang Soengging */
    (3, 'INA 002-0001', '2021-01-31'),
    /* Made Senjaya */
    (3, 'INA 002-0002', '2021-01-31'),
    /* Wijaya The */
    (3, 'INA 002-0003', '2021-01-31'),
    /* Suryadi Wanda */
    (3, 'INA 002-0004', '2021-01-31'),
    /* Abdul Aziz */
    (3, 'INA 001-0010', '2022-06-26'),
    /* Ivan Andinata */
    (3, 'INA 001-0011', '2022-06-26'),
    
    /* DAN IV */
    /* Achmad Noer Hidayat */
    (4, 'INA-001-0017', '2024-04-22'),
    
    /* DAN II & III */
    /* Johan Samuel Nangin */
    (2, '(2-36)', '2023-06-24'),
    (3, '(3-60)', '2024-09-29'),
    
    /* DAN III & IV */
    /* Erick Danurahardja */
    (3, 'INA 001-0001', '2021-01-31'),
    (4, '(4-40)', '2023-06-24');

describe blackbeltmany;
/* Link both the instructor, and the blackbelt, matches to each of their profiles 
by using the table blackBeltMany */
/* PS: instructor >< blackbelt (1:n) */
insert into blackBeltMany(fk_idInstruktur, fk_idBlackBelt)
VALUES
	/* DAN I */
	/* Tiovano Tikori Maihesa */
	(1,1),
    /* I Putu Ray Lewi Andrean */
    (2,2),
    /* Soedhihono Soedjianto */
    (3,3),
    /* Athik Roji Pamuji */
    (4,4),
    /* Budiyanto */
    (5,5),
    /* Danu Supramono */
    (6,6),
    /* Raphael Jenar Wibisono */
    (7,7),
    /* Iwan Weda */
    (8,8),
    /* Delvia Disnia Dela */
    (9,9),
    /* Widiyanto Tri Handoko */
    (10,10),
    /* Supriyanto */
    (11,11),
    /* Gembong Satria Negara */
    (12,12),
    /* Erwin Haritjahyo */
    (13,13),
    /* Melkianus Raharjo Jemahun */
    (14,14),
    /* Steven Stevanus */
	(15,15),
    /* Amir */
    (16,16),
    /* Dedy Setio */
    (17,17),
    /* William Adriano */
    (18,18),
    /* Darwin kurniawan */
    (19,19),
    /* Gabriel Constantine Nangin */
    (20,20),
    /* Rahmat Syahroni S Larau */
    (21,21),
    /* Mohammad Agung Saleh */
    (22,22),
    /* Laode Suwarno Nur */
    (23,23),
    /* Adnan Yusuf Mamonto */
    (24,24),
    /* DAN II */
    /* Oktavian Eka Putra */
    (25,25),
    /* Abdul Halim */
    (26,26),
    /* DAN III */
    /* Bambang Soengging */
    (27,27),
    /* Made Senjaya */
    (28,28),
    /* Wijaya The */
    (29,29),
    /* Suryadi Wanda */
    (30,30),
    /* Abdul Aziz */
    (31,31),
    /* Ivan Andinata */
    (32,32),
    /* DAN IV */
    /* Achmad Noer Hidayat */
    (35,33),

    /* DAN II & III */
    /* Johan Samuel Nangin */
    (33,34), (33,35),
    
    /* DAN III & IV */
    /* Erick Danurahardja */
    (34,36), (34,37);

/* Previously before creating the blackBeltMany table, there's an accident where I use insert
into 'instruktur' table, filling the FK column fk_idBlackBelt with more new rows above 35,
where supposedly I use the update table method */
/* So I use this deleted row method */
delete from instruktur
	where idInstruktur between 36 and 109;

/* Check & Re-Check the data on each tables here */
select * from instruktur;
select * from blackbelt;
select * from blackbeltmany;
select * from pengajar;
select * from branch;
select * from levelDan;
select * from status;
