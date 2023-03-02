--CREATE DATABASE to-do-list

CREATE TABLE tarefa(

	id SERIAL PRIMARY KEY,
	descricao varchar(25) NOT NULL,
	prazo date NOT NULL,
    id_categoria int NOT NULL
	
);

CREATE TABLE categoria(

    id SERIAL PRIMARY KEY,
    descricao varchar(25) NOT NULL,
    id_usuario int NOT NULL

);

CREATE TABLE usuario(

    id SERIAL PRIMARY KEY,
    nome varchar(50) UNIQUE NOT NULL,
    senha varchar(50) NOT NULL

);

ALTER TABLE tarefa ADD CONSTRAINT fk_tarefa_categoria FOREIGN KEY (id_categoria) REFERENCES categoria (id) ON DELETE CASCADE;

ALTER TABLE categoria ADD CONSTRAINT fk_categoria_usuario FOREIGN KEY (id_usuario) REFERENCES usuario (id) ON DELETE CASCADE;