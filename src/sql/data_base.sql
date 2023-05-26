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
-- CREATE `user_role` TABLE inside `Shopy_net` database
--
CREATE TABLE `user_role`(
  `id` int(8) NOT NULL,
  `id_user` int(20) NOT NULL,
  `role` varchar(10) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user_role` 
CHANGE `id_user` `id_user` BIGINT(20) NOT NULL; 

ALTER TABLE `user_role`
ADD PRIMARY KEY(`id`);

ALTER TABLE `user_role`
ADD FOREIGN KEY(`id_user`) REFERENCES `users`(`id`) ON DELETE CASCADE; 

ALTER TABLE `user_role` 
MODIFY `id` int(8) NOT NULL AUTO_INCREMENT; 

--
-- CREATION OF A VIEW OF user info that group both users an user_role tables 
--
CREATE VIEW `user_info` AS SELECT `users`.`id`, `users`.`user_name`, `users`.`email`, `users`.`gender`,
`users`.`password`, `users`.`date_inscr`,`user_role`.`role` FROM `users` INNER JOIN `user_role` ON 
`users`.`id` = `user_role`.`id_user` 
GROUP BY `users`.`id`, `users`.`user_name`, `users`.`email`, `users`.`gender`,
`users`.`password`, `users`.`date_inscr`,`user_role`.`role`; 

--
-- CREATE `Contact` TABLE inside `Shopy_net` database
--
CREATE TABLE `contact`(
  `id` int(8) NOT NULL, 
  `name` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `subject` varchar(65) NOT NULL,
  `Message` TEXT
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `contact`
ADD PRIMARY KEY(`id`);


 
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

ALTER TABLE `product` 
ADD `code_prod` INT(11) NOT NULL AFTER `id_cat_prod`; 



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
CREATE TABLE `panier`(
  `id` int(11) NOT NULL, 
  `session_client` varchar(18) NOT NULL,
  `id_client` int(20) NOT NULL,
  `id_produit` int(12) NOT NULL, 
  `quantity` int(8)
)ENGINE=innoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `panier` 
CHANGE `id_client` `id_client` BIGINT(20) NOT NULL; 

ALTER TABLE `panier`
  ADD PRIMARY KEY(`id`), 
  ADD FOREIGN KEY(`id_client`) REFERENCES `users` (`id`) ON DELETE CASCADE, 
  ADD FOREIGN KEY(`id_produit`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- CREATE `transcation` TABLE inside `Shopy_net` database
--
DROP TABLE IF EXISTS `transcation`; 
CREATE TABLE `transcation`(
  `id` int(10) NOT NULL, 
  `id_pan` int(10),
  `num_cart` int(16),
  `date_exp_cart` DATE, 
  `titulaire_car` varchar(50), 
  `ccv` int(6), 
  `date_transacation` timestamp DEFAULT CURRENT_TIMESTAMP
)ENGINE=innoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

ALTER TABLE `transcation`
  ADD PRIMARY KEY(`id`), 
  ADD FOREIGN KEY(`id_pan`) REFERENCES `panier`(`id`) ON DELETE CASCADE; 



CREATE TABLE `payement method`(
  `id` int(3) NOT NULL, 
  ``
)
4242 4242 4242 4242 - Visa
4000 0566 5566 5556 - Visa (debit)
5555 5555 5555 4444 - Mastercard
5200 8282 8282 8210 - Mastercard (debit)
3782 822463 10005 - American Express

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



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
