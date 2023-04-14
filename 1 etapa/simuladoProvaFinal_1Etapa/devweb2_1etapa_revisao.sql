create database devweb2_1etapa_revisao;

use devweb2_1etapa_revisao;

create table motores
(
	id int unsigned not null auto_increment,
	modelo varchar(255) not null,
	numero_serie varchar(255) not null,
	potencia int not null,
	primary key(id)
);
