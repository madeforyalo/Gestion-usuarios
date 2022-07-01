-- crear la base y pornerla en uso
create database algoritmo;
use algoritmo;

drop table alumnos;
-- tabla de alumnos
create table alumnos(
id_alum int primary key,
nombre varchar(50),
apellido varchar(30),
dni int,
fechaNac date,
direccion varchar(50),
localidad varchar(50),
telefono varchar(40));

-- agregamos un registro
insert into alumnos (id_alum, nombre, apellido, dni, fechaNac, direccion, localidad, telefono)
values(1, "Gonzalo", "Rojas", 35329399, "1990/08/09", "el cardenal 1078", "san jose", "1540767894");

-- tabla materias
create table materias(
id_materia int primary key,
nombre varchar(50));

-- agregamos materias
insert into materias (id_materia,nombre)
values
(1, "sistemas"),
(2, "lengua"),
(3, "programacion");
drop table notas;
-- crear tabla de notas
create table notas(
alumno int,
materia int,
notas int,
foreign key(alumno) references alumnos(id_alum),
foreign key(materia) references materias(id_materia));

-- agregamos notas
insert into notas (alumno, materia, notas)
values (1, 1, 10),
(1, 2, 8),
(1, 3, 9);

-- seleccionar la tabla alumnos
select * from alumnos;

-- seleccionar tabla notas con el nombre y apellido de las personas y las materias que intervienen
select alumnos.nombre, alumnos.apellido, materias.nombre, notas from alumnos
inner join notas on alumnos.id_alum=notas.alumno
inner join materias on materias.id_materia=notas.materia;


select alumnos.nombre, alumnos.apellido, materias.nombre, notas from materias
inner join notas on materias.id_materia=notas.materia
inner join alumnos on alumnos.id_alum=notas.alumno;
