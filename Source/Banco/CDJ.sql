create database cdj DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use cdj;
create table adm(
idadm BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
email varchar(100) unique not null,
senha varchar(20) not null,
nome varchar(100) not null);

create table horarios(
idhr BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
hora varchar(20) not null,
tipo enum('cdj','cp') not null default 'cdj',
dia varchar(20) not null);

create table jogo(
idjg BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
descricao varchar(100) not null,
nome varchar(100) not null);

create table noticia(
idnot bigint unique not null auto_increment primary key,
titulo varchar(255) not null,
descricao varchar(255) not null,
conteudo varchar(255) null);

create table img (
idimg BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
url varchar(255) unique not null,
idjg bigint not null,
foreign key (idjg) references jogo(idjg));

create table links (
idlink BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
url varchar(255) unique not null,
titulo varchar(100) unique not null);

create table imgnot (
idimgnot BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
idimg bigint not null,
idnot bigint not null,
foreign key (idimg) references img(idimg),
foreign key (idnot) references noticia(idnot));

create table notlink (
idnotlink BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
idlink bigint not null,
idnot bigint not null,
foreign key (idlink) references links(idlink),
foreign key (idnot) references noticia(idnot));

create table jglink (
idjglink BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
idlink bigint not null,
idjg bigint not null,
foreign key (idlink) references links(idlink),
foreign key (idjg) references jogo(idjg));

create table jgnot (
idjgnot BIGINT UNIQUE NOT NULL AUTO_INCREMENT primary key,
idjg bigint not null,
idnot bigint not null,
foreign key (idjg) references jogo(idjg),
foreign key (idnot) references noticia(idnot));