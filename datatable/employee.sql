--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Age` int NOT NULL,
  `Salary` int NOT NULL, 
  `Office` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` BIGINT NOT NULL,
  `Date` Date,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Zip` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `Salary`,`Age`,`Office`,`Email`,`Phone`,`Date`,`City`,`Country`,`Zip`) VALUES
('Tiger Nixon', 320800, 61,'Ziffity','tiger@ziffity.com',9087654312,'2021-02-01','Chennai','India',600015),
('Garrett Winters', 170750, 63,'Ziffity','garrett@ziffity.com',9083654312,'2017-02-01','Chennai','India',234354),
('Ashton Cox', 86000, 66,'Ziffity','ashton@ziffity.com',9087652312,'2019-02-01','Coimbatore','India',456567),
('Cedric Kelly', 433060, 22,'Ziffity','cedric@ziffity.com',9085654312,'2018-02-01','Mysore','India',897890),
('Airi Satou', 162700, 33,'Ziffity','airi@ziffity.com',9087644312,'2017-02-01','Bangalore','India',456567),
('Brielle Williamson', 372000, 61,'Ziffity','brielle@ziffity.com',9081654312,'2009-02-01','Chennai','India',600015),
('Herrod Chandler', 137500, 59,'Ziffity','herrod@ziffity.com',9087344312,'2017-02-01','Chennai','India',600015),
('Rhona Davidson', 327900, 55,'HCL','rhona@hcl.com',9023654312,'2009-02-01','Coimbatore','India',897890),
('Colleen Hurst', 205500, 39,'HCL','colleen@hcl.com',9045354312,'2021-02-01','Mysore','India',897890),
('Sonya Frost', 103600, 23,'HCL','sonya@hcl.com',9017654312,'2022-02-01','Bangalore','India',456567),
('Jena Gaines', 90560, 30,'HCL','jena@hcl.com',9087654334,'2017-02-01','Chennai','India',600015),
('Quinn Flynn', 342000, 22,'HCL','quinn@hcl.com',9087654356,'2022-02-01','Coimbatore','India',897890),
('Charde Marshall', 470600, 36,'HCL','charde@hcl.com',9087654363,'2021-02-01','Chennai','India',600015),
('Haley Kennedy', 313500, 43,'HCL','haley@hcl.com',90876543178,'2021-02-01','Chennai','India',456567),
('Tatyana Fitzpatric', 385750, 19,'Infosys','tatyana@infosys.com',9087342312,'2022-02-01','Mysore','India',600015),
('Michael Silva', 198500, 66,'Infosys','michael@infosys.com',9089054312,'2018-02-01','Coimbatore','India',234354),
('Paul Byrd', 725000, 64,'Infosys','paul@infosys.com',9080004312,'2020-02-01','Chennai','India',897890),
('Gloria Little', 237500, 59,'Infosys','gloria@infosys.com',9087111312,'2020-02-01','Mysore','India',234354),
('Bradley Greer', 132000, 41,'Infosys','bradley@infosys.com',9087622212,'2021-02-01','Coimbatore','India',600015),
('Dai Rios', 217500, 35,'Infosys','dai@infosys.com',9087633312,'2021-02-01','Bangalore','India',600015),
('Jenette Caldwell', 345000, 30,'Infosys','jenette@infosys.com',9044454312,'2019-02-01','Coimbatore','India',234354),
('Yuri Berry', 675000, 40,'Infosys','yuri@infosys.com',9555654312,'2006-02-01','Chennai','India',897898);


