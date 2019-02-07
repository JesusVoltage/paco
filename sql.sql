Create table autor(
    id int(100) primary key auto_increment,
    name varchar(200),
    password varchar(100),
    email varchar(200),
    enabled int(2)
);

create table imagen(
    id int(100) primary key auto_increment,
    id_autor int,
    name varchar(100),
    file varchar(200),
    text varchar(250),
    foreign key (id_autor) references autor(id)
);