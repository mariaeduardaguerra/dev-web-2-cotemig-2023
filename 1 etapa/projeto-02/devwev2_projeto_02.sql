create table operacoes (
    id int unsigned not null auto_increment,
    numero1 int,
    operador varchar(1),
    numero2 int,
    resultado int,
    primary key(id)
);