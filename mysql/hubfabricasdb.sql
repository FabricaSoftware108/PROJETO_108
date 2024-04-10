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

create table if not exists demanda(
	cnpj varchar(255) not null primary key,
    nomeEmpresa varchar(255) not null,
    emailEmpresa varchar(255) not null,
    estadoEmpresa varchar(255) not null,
    telefoneEmpresa varchar(255) not null,
    cidadeEmpresa varchar(255) not null,
    nomeTitular varchar(255) not null,
    emailTitular varchar(255) not null,
    cpf varchar(255) not null,
    telefoneTitular varchar(255) not null,
    arquivo varchar(255) not null
);

create table if not exists vagaEmprego(
	cnpj varchar(255) not null primary key,
    nomeEmpresa varchar(255) not null,
    emailEmpresa varchar(255) not null,
    cidade varchar(255) not null,
    telefone varchar(255) not null,
    estado varchar(255) not null,
    descricao varchar(10000) not null
);

create table if not exists bancoTalentos(
	cpf varchar(255) not null primary key,
    
);