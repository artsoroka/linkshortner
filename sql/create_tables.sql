use linkshortner; 
SET foreign_key_checks = 0;	

DROP TABLE IF EXISTS `users`; 
CREATE TABLE `users` (
  id int auto_increment PRIMARY KEY, 
  username varchar(30) NOT NULL, 
  password varchar(50) NOT NULL,
  salt     varchar(20) NOT NULL,
  email    varchar(40),
  created  datetime DEFAULT NOW()  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;

CREATE INDEX `username` on `users` (`username`); 

SET foreign_key_checks = 1;
