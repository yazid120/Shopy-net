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
    `user_name` varchar(45) NOT NULL, 
    `email` varchar(128) NOT NULL, 
    `gender` varchar(20) NOT NULL, 
    `password` varchar(128) NOT NULL,
    `date_inscr` timestamp
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
ADD PRIMARY KEY (`id`); 

ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
MODIFY `date_inscr` timestamp DEFAULT CURRENT_TIMESTAMP; 

--
-- CREATE `admin` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `admin`; 
CREATE TABLE `admin`(
    `id` int(10) NOT NULL,
    `name` varchar(28), 
    `email` varchar(30) NOT NULL, 
    `passsword` varchar(30) NOT NULL
);
ALTER TABLE `admin` 
 ADD PRIMARY KEY (`id`); 

ALTER TABLE `admin` 
MODIFY `id` int(10) NOT NULL;  

--- optinel modify
INSERT INTO `admin` VALUES
    (001,NULL,'yazid.ziad2000@gmail.com',MD5('1234'));


--
-- CREATE `product` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`(
  `id` int(12) NOT NULL,
  `id_cat_prod` int(8) NOT NULL,
  `cat_prod_name` varchar(55) NOT NULL,
  `name_prod` varchar(168) NOT NULL,
  `description` text NOT NULL, 
  `price_unit` int(8) NOT NULL,
  `image_ur` varchar(255) NOT NULL,
  `quantity` int(4) NOT NULL,
  `date_added` timestamp
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `product`
ADD PRIMARY KEY (`id`),
ADD KEY `id_cat_prod` (`id_cat_prod`); 

ALTER TABLE `product`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- insert articals(products) `products` table 
--
INSERT INTO `product` (id, id_cat_prod, cat_prod_name, name_prod, description, price_unit, image_ur, quantity,  date_added) VALUES
(1, 1,'Appareil électronique','apple airPods pro' ,'Nouveau arriver des airPods pro original couleur blanc',
42500,'airPods_Pro.jpg',10, CURRENT_TIMESTAMP),
(2, 4,'electromenager & Tv','Televiseur LG  55' ,'Téléviseur LG 55 pouces avec qualites de 4k et garantie de ans',
 89000 , 'LG_Tv_55UP77006LB.jpg',3, CURRENT_TIMESTAMP),
(3, 7,'montre et bijoux','montre Garmin fenix 7', 'montre Garmin', 32000 ,'Garminfenix7.jpeg', 6, CURRENT_TIMESTAMP), 
(4, 2,'informatique','laptop acer Aspire 3 A315','acer aspire 3 avec un processeur i3 10th,8gb de ram et 256gb de stokage',
 78000 ,'acerAspire3_A315_2.jpg', 3, CURRENT_TIMESTAMP),
(5, 3,'console & jeux video','Sony Ps4 Pro' , 'Ps4 pro dispose de 1 To de stokage ', 68000, 'Ps4_Pro.jpg', 2, 
CURRENT_TIMESTAMP),
(6, 4,'electromenager & Tv','Nespresso Machine InissiaKrups', 'Machine a café Nespresso', 21000,
 'Nespresso_InissiaKrups_Machine.jpg', 8, CURRENT_TIMESTAMP),
(7, 7,'montre et bijoux','Montre garmin fenix 7', 'garmin fenix 7 classic couleur noir',32000,'Garminfenix7.jpeg', 6 ,
CURRENT_TIMESTAMP), 
(8, 2,'informatique','Logitech G502 HERO', 'Logitech G502 HERO Souris Gamer Filaire Haute Performance, Capteur Gaming HERO 25K, 25 600 PPP, RVB',
14000, 'Logitech_G502_Hero.jpg', 4 ,CURRENT_TIMESTAMP),
(9, 4,'electromenager & Tv','RAYLAN Réfrigérateur 470 L','RAYLAN Réfrigérateur 470 L Noir Avec Distributeur No Frost Ref-nf 470 D B',
111500,'RAYLAN Réfrigerateur 470 L Black Avec Distributeur No Frost Ref-nf 470 D B.jpg',2, CURRENT_TIMESTAMP),
(10, 1,'Appareil électronique','Sensyne 62','Sensyne 62 Trépied pour téléphone et perche à selfie, trépied extensible pour téléphone portable avec télécommande sans fil et support de téléphone',
2200,'51uZme3QCkL._AC_SX569_.jpg',8, CURRENT_TIMESTAMP);

--
-- CREATE `service` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service`(
  `id` int(12) NOT NULL,
  `id_cat_serv` int(8) NOT NULL,
  `price_unit` decimal(5,3) NOT NULL,
  `image_ur` varchar(255) NOT NULL DEFAULT 'default_img.png',
  `description` varchar(256) NOT NULL, 
  `date_added` timestamp
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
-- CREATE `categories` TABLE inside `Shopy_net` database (categories of articles = produit ou service).
--
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`(
  `id` int(8) NOT NULL,
  `cat_name` varchar(48) NOT NULL
);
ALTER TABLE `categories`
ADD PRIMARY KEY (`id`); 

ALTER TABLE `categories`
MODIFY `cat_name` varchar(55) NOT NULL;

INSERT INTO `categories` (id,cat_name) VALUES
(1,'Appareil électronique'),
(2,'informatique'),
(3,'console & jeux video'),
(4,'electromenager & Tv'), 
(5,'livre & e-books'),
(6,'vêtements et accessoires'),
(7,'montre et bijoux'); 
--
-- CREATE `panier` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `panier`; 


--
-- CREATE `commande` TABLE inside `Shopy_net` database 
--
DROP TABLE IF EXISTS `commande`; 
CREATE TABLE `commande`(
  `id` int(12) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(40) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `paymode` varchar(50) NOT NULL,
  `namecard` varchar(50) NOT NULL,
  `numcard` int(30) NOT NULL,
  `expmonth` varchar(40) NOT NULL,
  `expyear` int(40) NOT NULL,
  `date_commande` timestamp,
  `code_commande` NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;