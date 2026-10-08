CREATE DATABASE crud_yt;

USE crud_yt;

CREATE TABLE pessoa (
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

-- SEEDS

INSERT INTO pessoa (nome) VALUES ('Breno'), ('Nicole'), ('Gabi'), ('Jacyara');
