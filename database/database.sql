
CREATE TABLE t_roles (

id_role INT AUTO_INCREMENT,  
name VARCHAR(10),
date_at VARCHAR(15),
PRIMARY KEY (id_role)

);


CREATE TABLE t_users (

id_user INT AUTO_INCREMENT,
name VARCHAR(100),
prenom VARCHAR(100),
sexe VARCHAR(5),
username VARCHAR(30),
password VARCHAR(30),
id_role INT,  
createdAt VARCHAR(15),
updatedAt VARCHAR(15),

PRIMARY KEY (id_user),
FOREIGN KEY (id_role) REFERENCES t_roles(id_role)

);

CREATE TABLE t_agent (

id_agent INT AUTO_INCREMENT,
names VARCHAR(100),
prenom VARCHAR(100),
sexe VARCHAR(5),
matricule VARCHAR(30),
grade VARCHAR(30),
acteNomination VARCHAR(30),  
fonctionAg VARCHAR(50),
cards VARCHAR(50),
etatCivil VARCHAR(50),
conjoint VARCHAR(50),
datEngagement VARCHAR(20),
recrutement VARCHAR(50),
niveauEtude VARCHAR(50),
obtention VARCHAR(50),
autreFormation text,
status VARCHAR (50),
flag VARCHAR(7),
removedBy int,
updatedBy int,
comment VARCHAR(30),
id_user INT,
createdAt VARCHAR (20),
updatedAt VARCHAR (20),

PRIMARY KEY (id_agent),
FOREIGN KEY (id_user) REFERENCES t_users(id_user)

);

CREATE TABLE t_controle (

id INT AUTO_INCREMENT,
matriculeAg VARCHAR(30), 
activity VARCHAR(255),
paiement VARCHAR(15),
language VARCHAR(255), 
contoler VARCHAR(255),
id_user INT,
createdAt VARCHAR(20),
updatedAt VARCHAR(20),

PRIMARY KEY (id),
FOREIGN KEY (id_user) REFERENCES t_users(id_user)

);

CREATE TABLE t_province (

idProv INT AUTO_INCREMENT,
name VARCHAR(100), 
createdAt VARCHAR(15),
updatedAt VARCHAR(15),

PRIMARY KEY (idProv)

);
CREATE TABLE t_ville (

idVille INT AUTO_INCREMENT,
name VARCHAR(100), 
idProv INT,
createdAt VARCHAR(15),
updatedAt VARCHAR(15),

PRIMARY KEY (idVille),
FOREIGN KEY (idProv) REFERENCES t_province(idProv)

);
CREATE TABLE t_commune (

idCom INT AUTO_INCREMENT,
name VARCHAR(100),
idVille INT, 
createdAt VARCHAR(15),
updatedAt VARCHAR(15),

PRIMARY KEY (idCom),
FOREIGN KEY (idVille) REFERENCES t_ville(idVille)

);

