-- Crear base de datos --
	CREATE DATABASE if NOT EXISTS DAW208_DBRest;
;
-- Crear del usuario --
	CREATE USER IF NOT EXISTS 'DAW208Rest'@'%' identified BY 'paso'; 
	
-- Uso de la base de datos. --
	USE DAW208_DBRest;

-- Crear tablas. --
    CREATE TABLE IF NOT EXISTS T02_Departamentos1(
        CodDepartamento char(3) PRIMARY KEY,
		DescDepartamento varchar(255) NOT null,
        FechaBaja varchar(10)
        )
		ENGINE=INNODB;  

-- Dar permisos al usuario --
	GRANT ALL PRIVILEGES ON DAW208_DBRest.* TO 'DAW208Rest'@'%'; 