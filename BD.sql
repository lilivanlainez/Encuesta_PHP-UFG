-- Crear la base de datos

CREATE DATABASE IFencuestas_db;

-- Usar la base de datos

USE encuestas_db;

-- Crear la tabla de encuesta

CREATE TABLE
    IF NOT EXISTS encuesta (
        id INT AUTO_INCREMENT PRIMARY KEY,
        origen VARCHAR(255) NOT NULL,
        fecha_encuesta DATETIME NOT NULL
    );