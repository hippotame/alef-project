/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  hippo
 * Created: 11.12.2016
 */

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Ned 11. pro 2016, 00:48
-- Verze serveru: 5.5.53-0ubuntu0.14.04.1
-- Verze PHP: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Databáze: `alef_project`
--
CREATE DATABASE IF NOT EXISTS `alef_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alef_project`;

-- --------------------------------------------------------

--
-- Struktura tabulky `tracks_planets`
--

DROP TABLE IF EXISTS `tracks_planets`;
CREATE TABLE IF NOT EXISTS `tracks_planets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `planet` varchar(256) DEFAULT NULL,
  `track_name` varchar(1024) DEFAULT NULL,
  `track_notes` text,
  `track_numbers` text,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
