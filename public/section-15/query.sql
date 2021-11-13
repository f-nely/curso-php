# Query do curso

# criando banco de dados
CREATE DATABASE curso_php;

# deletando banco de dados
DROP DATABASE curso_php;
USE cursophp;

# criando tabela
CREATE TABLE pessoas(
  nome VARCHAR(200),
  idade INT
);

CREATE TABLE carros(
  marca VARCHAR(100),
  descricao TEXT,
  ano_fabricacao INT
);

CREATE TABLE teste(
  teste DATE
);

# deletando tabela
DROP TABLE pessoas;

# adicionando coluna
ALTER TABLE carros
ADD motor INT;

# deletando coluna
ALTER TABLE carros
DROP ano_fabricacao;

# alterando coluna
ALTER TABLE carros
MODIFY COLUMN descricao VARCHAR(500);

# constraint not null
CREATE TABLE notnull(
  nome VARCHAR(100) NOT NULL,
  idade INT
);

INSERT INTO notnull (nome, idade) VALUES ("Matheus", 29);

SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES';

CREATE TABLE mailmarketing (
  email VARCHAR(255) NOT NULL UNIQUE,
  nome VARCHAR(255)
);

CREATE TABLE itens (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  descricao TEXT
);

INSERT INTO itens (nome, descricao) VALUES ("Abajur", "Abajur novo em excelente estado");

INSERT INTO itens (nome, descricao) VALUES ("Teclado", "Teclado da Microsoft");

INSERT INTO itens (nome, descricao) VALUES ("Mouse", "O mouse está usado e precisando de reparos");

INSERT INTO itens (nome, descricao) VALUES ("Microfone", "Microfone sem marca, muito barato");

INSERT INTO itens (nome, descricao) VALUES ("Abajur", "Abajur novo que veio da China");

INSERT INTO mailmarketing (email, nome) VALUES ("nelynely@example.com", "nelynely"),
("james@ex.com", "James");

# selecionando dados
SELECT * FROM itens;

SELECT nome FROM itens;

# utilizando o where
SELECT * FROM itens WHERE nome = "Abajur";

# utilizando condicionais
SELECT * FROM itens WHERE id > 3;

SELECT nome, id FROM itens WHERE id <= 3;

SELECT * FROM itens WHERE id = 2 OR id = 5;

SELECT * FROM itens WHERE nome = "Abajur" AND id = 7; 

# ordenando resultados
SELECT * FROM itens ORDER BY id DESC;

SELECT * FROM itens WHERE id > 2 ORDER BY nome;

# atualizando dados
UPDATE mailmarketing SET nome = "Steve" WHERE nome = "Matheus";

UPDATE mailmarketing SET email = "steve@test.com" WHERE email = "matheus@teste.com";

UPDATE itens SET nome = "Abajur Novo" WHERE id = 7;

# deletando dados
DELETE FROM mailmarketing WHERE nome = "nelynely";