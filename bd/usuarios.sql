//En caso de no existir la base de datos(En SQL)

create database php_mysql_crud;

//Para crear tabla (En SQL)

create table usuarios(
				id int auto_increment,
				primerNombre varchar(50),
				segundoNombre varchar(50),
				primerApellido varchar(50),
				segundoApellido varchar(50),
				dni int(22),
				telefono int(22),
				usuario varchar(50),
				password text(50),
				segundoApellido varchar(50),
				primary key(id)
);