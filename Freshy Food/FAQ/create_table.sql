CREATE TABLE `faq_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(2000) DEFAULT NULL,
  `answers` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
