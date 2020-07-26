create database stage;

CREATE TABLE Enseignant(
   matricule VARCHAR(50),
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   nombre_de_classe_enseigné INT NOT NULL,
   PRIMARY KEY(matricule)
) engine = InnoDB;

CREATE TABLE classe(
   nomClasse VARCHAR(45),
   nombrePlace INT NOT NULL,
   niveauClasse VARCHAR(30) NOT NULL,
   matricule VARCHAR(50) NOT NULL,
   PRIMARY KEY(nomClasse),
   FOREIGN KEY(matricule) REFERENCES Enseignant(matricule)
) engine = InnoDB;

CREATE TABLE Etudiant(
   id INT auto_increment,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   date_de_naissance DATE NOT NULL,
   sexe VARCHAR(15) NOT NULL,
   lieu_de_naissance VARCHAR(50) NOT NULL,
   nationalité VARCHAR(50) NOT NULL default "camerounaise",
   region_d_origine VARCHAR(50) NOT NULL,
   email VARCHAR(50) NOT NULL,
   niveau_sollicité VARCHAR(20) NOT NULL,
   établissement_précédente VARCHAR(50) NOT NULL,
   adresse_complete VARCHAR(60) NOT NULL,
   profession_des_parents VARCHAR(50) NOT NULL,
   matricule VARCHAR(50) NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(matricule) REFERENCES Enseignant(matricule)
) engine = innoDB;

CREATE TABLE contient(
   nomClasse VARCHAR(45),
   id INT,
   PRIMARY KEY(nomClasse, id),
   FOREIGN KEY(nomClasse) REFERENCES classe(nomClasse),
   FOREIGN KEY(id) REFERENCES Etudiant(id)
)engine = InnoDB;
drop table contient;
drop table etudiant;

show tables;
