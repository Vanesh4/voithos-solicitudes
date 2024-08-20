CREATE TABLE pastor (
    idpastor INT PRIMARY KEY,
    nombre VARCHAR(180) NOT NULL
);

CREATE TABLE comite (
    idcomite INT PRIMARY KEY,
    nombre VARCHAR(180) NOT NULL,
    lider int,
    secretario int,
    FOREIGN KEY (lider) REFERENCES pastor(idpastor),
    FOREIGN KEY (secretario) REFERENCES pastor(idpastor)
);

CREATE TABLE portafolio (
    idportafolio INT PRIMARY KEY,
    nombre VARCHAR(180) NOT NULL,
    descripcion VARCHAR(250),
    idcomite INT NOT NULL,
    estado bool,
    FOREIGN KEY (idcomite) REFERENCES comite(idcomite)
);  
CREATE TABLE solicitud (
    idsolicitud INT PRIMARY KEY,
    idusuario INT NOT NULL,
    idportafolio INT NOT NULL,
    fecha_solicitud DATE NOT NULL,
    estado VARCHAR(50) NOT NULL, -- "pendiente", "aceptada", "rechazada"
    FOREIGN KEY (idusuario) REFERENCES usuario(idusuario),
    FOREIGN KEY (idportafolio) REFERENCES portafolio(idportafolio)
);

INSERT INTO pastor (idpastor, nombre) VALUES 
(11111, 'Juan Comite 1 lider'), 
(22222, 'María Comite 2 secretario'), 
(33333, 'Carlos Hernández'),
(44444, 'Luisa Comite 2 lider'), 
(55555, 'Jorge Comite 2 secretario');

INSERT INTO comite (idcomite, nombre, lider, secretario) VALUES 
(1, 'LSC', 11111, 22222), 
(2, 'Musica', 44444, 55555);

INSERT INTO portafolio (idportafolio, nombre, descripcion, idcomite, estado) VALUES 
(1, 'Programa de Alfabetización', 'Educación básica para adultos', 1, TRUE), 
(2, 'Alborada', 'Oracion desde las 5am', 2, TRUE), 
(3, 'Vigilia', 'Cantos y Alabanza toda la noche', 2, FALSE);