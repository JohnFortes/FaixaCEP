-- Active: 1710245655251@@127.0.0.1@3306
-- Active: 1711222150568@@127.0.0.1@3306@db_faixa_cep

DROP DATABASE IF EXISTS DB_FAIXA_CEP;

CREATE DATABASE DB_FAIXA_CEP
    DEFAULT CHARACTER SET = 'utf8mb4';

USE DB_FAIXA_CEP;

DROP TABLE IF EXISTS tb_uf_faixas;

CREATE TABLE tb_uf_faixas(
    uf_faixa_id INT NOT NULL AUTO_INCREMENT,
    uf VARCHAR(2) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    uf_cep_inicial INT NOT null,
    uf_cep_final INT NOT null,
    PRIMARY KEY(uf_faixa_id)
);

DROP TABLE IF EXISTS tb_cidades_faixas;

CREATE TABLE tb_cidades_faixas(
    cidade_faixa_id INT NOT NULL AUTO_INCREMENT,
    uf_faixa_id INT NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    cidade_cep_inicial INT NOT null,
    cidade_cep_final INT NOT null,
    Foreign Key (uf_faixa_id) REFERENCES tb_uf_faixas(uf_faixa_id),
    PRIMARY KEY (cidade_faixa_id)
);

DROP TABLE IF EXISTS tb_user;

CREATE TABLE tb_user(
    user_id INT NOT NULL AUTO_INCREMENT,
    user_nikname VARCHAR(20) NOT NULL UNIQUE,
    user_name VARCHAR(90) NOT NULL,
    user_email VARCHAR(50) NOT NULL,
    user_status INT NOT NULL DEFAULT 0,
    user_senha VARCHAR(90),
    user_data_cadastro DATETIME NOT NULL DEFAULT now(),
    user_data_acesso DATETIME,
    PRIMARY KEY(user_id)
);