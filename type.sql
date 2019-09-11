#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

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

