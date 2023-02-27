create database mp3;
use mp3;

create table midia(
idMidia int primary key auto_increment,
nome varchar(250) not null,
link varchar(350) not null,
arquivo longblob not null
)Engine = InnoDB;

select * from midia;
