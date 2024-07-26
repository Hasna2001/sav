CREATE DATABASE sav;
USE sav;

CREATE TABLE listeIntervention (
    numero INT,
    structure VARCHAR(50),
    adresse VARCHAR(50),
    contact TEXT,
    intervenants VARCHAR(100),
    process VARCHAR(50),
    intervention VARCHAR(50),
    resultats VARCHAR(50),
    date datetime
);
