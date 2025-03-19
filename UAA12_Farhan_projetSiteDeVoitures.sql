DROP TABLE IF EXISTS Utilisateur;
create table Utilisateur (
utilID int NOT NULL AUTO_INCREMENT, 
utilPrenom varChar(20),
utilNom varChar(20),
utilEmail varChar(50),
utilMot_de_passe varChar(20),
utilPhoto_profil text(1000),
utilRole varChar(20),
primary key (utilID) 
);
alter table  Utilisateur
DROP COLUMN utilPhoto_profil;
alter table  Utilisateur
ADD utilPhoto_profil text(1000);

DROP TABLE IF EXISTS Voiture;
create table Voiture (
voitID int NOT NULL AUTO_INCREMENT,
voitNom varChar(20),
voitPrix varChar(20),
voitImage text(50),
voitLien_achat varChar(20),
utilID int ,
tyVoiID int,
primary key (voitID),
FOREIGN KEY (utilID) REFERENCES Utilisateur (utilID),
FOREIGN KEY (tyVoiID) REFERENCES Type_voiture (tyVoiID) 
);

DROP TABLE IF EXISTS Type_voiture;
create table Type_voiture (
tyVoiID int NOT NULL AUTO_INCREMENT,
tyVoiFamiliale varChar(20),
tyVoiSUV varChar(20),
tyVoiSportive varChar(20),
primary key (tyVoiID)
);

create table Type_motorisation (
motorID int NOT NULL AUTO_INCREMENT,
motorEssence varChar(20),
motorDiesel varChar(20),
motorHybride varChar(20),
motorElectrique varChar(20),
primary key (motorID)
);

DROP TABLE IF EXISTS Favoris;
create table Favoris (
favID INT NOT NULL AUTO_INCREMENT,
dateAjout date,
utilID int,
voitID int,
FOREIGN KEY (utilID) REFERENCES Utilisateur (utilID),
FOREIGN KEY (voitID) REFERENCES Voiture (voitID),
primary key (favID )
); 

insert into Utilisateur( utilNom , utilPrenom , utilEmail , utilMot_de_passe , utilPhoto_profil , utilRole)
values('Abuzour', 'Farhan','200550@site.asty-moulin.be','as123254','https://media.istockphoto.com/id/1495088043/fr/vectoriel/ic%C3%B4ne-de-profil-utilisateur-avatar-ou-ic%C3%B4ne-de-personne-photo-de-profil-symbole-portrait.jpg?s=612x612&w=0&k=20&c=moNRZjYtVpH-I0mAe-ZfjVkuwgCOqH-BRXFLhQkZoP8=','admin');