/*
*Avila Hernandez Kevin
*Ocampo Giles Karen Lizeth
*Pérez Ramos Diana Areli
*Ríos Contreras Israel
*/

create database TiroBlanco;
use TiroBlanco;

CREATE TABLE IF NOT EXISTS TiroBlanco.Usuarios( 
id int primary key auto_increment not null,
correo varchar(25) not null,
usuario varchar(25) not null,
contra varchar(10) not null
 ) ENGINE = InnoDB;
 
 CREATE TABLE IF NOT EXISTS TiroBlanco.Puntuacion( 
idP int primary key auto_increment not null,
id int not null,
usuario varchar(25) not null,
intentos int not null,
puntos int not null,
 FOREIGN KEY(id) REFERENCES usuarios(id) on delete cascade on update cascade
 ) ENGINE = InnoDB;
 
 insert into Usuarios (correo,usuario,contra)values('karen@gmail.com','karen','123');