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
			senha VARCHAR(15) NOT NULL
	);


	CREATE TABLE escolas(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(50) NOT NULL,
			endereco VARCHAR(50) NOT NULL,
			cidade VARCHAR(30) NOT NULL,
			cep VARCHAR(20) NOT NULL,
			telefone VARCHAR(20) NOT NULL,
			mapa VARCHAR(5000) NOT NULL,
			lat float (20),
			lot float (20)
	);

	CREATE TABLE notas(
			id INT AUTO_INCREMENT PRIMARY KEY,
			nota_port INT NOT NULL,
			nota_mat INT NOT NULL,
			nota_red INT NOT NULL,
			nota_ch INT NOT NULL,
			nota_ce INT NOT NULL, 
			ano INT NOT NULL,
			nota_enem INT,
			id_escolas INT not null,
			FOREIGN KEY(id_escolas) REFERENCES escolas(id)

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
