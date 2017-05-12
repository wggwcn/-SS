 CREATE TABLE IF NOT EXISTS `tbl_country` (  
  `country_id` int(11) NOT NULL AUTO_INCREMENT,  
  `country_name` text NOT NULL,  
  PRIMARY KEY (`country_id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;  
 --  
 -- Dumping data for table `tbl_country`  
 --  
 INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES  
 (1, 'Andorra'),  
 (2, 'United Arab Emirates'),  
 (3, 'Afghanistan'),  
 (4, 'Antigua and Barbuda'),  
 (5, 'Anguilla'),  
 (6, 'Albania'),  
 (7, 'Armenia'),  
 (8, 'Angola'),  
 (9, 'Antarctica'),  
 (10, 'Argentina'),  
 (11, 'American Samoa')  
