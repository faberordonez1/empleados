create table areas(
    id int(11) auto_increment primary key,
    nombre varchar(255) not null
)

 create table empleados(
     id int(11) auto_increment primary key,
     nombre varchar(255) not null,
     email varchar(255) not null,
     sexo char(1) not null,
     area_id int(11) not null,
     boletin int(11) not null,
     descripcion text not null,
     foreign key (area_id) references areas(id)
)

create table roles (
    id int(11) auto_increment primary key,
    nombre varchar(255) not null
)

create table empleado_rol(
    empleado_id int(11) not null,
    rol_id int(11) not null,
    foreign key (empleado_id) references empleados (id),
    foreign key (rol_id) references roles(id)
)