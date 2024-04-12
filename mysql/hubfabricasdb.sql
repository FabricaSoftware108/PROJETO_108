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


insert into editais() values
('32/2023', 'fábrica de software', '2023-12-29', '2024-04-01', './arquivostest/img.jpg'),
('82/2024', 'fábrica de jogos', '2024-01-01', '2024-02-10', './arquivostest/img.jpg'),
('10/2022', 'fábrica de cgi', '2024-02-11', '2024-02-28', './arquivostest/img.jpg'),
('40/2024', 'fábrica de audio e video', '2024-03-03', '2024-04-05', './arquivostest/img.jpg');

INSERT INTO alunosPsg() 
VALUES
(null, '11111111111', 'Aluno 1', 'RG1', '1111111111', 'aluno1@example.com', 'Mãe 1', 'Pai 1', 'Rua 1', 'Bairro 1', '1', 'Complemento 1', '12345678', '32/2023'),
(null, '22222222222', 'Aluno 2', 'RG2', '2222222222', 'aluno2@example.com', 'Mãe 2', 'Pai 2', 'Rua 2', 'Bairro 2', '2', 'Complemento 2', '12345679', '82/2024'),
(null, '33333333333', 'Aluno 3', 'RG3', '3333333333', 'aluno3@example.com', 'Mãe 3', 'Pai 3', 'Rua 3', 'Bairro 3', '3', 'Complemento 3', '12345680', '10/2022'),
(null, '44444444444', 'Aluno 4', 'RG4', '4444444444', 'aluno4@example.com', 'Mãe 4', 'Pai 4', 'Rua 4', 'Bairro 4', '4', 'Complemento 4', '12345681', '40/2024'),
(null, '55555555555', 'Aluno 5', 'RG5', '5555555555', 'aluno5@example.com', 'Mãe 5', 'Pai 5', 'Rua 5', 'Bairro 5', '5', 'Complemento 5', '12345682', '32/2023'),
(null, '66666666666', 'Aluno 6', 'RG6', '6666666666', 'aluno6@example.com', 'Mãe 6', 'Pai 6', 'Rua 6', 'Bairro 6', '6', 'Complemento 6', '12345683', '82/2024'),
(null, '77777777777', 'Aluno 7', 'RG7', '7777777777', 'aluno7@example.com', 'Mãe 7', 'Pai 7', 'Rua 7', 'Bairro 7', '7', 'Complemento 7', '12345684', '10/2022'),
(null, '88888888888', 'Aluno 8', 'RG8', '8888888888', 'aluno8@example.com', 'Mãe 8', 'Pai 8', 'Rua 8', 'Bairro 8', '8', 'Complemento 8', '12345685', '40/2024'),
(null, '99999999999', 'Aluno 9', 'RG9', '9999999999', 'aluno9@example.com', 'Mãe 9', 'Pai 9', 'Rua 9', 'Bairro 9', '9', 'Complemento 9', '12345686', '32/2023'),
(null, '10101010101', 'Aluno 10', 'RG10', '1010101010', 'aluno10@example.com', 'Mãe 10', 'Pai 10', 'Rua 10', 'Bairro 10', '10', 'Complemento 10', '12345687', '82/2024'),
(null, '11111111112', 'Aluno 11', 'RG11', '1111111112', 'aluno11@example.com', 'Mãe 11', 'Pai 11', 'Rua 11', 'Bairro 11', '11', 'Complemento 11', '12345688', '10/2022'),
(null, '12121212121', 'Aluno 12', 'RG12', '1212121212', 'aluno12@example.com', 'Mãe 12', 'Pai 12', 'Rua 12', 'Bairro 12', '12', 'Complemento 12', '12345689', '40/2024'),
(null, '13131313131', 'Aluno 13', 'RG13', '1313131313', 'aluno13@example.com', 'Mãe 13', 'Pai 13', 'Rua 13', 'Bairro 13', '13', 'Complemento 13', '12345690', '32/2023'),
(null, '14141414141', 'Aluno 14', 'RG14', '1414141414', 'aluno14@example.com', 'Mãe 14', 'Pai 14', 'Rua 14', 'Bairro 14', '14', 'Complemento 14', '12345691', '82/2024'),
(null, '15151515151', 'Aluno 15', 'RG15', '1515151515', 'aluno15@example.com', 'Mãe 15', 'Pai 15', 'Rua 15', 'Bairro 15', '15', 'Complemento 15', '12345692', '10/2022'),
(null, '16161616161', 'Aluno 16', 'RG16', '1616161616', 'aluno16@example.com', 'Mãe 16', 'Pai 16', 'Rua 16', 'Bairro 16', '16', 'Complemento 16', '12345693', '40/2024'),
(null, '17171717171', 'Aluno 17', 'RG17', '1717171717', 'aluno17@example.com', 'Mãe 17', 'Pai 17', 'Rua 17', 'Bairro 17', '17', 'Complemento 17', '12345694', '32/2023'),
(null, '18181818181', 'Aluno 18', 'RG18', '1818181818', 'aluno18@example.com', 'Mãe 18', 'Pai 18', 'Rua 18', 'Bairro 18', '18', 'Complemento 18', '12345695', '82/2024'),
(null, '19191919191', 'Aluno 19', 'RG19', '1919191919', 'aluno19@example.com', 'Mãe 19', 'Pai 19', 'Rua 19', 'Bairro 19', '19', 'Complemento 19', '12345696', '10/2022'),
(null, '20202020202', 'Aluno 20', 'RG20', '2020202020', 'aluno20@example.com', 'Mãe 20', 'Pai 20', 'Rua 20', 'Bairro 20', '20', 'Complemento 20', '12345697', '40/2024');



select alunosPsg.*, editais.* from alunosPsg inner join editais on alunosPsg.codigoEdital = editais.codigo;

select * from alunosPsg where alunosPsg.codigoEdital = '32/2023';
select * from alunosPsg where alunosPsg.codigoEdital = '40/2024';
select * from alunosPsg where alunosPsg.codigoEdital = '10/2022';
select * from alunosPsg where alunosPsg.codigoEdital = '82/2024';

select * from alunosPsg;
select * from editais;
