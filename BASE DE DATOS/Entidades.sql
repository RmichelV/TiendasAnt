--------------------------- 1   ----------
-- Crear la tabla 'plataformas'
CREATE TABLE plataformas (
    id_plataforma INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20)
);

-- Insertar los datos en la tabla 'plataformas'
INSERT INTO plataformas (id_plataforma, nombre) VALUES
(1, 'Pc'),
(2, 'PlayStation 5'),
(3, 'PlayStation 4'),
(4, 'Xbox One'),
(5, 'Xbox Series XS'),
(6, 'Nintendo Switch');

------------------------------------ 2 -------------------------------------

-- Crear la tabla 'generos'
CREATE TABLE generos (
    id_genero INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

-- Insertar los datos en la tabla 'generos'
INSERT INTO generos (id_genero, nombre) VALUES
(1, 'Acción'),
(2, 'Aventura'),
(3, 'Rol (RPG)'),
(4, 'Estrategia'),
(5, 'Simulación'),
(6, 'Deportes'),
(7, 'Carreras'),
(8, 'Lucha'),
(9, 'Plataforma'),
(10, 'Terror'),
(11, 'Mundo abierto'),
(12, 'Sandbox'),
(13, 'Supervivencia'),
(14, 'Puzzle'),
(15, 'Musicales'),
(16, 'Shooter'),
(17, 'MMO (Multijugador Masivo Online)'),
(18, 'Educacionales'),
(19, 'Novela visual'),
(20, 'Indie');

---------------------------- 3 --------------------------------

-- Crear la tabla 'metodo_de_pagos'
CREATE TABLE metodo_de_pagos (
    id_metodop INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20)
);

-- Insertar los datos en la tabla 'metodo_de_pagos'
INSERT INTO metodo_de_pagos (id_metodop, nombre) VALUES
(1, 'Visa'),
(2, 'MasterCard'),
(3, 'Credito'),
(4, 'Efectivo');

----------------------------- 4 ---------------------------------

-- Crear la tabla 'estados'
CREATE TABLE estados (
    id_estado INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20)
);

-------------------------- 5 ----------------------------

-- Crear la tabla 'rols'
CREATE TABLE rols (
    id_rol INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

-- Insertar los datos en la tabla 'rols'
INSERT INTO rols (id_rol, nombre) VALUES
(1, 'usuario Administrador'),
(2, 'usuario Empresa'),
(3, 'usuario Comun');

---------------------------- 6 ---------------------------------
-- Crear la tabla 'usuarios'
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    last_name VARCHAR(50),
    birthday DATE,
    email VARCHAR(50),
    password VARCHAR(50),
    id_rol INT,
    FOREIGN KEY (id_rol) REFERENCES rols(id_rol) ON DELETE CASCADE
);

----------------------------- 7 -------------------------------

CREATE TABLE tiendas (
    id_tienda INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    direccion VARCHAR(200),
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
);

---------------------- 8 -----------------------------------------

CREATE TABLE carritos (
    id_carrito INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE RESTRICT
);

-------------------9------------------------------------------
-- Crear la tabla 'juegos'
CREATE TABLE juegos (
    id_juego INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    descripcion VARCHAR(500),
    cantidad_de_jugadores VARCHAR(255), 
    precio DECIMAL(8,2),
    stock INT,
    imagen VARCHAR(200),
    id_tienda INT,
    FOREIGN KEY (id_tienda) REFERENCES tiendas(id_tienda) ON DELETE CASCADE
);

------------------------------ 10 ------------------------------
CREATE TABLE juegos_plataformas (
    id_juego INT,
    id_plataforma INT,
    FOREIGN KEY (id_juego) REFERENCES juegos(id_juego) ON DELETE CASCADE,
    FOREIGN KEY (id_plataforma) REFERENCES plataformas(id_plataforma) ON DELETE CASCADE
);

----------------------------- 11 ----------------------------
CREATE TABLE juegos_generos (
    id_juego INT,
    id_genero INT,
    FOREIGN KEY (id_juego) REFERENCES juegos(id_juego) ON DELETE CASCADE,
    FOREIGN KEY (id_genero) REFERENCES generos(id_genero) ON DELETE CASCADE
);

----------------------------- 12 ---------------------------------
CREATE TABLE juegos_carritos (
    id_carrito INT,
    id_juego INT,
    FOREIGN KEY (id_juego) REFERENCES juegos(id_juego) ON DELETE CASCADE,
    FOREIGN KEY (id_carrito) REFERENCES carritos(id_carrito) ON DELETE CASCADE
);
---------------------------13-----------------------------
