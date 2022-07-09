## script for database:
````bash
create table categorias (
-> idcategoria int(6) auto_increment primary key,
-> nome varchar(50) not null); 


create table produtos (
-> idproduto int(6) auto_increment primary key, 
-> nome varchar(50) not null,
-> descricao varchar(200) not null, 
-> quantidade int(5) not null, 
-> idcategoria int(6) not null,
-> constraint fk_idcategoria foreign key (idcategoria) references categorias(idcategoria)); 

```