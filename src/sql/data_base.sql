-- phpMyAdmin SQL Dump
-- Version information: 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.22-MariaDB 
-- php version: 8.2.0
-- Server type: MariaDB
-- Server Charset: UTF-8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
--- CREATION Data Base 'Shopy_net' project.
--
DROP DATABASE IF EXISTS `Shopy_net`; 
CREATE DATABASE `Shopy_net`;

--
-- CREATE `users` TABLE inside `Shopy_net` database
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
    `id` bigint(20) NOT NULL, 
    `first_name` varchar(35) NOT NULL, 
    `last_name` varchar(45) NOT NULL, 
    `email` varchar(128) NOT NULL, 
    `gender` varchar(20) NOT NULL, 
    `password` varchar(128) NOT NULL,
    `date_inscr` timestamp
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
ADD PRIMARY KEY (`id`); 

ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;


--
-- CREATE `admin` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `admin`; 
CREATE TABLE `admin`(
    `id` int(10) NOT NULL,
    `name` varchar(28) NOT NULL, 
    `email` varchar(30) NOT NULL, 
    `passsword` varchar(30) NOT NULL
);
ALTER TABLE `admin` 
 ADD PRIMARY KEY (`id`); 

ALTER TABLE `admin` 
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;  

--- optinel modify
INSERT INTO `admin` VALUES(
    (null,'abedellah mebarka','mebarka','***'), 
    (null,'ziad yazid','yazid.ziad2000@gmail.com','***')
);


--
-- CREATE `product` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`(
  `id` int(12) NOT NULL,
  `id_cat_prod` int(8) NOT NULL,
  `price_unit` int(8) NOT NULL,
  `image_ur` varchar(255) NOT NULL DEFAULT 'default_img.png',
  `description` varchar(256) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `product`
ADD PRIMARY KEY (`id`),
ADD KEY `id_cat_prod` (`id_cat_prod`); 

ALTER TABLE `product`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- CREATE `service` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service`(
  `id` int(12) NOT NULL,
  `id_cat_serv` int(8) NOT NULL,
  `price_unit` int(8) NOT NULL,
  `image_ur` varchar(255) NOT NULL DEFAULT 'default_img.png',
  `description` varchar(256) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `service`
ADD PRIMARY KEY (`id`),
ADD KEY `id_cat_serv` (`id_cat_serv`); 

ALTER TABLE `service` 
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
--- `date_service` TABLE STORE START AND END dates of a service
--
CREATE TABLE `date_service`(
    `id` int(12) NOT NULL PRIMARY KEY, 
    `date_debut` timestamp, 
    `date_fin` timestamp
); 

--
-- CREATE `categories` TABLE inside `Shopy_net` database (categories of articles).
--
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`(
  `id` int(8) NOT NULL,
  `cat_name` varchar(48) NOT NULL, 
)