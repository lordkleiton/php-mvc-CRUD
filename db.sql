CREATE DATABASE teste;

USE teste;

CREATE TABLE produtos(
    id INT NOT NULL AUTO_INCREMENT, 
    nomes VARCHAR(255) NOT NULL, 
    valor DECIMAL(10, 2) NOT NULL, 
    descricao VARCHAR(1000) NOT NULL, 
    img VARCHAR(255) NOT NULL, 
    PRIMARY KEY (id)
);