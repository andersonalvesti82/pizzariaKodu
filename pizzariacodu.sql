CREATE DATABASE pizzariaCodu
	DEFAULT CHARSET = utf8
    DEFAULT COLLATE = utf8_general_ci;
    
USE pizzariacodu;
SHOW TABLES;
describe pizzariacodu;
CREATE TABLE dadosCliente(
nome VARCHAR(100) NOT NULL,
idcpf INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
email VARCHAR(100) NOT NULL,
telefone VARCHAR(15) NOT NULL,
sexo ENUM ("Masculino","Feminino","Outro")NOT NULL DEFAULT "Outro",
data_nasc DATE NOT NULL,
numero VARCHAR(20) NOT NULL,
cep VARCHAR(8) NOT NULL,
bairro VARCHAR(100) NOT NULL,
cidade VARCHAR(100) NOT NULL,
estado VARCHAR(2) NOT NULL
);

describe dadoscliente;
    
SELECT*FROM dadoscliente;
    
