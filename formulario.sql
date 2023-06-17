-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2017 a las 06:40:28
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `formulario`
--
CREATE DATABASE IF NOT EXISTS `solicitud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `solicitud`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `solicitud`.`clientes` (`nombre` TEXT NOT NULL , `email` VARCHAR(100) NOT NULL , `Servicio de Interes` TEXT NOT NULL , `direccion` VARCHAR(100) NOT NULL , `departamento` VARCHAR(100) NOT NULL , `ciudad` TEXT NOT NULL , `telefono` VARCHAR(20) NOT NULL ) ENGINE = InnoDB;

select * from clientes;

desc clientes;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
