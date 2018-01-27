-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2017 at 04:49 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-4+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS iste;
CREATE DATABASE IF NOT EXISTS iste;
USE iste;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `question_id` int(11) NOT NULL DEFAULT 0,
  `create_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `qstns`;
CREATE TABLE IF NOT EXISTS `qstns` (
  `qname` text NOT NULL,
  `opta` text NOT NULL,
  `optb` text NOT NULL,
  `optc` text NOT NULL,
  `optd` text NOT NULL,
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



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


