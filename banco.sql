drop database if exists SNRC;
create database if not exists SNRC;

	use SNRC;

	CREATE TABLE usuario(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(200) NOT NULL,
			email VARCHAR(200) NOT NULL,
			endereco VARCHAR(200) NOT NULL,
			cidade VARCHAR(20) NOT NULL,
			estado VARCHAR(200) NOT NULL,
			senha VARCHAR(200) NOT NULL
	);


	CREATE TABLE escolas(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(200) NOT NULL,
			endereco VARCHAR(200) NOT NULL,
			cidade VARCHAR(200) NOT NULL,		
			cep VARCHAR(200) NOT NULL,		
			telefone VARCHAR(200) NOT NULL,		
			mapa VARCHAR(5000) NOT NULL
	);

	CREATE TABLE dados_enem(
			ano INT(4) NOT NULL PRIMARY KEY,
			mat VARCHAR(55) NOT NULL,
			hist VARCHAR(40) NOT NULL,
			
			id_escolas INT NOT NULL,
		    FOREIGN KEY(id_escolas) REFERENCES escolas(id)
			
	);
	CREATE TABLE comments(
			id INT AUTO_INCREMENT PRIMARY KEY,
			comment VARCHAR(400) NOT NULL,
			id_usuario INT NOT NULL,
			nome VARCHAR(50) not null,
			FOREIGN KEY(id_usuario) REFERENCES usuario(id),
			id_escolas INT not null,
			FOREIGN KEY(id_escolas) REFERENCES escolas(id)

	);