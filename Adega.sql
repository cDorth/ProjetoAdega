create database adegaa1;
use adegaa1; 

create table cliente(
idCliente int primary key  not null auto_increment,
nome varchar(80) not null,
dt_nasc date not null,
logradouro varchar(80) not null,
bairro varchar(50) not null,
cidade varchar(50) not null,
estado varchar(2) not null,
cep char(8) not null,
celular varchar(14) not null,
rg varchar(15) not null,
cpf varchar(14) not null
);
create table produto(
idProduto int primary key not null,
nome varchar(100) not null,
valor decimal(3,2) not null,
quantidade int not null,
vencimento date not null,
descricao varchar(100) 
);

create table venda(
idVenda int  primary key  not null auto_increment,
produto varchar(100) not null,
valor decimal(6,2) not null
);

create table notaFiscal(
idNota int  primary key  not null auto_increment,
quantidade int not null
);

alter table venda add idProduto int not null;

alter table venda add constraint fk_vendaProduto
foreign key (idProduto) references produto(idProduto);

alter table venda add idCliente int not null;

alter table venda add constraint fk_vendaCliente
foreign key (idCliente) references cliente(idCliente);

alter table notaFiscal add idVenda int not null;

alter table notaFiscal add constraint fk_notaVenda
foreign key (idVenda) references venda(idVenda);

alter table notaFiscal add idProduto int not null;

alter table notaFiscal add constraint fk_notaProduto
foreign key (idProduto) references produto(idProduto);

insert into produto values

(1,"Heineken",10.99,100,'2030/12/22',null),
(2,"Vinho Barros 1990",223.50,100,'2030/12/22',null),
(3,"Champagne Dom Péregnon 2003",500.99,100,'2036/12/10',null),
(4,"whisky jack daniels",130.99,100,'2025/12/22',null),
(5,"Corote canelinha",13.50,100,'2024/10/15',null);

select * from produto;

select * from cliente;