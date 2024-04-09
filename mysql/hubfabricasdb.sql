create database if not exists hubfabricasdb;

use hubfabricasdb;

create table if not exists admin(
	senha varchar(255) not null primary key,
    nome varchar(255) not null,
    email varchar(255) not null,
    telefone varchar(255) not null,
    arquivo varchar(255) not null,
    estado bool not null default true
);

create table if not exists editais( 
	codigo varchar(255) not null primary key,
    nome varchar(255) not null,
    dataInicio date not null,
    dataFim date not null,
    arquivo varchar(255) not null
);