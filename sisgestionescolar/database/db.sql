CREATE TABLE usuarios (
    id_usuario INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR (255) NOT NULL,
    cargo VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL UNIQUE KEY,
    password TEXT NOT NULL,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR (11)
)ENGINE=InnoDB;

INSERT INTO sisgestionescolar.usuarios
(nombres, cargo, email, password, fyh_creacion, fyh_actualizacion, estado)
VALUES('Yeffersson Valencia', 'ADMINISTRADOR', 'yvalencia@liceomoderno.edu.co', '12345678', '2024-01-22 15:29:11', NULL, '1');

SELECT * FROM sisgestionescolar.usuarios u 