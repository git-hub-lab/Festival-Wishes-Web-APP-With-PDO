CREATE TABLE `event_wishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `str` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `str` (`str`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
