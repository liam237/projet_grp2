CREATE DATABASE keyce;
USE keyce;
CREATE TABLE Utilisateur(
    username varchar(55) ,
    email varchar(55),
    sexe varchar(55),
    mdp varchar(55)
    );

CREATE TABLE Etablissement(
    code_ets INT NOT NULL AUTO_INCREMENT,
    intitule_ets varchar(55) NOT NULL,
    PRIMARY KEY (code_ets)
    );
CREATE TABLE Filiere(
    code_fil INT NOT NULL AUTO_INCREMENT,
    intitule_fil varchar(75) NOT NULL,
    code_ets INT NOT NULL,
    CONSTRAINT FOREIGN KEY(code_ets)
    REFERENCES etablissement (code_ets) ON DELETE RESTRICT ON UPDATE CASCADE,
    PRIMARY KEY(code_fil)
    );
    
    CREATE TABLE Niveau(
        code_niveau INT NOT NULL AUTO_INCREMENT,
        intitule_niv VARCHAR(55),
        code_fil INT NOT NULL, 
        PRIMARY KEY(code_niveau),
        CONSTRAINT FOREIGN KEY(code_fil)
        REFERENCES Filiere(code_fil)ON DELETE RESTRICT ON UPDATE CASCADE    );
        
        
     CREATE TABLE Etudiant(
        matricule INT (5) AUTO_INCREMENT,
        nom VARCHAR(55),
        prenom VARCHAR(55), 
        dtanaiss VARCHAR(12), 
        lieu VARCHAR(35),
        nationalite VARCHAR(35),
         annee_inscription VARCHAR(15),
        code_niveau int not null,
        nom_fil varchar(30) not null,
        telephone varchar(30) not null,
        email varchar (30) not null,
        tel_parent varchar(100) not null,
        mot_passe varchar(15) not null,
        PRIMARY KEY (matricule)
    );
 CREATE TABLE UE(
        code_ue int AUTO_INCREMENT PRIMARY KEY,
        intitule_ue VARCHAR(55)
    );
    
    
    
    CREATE TABLE Ecue(
    code_ecue int not null AUTO_INCREMENT,
    intitule_ecue VARCHAR(45),
        PRIMARY KEY (code_ecue)
    );
 CREATE TABLE Cours(
        code_cours int not null AUTO_INCREMENT,
        nb_credit DOUBLE,
        code_niveau int not null,
        code_ue int not null, 
        code_ecue int not null,
     PRIMARY KEY(code_cours),
       CONSTRAINT Foreign Key (code_niveau) REFERENCES niveau(code_niveau)ON DELETE RESTRICT ON UPDATE CASCADE,
       CONSTRAINT  Foreign Key (code_ue) REFERENCES UE(code_ue)ON DELETE RESTRICT ON UPDATE CASCADE,
      CONSTRAINT  Foreign Key (code_ecue) REFERENCES ecue(code_ecue)ON DELETE RESTRICT ON UPDATE CASCADE
    );  
CREATE TABLE Notes(
    notessurvingt DOUBLE, 
    code_cours int not null,
    matricule int not null,
    CONSTRAINT Foreign Key (code_cours) REFERENCES Cours(code_cours)ON DELETE RESTRICT ON UPDATE CASCADE,
   CONSTRAINT  Foreign Key (matricule) REFERENCES Etudiant(matricule)ON DELETE RESTRICT ON UPDATE CASCADE
);
