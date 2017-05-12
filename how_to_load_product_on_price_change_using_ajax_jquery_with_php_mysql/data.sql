 --  
 -- Table structure for table `product`  
 --  
 CREATE TABLE IF NOT EXISTS `product` (  
  `product_id` int(11) NOT NULL AUTO_INCREMENT,  
  `product_name` varchar(250) NOT NULL,  
  `brand_id` int(11) NOT NULL,  
  `product_price` float NOT NULL,  
  `product_image` varchar(150) NOT NULL,  
  PRIMARY KEY (`product_id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;  
 --  
 -- Dumping data for table `product`  
 --  
 INSERT INTO `product` (`product_id`, `product_name`, `brand_id`, `product_price`, `product_image`) VALUES  
 (1, 'Samsung Galaxy A9', 1, 36000, 'Samsung_Galaxy_A9_L_1.jpg'),  
 (2, 'Samsung Galaxy S7', 1, 25000, 'samsung-galaxy-s7--.jpg'),  
 (3, 'Samsung Galaxy S6 edge', 1, 51000, 'Samsung-Galaxy-S6-Edge-32-SDL982046267-1-e60ad.jpg'),  
 (4, 'Xperia Z5 Premium', 2, 40000, 'Sony-Xperia-Z5-Premium-3.jpg'),  
 (5, 'Xperia M5 Dual', 2, 20000, '83201512213PM_635_sony_xperia_m5_dual.jpeg'),  
 (6, 'Xperia C5 uplta', 2, 15000, 'Sony-Xperia-C5-Ultra.jpg'),  
 (7, 'Moto G Turbo', 3, 10500, 'moto-g-turbo-black-540.png'),  
 (8, 'Moto X Force', 3, 35000, '1029201574637PM_635_moto_x_force.jpeg'),  
 (9, 'Redmi 3 Pro', 4, 12000, 'xiaomi-redmi-3-pro.png'),  
 (10, 'Mi 5', 4, 25000, '224201614903PM_635_xiaomi_mi_5_front_side.jpeg');  
