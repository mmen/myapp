-- MySQL Script generated by MySQL Workbench
-- Mon Sep 27 17:35:53 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tuto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tuto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tuto` DEFAULT CHARACTER SET utf8 ;
USE `tuto` ;

-- -----------------------------------------------------
-- Table `tuto`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tuto`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `tuto`.`posts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tuto`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `content` LONGTEXT NULL,
  `created` DATETIME NULL,
  `online` INT NULL,
  `type` VARCHAR(255) NULL,
  `user_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_posts_users1_idx` (`user_id` ASC) VISIBLE)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `tuto`.`configs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tuto`.`configs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `value` VARCHAR(255) NULL,
  `configcol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `tuto`.`medias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tuto`.`medias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `file` VARCHAR(255) NULL,
  `post_id` INT NULL,
  `type` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_medias_posts_idx` (`post_id` ASC) VISIBLE)
ENGINE = MyISAM;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
