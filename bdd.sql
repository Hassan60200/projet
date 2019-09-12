#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: membres
#------------------------------------------------------------

CREATE TABLE membres(
        id         Int  Auto_increment  NOT NULL ,
        pseudo     Varchar (50) NOT NULL ,
        mail       Varchar (100) NOT NULL ,
        motdepasse Text NOT NULL
	,CONSTRAINT membres_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: register
#------------------------------------------------------------

CREATE TABLE register(
        id         Int  Auto_increment  NOT NULL ,
        lastname   Varchar (50) NOT NULL ,
        firstname  Varchar (50) NOT NULL ,
        mail       Varchar (100) NOT NULL ,
        phone      Varchar (10) NOT NULL ,
        day        Date NOT NULL ,
        booking    Int NOT NULL ,
        people     Int NOT NULL ,
        id_membres Int NOT NULL
	,CONSTRAINT register_PK PRIMARY KEY (id)

	,CONSTRAINT register_membres_FK FOREIGN KEY (id_membres) REFERENCES membres(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contact
#------------------------------------------------------------

CREATE TABLE contact(
        id         Int  Auto_increment  NOT NULL ,
        lastname   Varchar (30) NOT NULL ,
        firstname  Varchar (30) NOT NULL ,
        mail       Varchar (100) NOT NULL ,
        phone      Int NOT NULL ,
        zipCode    Int NOT NULL ,
        message    Text NOT NULL ,
        id_membres Int NOT NULL
	,CONSTRAINT contact_PK PRIMARY KEY (id)

	,CONSTRAINT contact_membres_FK FOREIGN KEY (id_membres) REFERENCES membres(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Menu
#------------------------------------------------------------

CREATE TABLE Menu(
        id         Int  Auto_increment  NOT NULL ,
        title      Varchar (50) NOT NULL ,
        type       Varchar (200) NOT NULL ,
        price      Float NOT NULL ,
        id_membres Int NOT NULL
	,CONSTRAINT Menu_PK PRIMARY KEY (id)

	,CONSTRAINT Menu_membres_FK FOREIGN KEY (id_membres) REFERENCES membres(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: types
#------------------------------------------------------------

CREATE TABLE types(
        idType Int  Auto_increment  NOT NULL ,
        name   Varchar (20) NOT NULL ,
        id     Int NOT NULL
	,CONSTRAINT types_PK PRIMARY KEY (idType)

	,CONSTRAINT types_Menu_FK FOREIGN KEY (id) REFERENCES Menu(id)
)ENGINE=InnoDB;

