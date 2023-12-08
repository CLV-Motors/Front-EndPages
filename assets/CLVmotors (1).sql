CREATE DATABASE CLVmotors;

CREATE TABLE usuarios(
    `CPF` int(11) PRIMARY KEY,
    `nome` varchar(50) DEFAULT NUll,
    `email` varchar(75) DEFAULT NULL,
  	`senha` varchar(15) DEFAULT NULL,
  	`DataNasc` date DEFAULT NULL,
);

insert into usuarios(CPF, nome, email, senha, DataNasc) values (65436590867,"Leonardo Gomes Amad","leoamad@gmail.com","12345678","03/11/2006");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (23089472098,"Caua Dellon Santos Rezemail","cauamdellon@gmail.com","leozinho123","21/07/2006");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (45798324789,"Vinicius Melesque dos Santos","vinimelesque@gmail.com","melescada321","01/06/2006");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (32848954029,"Elaine Gomes Amad","gomeselaine@gmail.com","senha123","10/11/1989");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (32784912904,"Carimbo dos Santos Pereira","carimbosantos@gmail.com","senhasecreta","27/08/2004");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (12345678901, "Maria Silva", "marisilva@gmail.com", "minhasenha", "15/05/1990");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (98765432109, "Joao Oliveira", "joaooliv@gmail.com", "outrasenha456", "20/12/1985");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (87654321098, "Ana Souza", "anasouza@gmail.com", "Senha@1234", "10/08/2000");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (23456789012, "Pedro Rocha", "rochapedro@gmail.com", "SenhaEspecial789", "25/03/1988");
insert into usuarios(CPF, nome, email, senha, DataNasc) values (34567890123, "Carla Oliveira", "carlaoliv@gmail.com", "abc123xyz", "02/09/1995");


CREATE TABLE carros(
	  `placa` varchar(8) PRIMARY KEY,
    `marca` varchar(15) DEFAULT NULL,
    `modelo` varchar(15) DEFAULT NULL,
    `versao` varchar(50) DEFAULT NULL,
    `cor` varchar(15) DEFAULT NULL,
    `ano` int(4) DEFAULT NULL,
    `comb` char(1) DEFAULT NULL,
    `cat` varchar(15) DEFAULT NULL,
    `opcionais` varchar(15) DEFAULT NULL,
    `preco` float(15) DEFAULT NULL,
    `quilometragem` varchar(10) DEFAULT NULL,
    `descricao` varchar(150) DEFAULT NULL
);

insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("CFV9835","Chevrolet","Onix","Onix Premier 1.0 Turbo","Vermelho",2022,"Flex","Sedan","Todos",99990.00,22000,"Onix completo");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("XYZ1234", "Chevrolet", "Onix", "Onix Ltz 1.0 Turbo", "Vermelho", 2022, "Flex", "Sedan", "Todos", 99990.00, 22000, "Onix completo");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("ABC5678", "Ford", "Fiesta", "Fiesta Titanium 1.5", "Azul", 2019, "Flex", "Hatch", "Ar Condicionado, Direcao Eletrica", 84990.00, 18000, "Fiesta top de linha");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("JKL9101", "Volkswagen", "Gol", "Gol Comfortline 1.0", "Prata", 2021, "Flex", "Hatch", "Vidros Eletricos, Travas Eletricas", 79990.00, 25000, "Gol basico");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("MNO2345", "Renault", "Kwid", "Kwid Life 1.0", "Branco", 2022, "Gasolina", "Compacto", "Nenhum", 35990.00, 15000, "Kwid basico");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("PQR6789", "Toyota", "Corolla", "Corolla XEi 2.0", "Preto", 2022, "Flex", "Sedan", "Cambio Automatico, Couro", 124990.00, 20000, "Corolla top de linha");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("STU1234", "Honda", "Civic", "Civic Touring 2.0", "Cinza", 2021, "Flex", "Sedan", "Teto Solar, GPS, Couro", 139990.00, 18000, "Civic completo");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("VWX5678", "Hyundai", "HB20", "HB20 Diamond 1.0 Turbo", "Azul", 2018, "Flex", "Hatch", "Ar Condicionado, Direcao Hidraulica", 84990.00, 20000, "HB20 basico");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("YZA9012", "Nissan", "March", "March SV 1.6", "Prata", 2019, "Flex", "Hatch", "Vidros Eletricos, Travas Eletricas", 55990.00, 12000, "March seminovo");
insert into carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) values ("BCD3456", "Fiat", "Uno", "Uno Attractive 1.0", "Amarelo", 2020, "Flex", "Hatch", "Nenhum", 39990.00, 18000, "Uno basico para cidade");

