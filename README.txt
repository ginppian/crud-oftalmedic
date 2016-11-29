1.- Creación de la DB:

create database oftalmedic2;
create table usuario (id_usuario int not null auto_increment primary key, nombre varchar(50), apellido_paterno varchar(35), apellido_materno varchar(35), telefono varchar(15), correo varchar(30));
create table producto (id_producto int not null auto_increment primary key, marca varchar(30), modelo varchar(30), color varchar(10), precio int(6), cantidad int(3), imagen varchar(150));
create table compra (id_usuario int not null, id_producto int not null, fecha date not null, FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario), FOREIGN KEY (id_producto) REFERENCES producto(id_producto), primary key (id_usuario, id_producto, fecha));
create table admin (id_admin int not null auto_increment primary key, nombre varchar(30), password varchar(50));

2.-
