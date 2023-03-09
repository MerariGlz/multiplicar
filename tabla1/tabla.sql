-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2023 a las 16:44:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_insertar` (IN `correoP` VARCHAR(100), IN `nombreP` VARCHAR(50), IN `idTablaP` INT, IN `calificacionP` DOUBLE(10,2), IN `incorrectasP` INT, IN `correctasP` INT, IN `tablaP` INT)   BEGIN
    INSERT INTO usuario (Nombre,Correo,idTabla) VALUES (nombreP,correoP,idTablaP);
    INSERT INTO tabla (Tabla,Correctas,Incorrectas,Calificacion) VALUES (tablaP,correctasP,incorrectasP,calificacionP);
    END$$

DELIMITER ;



CREATE TABLE `tabla` (
  `id` int(10) NOT NULL,
  `Tabla` int(10) NOT NULL,
  `Correctas` int(10) NOT NULL,
  `Incorrectas` int(10) NOT NULL,
  `Calificacion` double(10,2) NOT NULL,
  `Estatus` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `tabla` (`id`, `Tabla`, `Correctas`, `Incorrectas`, `Calificacion`, `Estatus`) VALUES
(1, 5, 3, 7, 5.00, b'1');



CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `idTabla` int(10) NOT NULL,
  `Estatus` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `usuario` (`id`, `Nombre`, `Correo`, `idTabla`, `Estatus`) VALUES
(1, 'asdad', 'asda', 1, b'1'),
(2, 'asdad', 'asda', 1, b'1'),
(3, 'asdad', 'asda', 1, b'1');



ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tabla`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

