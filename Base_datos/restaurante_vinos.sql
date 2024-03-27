CREATE TABLE `tipos_usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `descripcion` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo_usuario_id` INT(11) NOT NULL DEFAULT 2,
  `nombre` VARCHAR(255) NOT NULL,
  `apellido` VARCHAR(255) NOT NULL,
  `tipo_id` INT(11) NOT NULL,
  `n_id` INT(11) NOT NULL,
  `correo` VARCHAR(255) NOT NULL,
  `cell` VARCHAR(20) NOT NULL,
  `direccion` VARCHAR(255) NOT NULL,
  FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipos_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `acciones_administrador` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `agregarProducto` VARCHAR(50) NOT NULL,
  `eliminarProducto` VARCHAR(50) NOT NULL,
  `editarProducto` VARCHAR(10) NOT NULL,
  `tipo_usuario_id` INT(11) NOT NULL,
  FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipos_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `acciones_usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `pedirProducto` INT(11) NOT NULL,
  `pagarPedido` INT(11) NOT NULL,
  `tipo_usuario_id` INT(11) NOT NULL,
  FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipos_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `productos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `precio` DECIMAL(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `gelateria` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `sabor` VARCHAR(255) NOT NULL,
  `tipo` VARCHAR(50) NOT NULL,
  FOREIGN KEY (`id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `comidas_rapidas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `tipo` VARCHAR(50) NOT NULL,
  FOREIGN KEY (`id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `bebidas_alcoholicas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `tipo` VARCHAR(50) NOT NULL,
  `sabor` VARCHAR(255) NOT NULL,
  `volumen` INT(11) NOT NULL,
  FOREIGN KEY (`id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pedidos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fecha_hora` DATETIME NOT NULL,
  `usuario_id` INT(11) NOT NULL,
  `total` DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `detalles_pedidos` (
  `pedido_id` INT(11) NOT NULL,
  `producto_id` INT(11) NOT NULL,
  `cantidad` INT(11) NOT NULL,
  PRIMARY KEY (`pedido_id`, `producto_id`),
  FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;