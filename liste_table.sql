#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: film
#------------------------------------------------------------

CREATE TABLE film(
        ID_FILM     Int  Auto_increment  NOT NULL ,
        titre       Varchar (255) NOT NULL ,
        annee       Year NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT film_PK PRIMARY KEY (ID_FILM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realisateur
#------------------------------------------------------------

CREATE TABLE realisateur(
        ID_realisateur Int  Auto_increment  NOT NULL ,
        Nom            Varchar (255) NOT NULL ,
        Prenom         Varchar (255) NOT NULL
	,CONSTRAINT realisateur_PK PRIMARY KEY (ID_realisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genre
#------------------------------------------------------------

CREATE TABLE genre(
        ID_GENRE Int  Auto_increment  NOT NULL ,
        genre    Varchar (255) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (ID_GENRE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acteur
#------------------------------------------------------------

CREATE TABLE acteur(
        ID_ACTEUR Int NOT NULL ,
        Nom       Varchar (255) NOT NULL ,
        Prenom    Varchar (255) NOT NULL
	,CONSTRAINT acteur_PK PRIMARY KEY (ID_ACTEUR)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genre_film
#------------------------------------------------------------

CREATE TABLE genre_film(
        ID_FILM  Int NOT NULL ,
        ID_GENRE Int NOT NULL
	,CONSTRAINT genre_film_PK PRIMARY KEY (ID_FILM,ID_GENRE)

	,CONSTRAINT genre_film_film_FK FOREIGN KEY (ID_FILM) REFERENCES film(ID_FILM)
	,CONSTRAINT genre_film_genre0_FK FOREIGN KEY (ID_GENRE) REFERENCES genre(ID_GENRE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acteur_film
#------------------------------------------------------------

CREATE TABLE acteur_film(
        ID_ACTEUR Int NOT NULL ,
        ID_FILM   Int NOT NULL
	,CONSTRAINT acteur_film_PK PRIMARY KEY (ID_ACTEUR,ID_FILM)

	,CONSTRAINT acteur_film_acteur_FK FOREIGN KEY (ID_ACTEUR) REFERENCES acteur(ID_ACTEUR)
	,CONSTRAINT acteur_film_film0_FK FOREIGN KEY (ID_FILM) REFERENCES film(ID_FILM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: film_realisateur
#------------------------------------------------------------

CREATE TABLE film_realisateur(
        ID_realisateur Int NOT NULL ,
        ID_FILM        Int NOT NULL
	,CONSTRAINT film_realisateur_PK PRIMARY KEY (ID_realisateur,ID_FILM)

	,CONSTRAINT film_realisateur_realisateur_FK FOREIGN KEY (ID_realisateur) REFERENCES realisateur(ID_realisateur)
	,CONSTRAINT film_realisateur_film0_FK FOREIGN KEY (ID_FILM) REFERENCES film(ID_FILM)
)ENGINE=InnoDB;

