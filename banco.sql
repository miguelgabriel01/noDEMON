drop database if exists SNRC;
create database if not exists SNRC;

	use SNRC;

	CREATE TABLE usuario(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(20) NOT NULL,
			email VARCHAR(30) NOT NULL,
			endereco VARCHAR(50) NOT NULL,
			cidade VARCHAR(30) NOT NULL,
			estado VARCHAR(35) NOT NULL,
			senha VARCHAR(30) NOT NULL
	);


	CREATE TABLE escolas(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(50) NOT NULL,
			endereco VARCHAR(50) NOT NULL,
			cidade VARCHAR(30) NOT NULL,
			cep VARCHAR(8) NOT NULL,
			telefone VARCHAR(11) NOT NULL,
			mapa VARCHAR(255) NOT NULL
	);

	CREATE TABLE notas(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nota_15 INT(4) NOT NULL,
			nota_16 INT(4) NOT NULL,
			nota_17 INT(4) NOT NULL,
			nota_18 INT(4) NOT NULL
	);
	CREATE TABLE comments(
			id INT AUTO_INCREMENT PRIMARY KEY,
			comment VARCHAR(140) NOT NULL,
			id_usuario INT NOT NULL,
			nome VARCHAR(20) not null,
			FOREIGN KEY(id_usuario) REFERENCES usuario(id),
			id_escolas INT not null,
			FOREIGN KEY(id_escolas) REFERENCES escolas(id)

	);
