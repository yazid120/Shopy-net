
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