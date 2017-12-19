# Festival-Wishes-Web-APP-With-PDO

Festival Wishes Web APP - Create Name Wishing Web APP with PHP PDO

## Requirements

- PHP PDO Extension
- Latest PHP Version

## Others

- Create Table

```
CREATE TABLE `event_wishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `str` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `str` (`str`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

- Connect your Database by adding the DB login details on `db.php`
- Update your Name Wish APP URL on `index.php` and `userwish.php` File
- It having the Back-End only for Fron-End follow this Respo - <a href="https://github.com/mskian/happy-New-year-Wishing-web-app">Happy New year Wishing web app</a> to Cook Front-End for your Name Wishing web app
- That's all Done - Happy Event :-)


Forum Discussion - <a href="https://goo.gl/Mkebuv" target="_blank">Join Now</a>

Blog Post - <a href="https://awts.in/2nBIPZh" target="_blank">Read Now</a>

