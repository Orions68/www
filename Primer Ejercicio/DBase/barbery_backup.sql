

CREATE TABLE `phone` (
  `user_id` int(11) NOT NULL,
  `number` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`,`number`),
  CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO phone VALUES("1","664774821");
INSERT INTO phone VALUES("1","922201874");
INSERT INTO phone VALUES("3","633333333");
INSERT INTO phone VALUES("3","636363636");
INSERT INTO phone VALUES("5","611111111");



CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `surname2` varchar(80) DEFAULT NULL,
  `dni` varchar(12) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO user VALUES("1","César","Matelat","Borneo","42268151Q","orions68@gmail.com");
INSERT INTO user VALUES("2","Usuario","Segundo","","2W","2@2.com");
INSERT INTO user VALUES("3","Usuario","Tercero","","3A","3@3.com");
INSERT INTO user VALUES("4","Usuario","Cuarto","","4G","4@4.com");
INSERT INTO user VALUES("5","Usuario","Quinto","","5M","1@1.com");

