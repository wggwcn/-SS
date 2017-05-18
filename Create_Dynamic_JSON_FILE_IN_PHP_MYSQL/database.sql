--
 -- Table structure for table `tbl_employee`
 --
 CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
 --
 -- Dumping data for table `tbl_employee`
 --
 INSERT INTO `tbl_employee` (`id`, `name`, `gender`, `designation`) VALUES
 (1, 'Micheal Bruce', 'Male', 'System Architect'),
 (5, 'Clara Gilliam', 'Female', 'Programmer');