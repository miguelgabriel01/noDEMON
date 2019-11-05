drop database if exists IBAGENS;
create database if not exists IBAGENS;

	use IBAGENS;
	
	CREATE TABLE imagens(
		url VARCHAR(300) NOT NULL,
		extensao VARCHAR(5) NOT NULL,
		local VARCHAR(19) NOT NULL,
		ano INT NOT NULL,
	);
