CREATE TABLE IF NOT EXISTS patients (
        id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        patientFirstName VARCHAR(50) DEFAULT NULL,
        patientLastName VARCHAR(50) DEFAULT NULL,
        patientMarried TINYINT(1),
        patientBirthDate DATE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Rebecca','Johnston',0,'1989-09-24');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Laura','Stacey',1,'1994-05-05');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Jennifer','Wakefield',1,'1989-06-15');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Jillian','Saulnier',1,'1992-03-07');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Mélodie','Daoust',0,'1992-01-07');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Bailey','Bram',1,'1990-09-05');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Brianne','Jenner',0,'1991-05-04');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Sarah','Nurse',1,'1995-01-04');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Haley','Irwin',0,'1988-06-06');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Natalie','Spooner',1,'1990-10-17');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Emily','Clark',0,'1995-11-28');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Marie-Philip','Poulin',1,'1991-03-28');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Jocelyne','Larocque',1,'1988-05-19');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Brigette','Lacquette',0,'1992-10-11');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Lauriane','Rougeau',1,'1990-04-12');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Laura','Fortino',0,'1991-01-30');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Meaghan','Mikkelson',1,'1985-01-04');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Renata','Fast',0,'1994-10-06');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Shannon','Szabados',1,'1986-08-06');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Geneviève','Lacasse',0,'1989-05-05');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Ann-Renée','Desbiens',1,'1994-04-10');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Gilbert','Brulé',0,'1987-01-01');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Wojtek','Wolski',1,'1986-02-24');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Derek','Roy',0,'1983-05-04');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Chris','Kelly',1,'1980-11-11');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Rob','Klinkhammer',0,'1986-08-12');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Brandon','Kozun',1,'1990-03-08');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Quinton','Howden',0,'1992-01-21');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Renéte','Bourque',1,'1981-12-10');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Andrew','Ebbett',0,'1983-01-02');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Mason','Raymond',1,'1985-09-17');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Eric','O’Dell',0,'1990-06-21');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Maxim','Lapierre',1,'1985-03-29');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Linden','Vey',0,'1991-07-17');
INSERT INTO PATIENTS (`patientFirstName`,`patientLastName`,`patientMarried`,`patientBirthDate`) VALUES ('Christian','Thomas',1,'1992-05-26');