create database if not exists hubfabricasdb;

use hubfabricasdb;

create table if not exists admin(
	email varchar(255) not null primary key,
	senha varchar(255) not null,
    nome varchar(255) not null,
    telefone varchar(255) not null,
    estado bool not null default true
);

create table if not exists editais(
	codigo varchar(255) not null primary key,
    nome varchar(255) not null,
    dataInicio date not null,
    dataFim date not null,
    arquivo varchar(255) not null
);

create table if not exists demandas(
	id int auto_increment not null primary key,
	cnpj varchar(255) not null,
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

create table if not exists vagasEmprego(
	id int auto_increment not null primary key,
	cnpj varchar(255) not null,
    nomeEmpresa varchar(255) not null,
    emailEmpresa varchar(255) not null,
    cidade varchar(255) not null,
    telefone varchar(255) not null,
    estado varchar(255) not null,
    descricao varchar(10000) not null
);

create table if not exists bancosTalentos(
	cpf varchar(255) not null primary key,
    nome varchar(255) not null,
    sobrenome varchar(255) not null,
    escolaridade varchar(255) not null,
    dataNascimento date not null,
    email varchar(255) not null,
    telefone varchar(255) not null,
    estado varchar(255) not null,
    cidade varchar(255) not null,
    bairro varchar(255) not null,
    rua varchar(255) not null,
    numero varchar(255) not null,
    github varchar(255) not null,
    linkedin varchar(255) not null
);

create table if not exists alunosPsg(
	id int auto_increment not null primary key,
	cpf varchar(255) not null,
    nome varchar(255) not null,
    rg varchar(255) not null,
    telefone varchar(255) not null,
    email varchar(255) not null,
    nomeMae varchar(255) not null,
    nomePai varchar(255) not null,
    rua varchar(255) not null,
    bairro varchar(255) not null,
    numero varchar(255) not null,
    complemento varchar(255) not null,
    cep varchar(255) not null,
    codigoEdital varchar(255) not null,
    constraint fk_codigoEdital foreign key (codigoEdital) references editais(codigo)
);

create table if not exists carroselSoftware(
	id int auto_increment not null primary key,
	titulo varchar(255) not null,
    subtitulo varchar(255) not null,
    descricao varchar(1400) not null,
    img varchar(255) not null
);

create table if not exists carroselJogos(
	id int auto_increment not null primary key,
	titulo varchar(255) not null,
    subtitulo varchar(255) not null,
    descricao varchar(1400) not null,
    img varchar(255) not null
);

create table if not exists carroselCgi(
	id int auto_increment not null primary key,
	titulo varchar(255) not null,
    subtitulo varchar(255) not null,
    descricao varchar(1400) not null,
    img varchar(255) not null
);

create table if not exists carroselAudioVideo(
	id int auto_increment not null primary key,
	titulo varchar(255) not null,
    subtitulo varchar(255) not null,
    descricao varchar(1400) not null,
    img varchar(255) not null
);