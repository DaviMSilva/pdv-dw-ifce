
create database lojaMaterialConstrucao;
use lojaMaterialConstrucao;

CREATE TABLE fornecedor (
  id int NOT NULL auto_increment primary key,
  nome varchar(300) NOT NULL,
  cnpj varchar(20) NOT NULL,
  razao_social varchar(200) NOT NULL,
  email varchar(300) NOT NULL,
  rua varchar(300) NOT NULL,
  numero varchar(10) NOT NULL,
  estado varchar(2) NOT NULL,
  cidade varchar(200) NOT NULL,
  bairro varchar(200) NOT NULL,
  complemento varchar(200),
  cep varchar(20) NOT NULL,
  telefone varchar(20) NOT NULL
)ENGINE = innodb;

CREATE TABLE produto(
  id int NOT NULL auto_increment primary key,
  nome varchar(300) NOT NULL,
  unidade_medida varchar(50) NOT NULL,
  quantidade varchar(20) NOT NULL,
  descricao varchar(300),
  tipo_produto varchar(50) NOT NULL,
  preco_compra varchar(20) NOT NULL,
  id_fornecedor int NOT NULL,
  CONSTRAINT id_fornecedor FOREIGN KEY(id_fornecedor) references 
  fornecedor(id);
)ENGINE = innodb;
 