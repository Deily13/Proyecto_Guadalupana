SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `usuarios`  (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo_usuario_id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `n_id` int(11) NOT NULL,
  `correo` varchar(11) NOT NULL,
  `cell` int(11) NOT NULL,
  `clave` int(11) NOT NULL,
  `direccion` int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `tipos_usuario` (
  tipo_usuario_id int(11) NOT NULL PRIMARY KEY,
  tipo_usuario varchar(14) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `acciones_administrador` (
  accion_admin_id int(50) NOT NULL PRIMARY KEY,
  agregar_producto varchar(50) NOT NULL,
  eliminar varchar(50) NOT NULL,
  editar varchar(6) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `acciones_usuario` (
  accion_user_id int(11) NOT NULL,
  pedir int(11) NOT NULL,
  pagar int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `pedidos` (
  pedido_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  producto_id int(11) NOT NULL,
  usuario_id int(11) NOT NULL,
  producto int(11) NOT NULL,
  usuario int(11) NOT NULL,
  direccion int(11) NOT NULL,
  cantidad int(11) NOT NULL,
  momento int(11) NOT NULL,
  total int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `momento` (
  fecha int(11) NOT NULL,
  hora int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `productos` (
  producto_id int(11) NOT NULL PRIMARY KEY,
  producto int(11) NOT NULL,
  precio int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 


CREATE TABLE `gelateria` (
  producto_id int(11) NOT NULL PRIMARY KEY,
  nombre int(11) NOT NULL,
  sabor int(11) NOT NULL,
  precio int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `comidas_rapidas` (
  producto_id int(11) NOT NULL PRIMARY KEY, 
  nombre int(11) NOT NULL,
  precio int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `bebidas_alcoholicas` (
  producto_id int(11) NOT NULL PRIMARY KEY,
  nombre int(11) NOT NULL,
  tipo_bebida int(11) NOT NULL,
  sabor int(11) NOT NULL,
  volumen int(11) NOT NULL,
  precio int(11) NOT NULL 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





