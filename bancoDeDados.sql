create database bancoDeDados;

use bancoDeDados;

create table usuario(
    cod_usuario int not null primary key auto_increment,
    nome varchar(20) null,
    sobrenome varchar(30) null,
    email varchar(70) null,
    cpf varchar(15) null,
    sexo varchar(15) null,
    usuario varchar (30) null,
    senha varchar(40)   null
);

