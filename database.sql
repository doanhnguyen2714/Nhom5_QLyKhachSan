

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `no_adults` int(11) DEFAULT NULL,
  `no_children` int(11) DEFAULT NULL,
  `reservation_created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`reservation_id`),
  KEY `user_id` (`user_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


LOCK TABLES `reservations` WRITE;
UNLOCK TABLES;



DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` int(11) NOT NULL,
  `room_name` varchar(30) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `room_featured` int(1) NOT NULL,
  `room_price` double(10,3) NOT NULL,
  `room_booked` int(1) DEFAULT 0,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL,
  `room_image` varchar(50) NOT NULL,
  `room_floor` int(11) NOT NULL,
  `room_view` varchar(20) NOT NULL,
  `room_beds` int(11) NOT NULL,
  `bed_type` varchar(30) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_amenities` varchar(200) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `rooms` WRITE;

INSERT INTO `rooms` VALUES (1,101,'Daimond Suite','Daimond',1,538.220,0,NULL,NULL,'3.jpg',2,'Beach',2,'Double deluxe',4,'breakfast, lunch, dinner, wifi'),(2,101,'Daimond Suite','Silver',1,538.220,0,NULL,NULL,'4.jpg',5,'Beach',2,'Double deluxe',4,'breakfast, lunch, dinner, wifi'),(3,202,'Ocean View Suite','gold',0,788.000,0,NULL,NULL,'4.jpg',2,'Ocean',3,'Queen Bed',2,'Ocean View, Wifi, Double bathroom'),(4,303,'Premiun','Premium',1,674.000,0,NULL,NULL,'6.jpg',3,'Ocean',2,'Queen Bed',3,'Ocean View, Wifi, Double bathroom, hairdryer'),(5,202,'Ocean View Suite','gold',0,788.000,0,NULL,NULL,'5.jpg',2,'Ocean',3,'Queen Bed',7,'Ocean View, Wifi, Double bathroom'),(6,202,'Ocean View Suite','Silver',1,788.000,0,NULL,NULL,'1.jpg',2,'Ocean',3,'Queen Bed',7,'Ocean View, Wifi, Double bathroom'),(7,202,'Ocean View Suite','Gold',1,788.000,0,NULL,NULL,'7.jpg',2,'Ocean',3,'Queen Bed',7,'Ocean View, Wifi, Double bathroom'),(8,202,'Ocean View Suite','Premium',1,788.000,0,NULL,NULL,'1.jpg',2,'Ocean',3,'Queen Bed',7,'Ocean View, Wifi, Double bathroom');

UNLOCK TABLES;



DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_lname` varchar(20) NOT NULL,
  `user_verified` int(1) NOT NULL DEFAULT 0,
  `verification_hash` varchar(500) NOT NULL,
  `user_dob` date NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_admin` int(1) NOT NULL DEFAULT 0,
  `user_password` varchar(500) NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_image` varchar(20) NOT NULL DEFAULT 'default_user.jpg',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES (3,'admin@gmail.com','Admin ','Account',1,'5a4b25aaed25c2ee1b74de72dc03c14e','2000-07-19','0213123118024',1,'8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918','2020-11-22 17:52:46','default_user.jpg'),(6,'alandsilva@gmail.com','Alan','Dsilva',1,'c3e878e27f52e2a57ace4d9a76fd9acf','2020-11-23','0213123118024',1,'db42328112177c2d6f2f6ca7f33c8e81084b8ff3e14202254137e22673bce2c8','2020-11-25 04:03:00','default_user.jpg');

UNLOCK TABLES;


DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment`(
  `payment_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `currency` varchar(5) DEFAULT 'INR',
  `method` varchar(10) DEFAULT 'card',
  `amount` int(11), 
  CONSTRAINT `payment_idfk_1` FOREIGN KEY(`reservation_id`) REFERENCES `reservations`(`reservation_id`) ON DELETE CASCADE,
  CONSTRAINT `payment_idfk_2` FOREIGN KEY(`user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
)

