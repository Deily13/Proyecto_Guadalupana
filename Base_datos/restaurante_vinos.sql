-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8080
-- Tiempo de generación: 09-03-2024 a las 02:07:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante_vinos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones_administrador`
--

CREATE TABLE `acciones_administrador` (
  `Agregar_producto` varchar(50) NOT NULL,
  `Eliminar` varchar(50) NOT NULL,
  `Editar` varchar(50) NOT NULL,
  `Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones_usuario`
--

CREATE TABLE `acciones_usuario` (
  `Pedir` int(11) NOT NULL,
  `Pagar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas_alcoholicas`
--

CREATE TABLE `bebidas_alcoholicas` (
  `Id_producto` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Tipo_bebida` int(11) NOT NULL,
  `Sabor` int(11) NOT NULL,
  `Volumen` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas_rapidas`
--

CREATE TABLE `comidas_rapidas` (
  `Id_producto` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(20) NOT NULL,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `lname` text NOT NULL,
  `slname` text NOT NULL,
  `idtype` text NOT NULL,
  `idnum` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `emailconf` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` text NOT NULL,
  `fecha_reg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gelateria`
--

CREATE TABLE `gelateria` (
  `Id_producto` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Sabor` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `momento`
--

CREATE TABLE `momento` (
  `Fecha` int(11) NOT NULL,
  `Hora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_pedido` int(11) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Producto` int(11) NOT NULL,
  `Usuario` int(11) NOT NULL,
  `Direccion` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Momento` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `Producto` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `Id_tipo_usuario` int(11) NOT NULL,
  `Tipo_Usuario` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Id_tipo_usuario` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Correo` int(11) NOT NULL,
  `Tell` int(11) NOT NULL,
  `Clave` int(11) NOT NULL,
  `Direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas_alcoholicas`
--
ALTER TABLE `bebidas_alcoholicas`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `comidas_rapidas`
--
ALTER TABLE `comidas_rapidas`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gelateria`
--
ALTER TABLE `gelateria`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`Id_tipo_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
