create database sisaluno;

use sisaluno;

create table aluno(
 id smallint primary key auto_increment,
  nome varchar(100),
  idade  smallint,
  datanascimento date,
  endereco varchar(100),
   estatus   bool,
   matricula varchar(11)
);
 
create table professor(
id smallint primary key auto_increment,
  nome varchar(100),
  cpf varchar(11),
  idade  smallint,
  datanascimento  date,
  endereco varchar(100),
   estatus   bool
   );