/*isert para tipo de usuario*/
insert into tipo_usuario(idtipo_usuario, Descripcion)
values (2, 'Cordinador');

/* INSERT para Usuarios*/
insert into Usuarios (User, password, tipo_usuario_idtipo_usuario, correo, estatus, nombre, apellido)
values ('Rodrigo','password', 3, 'rodrigo@school.com', 1, 'nombre', 'apellido');

/*INSERT para Alumnos*/
insert into Alumnos(nombre, apellido, correo, user, password, estado)
values ('Rafael', 'Oleo', 'oleo_r@gmail.com', 'rafael', 'password', 1);

/*INSERT para Materias*/
insert into Materias (idMaterias, nombre_materia)
values (1,'Matematicas');


/*INSERT para grupos*/
insert into Grupos (Descripcion, capacidad)
values ('A1',30);

/*INSERT para Grupos_has_Alumnos*/
insert into Grupos_has_Alumnos (Grupos_idGrupos, Alumnos_idAlumnos)
values (1,1); 

/*INSERT para Grupos_has_Materias*/
insert into Grupos_has_Materias (Grupos_idGrupos, Materias_idMaterias)
values (1,1);

/*INSERT para Materias_has_Alumnos*/
insert into Usuarios_has_Materias (Usuarios_idUsuarios, Materias_idMaterias)
values (2,1);
/* INSERT para Materias_has_Alumnos*/
insert into Materias_has_Alumnos (Materias_idMaterias, Alumnos_idAlumnos, calificacion)
values (1,1, 80);
