--CREATE DATABASE to-do-list

CREATE TABLE tarefa(

	id SERIAL PRIMARY KEY,
	descricao varchar(25) NOT NULL,
	prazo date NOT NULL
	
);