DROP DATABASE IF EXISTS iste;
CREATE DATABASE IF NOT EXISTS iste;
USE iste;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `question_id` bigint(11) NOT NULL DEFAULT 0,
  `college` varchar(100) NULL,
  `fbid` bigint(22)  NULL NUll,
  `status` TINYINT(1) NOT NULL DEFAULT 0,
  `create_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `qstns`;
CREATE TABLE IF NOT EXISTS `qstns` (
  `qname` text NOT NULL,
  `c_a` text NOT NULL,
  `qid` int(11) NOT NULL,
  PRIMARY KEY (qid)
);

DROP TABLE IF EXISTS `qstns_users`;
CREATE TABLE IF NOT EXISTS `qstns_users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `users_id` INT(11) NOT NULL,
  `qstns_id` INT(11) NOT NULL DEFAULT 0,
  `submission` int(11) NOT NULL DEFAULT 0,
  `create_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `users_id` (`users_id`),
  KEY `qstns_id` (`qstns_id`),
  CONSTRAINT `users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `qstns_id` FOREIGN KEY (`qstns_id`) REFERENCES `qstns` (`qid`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (id)
);

INSERT INTO `qstns` (`qname`, `c_a`, `qid`) VALUES
('What is (void*)0?', 'opta', 0),
('In which header file is the NULL macro defined?', 'optc', 1),
(' If a variable is a pointer to the structure, then hich of the folloing operator is used to access data members of the structure through the pointer variable ?', 'optc', 2),
('The keyword used to transfer control from a function back to the calling function is', 'optd', 3),
('Which of the following cannot be checked in a switch-case statement?', 'optc', 4),
('Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'optc', 5),
('Which of the following special symbol allowed in a variable name?', 'optd', 6),
('What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'optc', 7),
('In C, if you pass an array as an argument to a function, what actually gets passed?', 'optc', 8),
('9.jpg', 'Vvvv', 9),
('21.jpg', '2222', 21),
('55.jpg', 'ahah', 55),
('212212.jpg', '2121', 12121);
