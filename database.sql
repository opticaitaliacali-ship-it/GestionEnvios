CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE envios (
    codigo VARCHAR(20) PRIMARY KEY,
    descripcion VARCHAR(255) NOT NULL,
    destino VARCHAR(150) NOT NULL
);