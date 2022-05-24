-- MySQL Script generated by MySQL Workbench
-- Fri Jan 15 05:55:24 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sdi1700173
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sdi1700173
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sdi1700173` DEFAULT CHARACTER SET utf8 ;
USE `sdi1700173` ;

-- -----------------------------------------------------
-- Table `sdi1700173`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`User` (
  `AMKA` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`AMKA`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`Signed_User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`Signed_User` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Child_Below_12` TINYINT NULL,
  PRIMARY KEY (`User_AMKA`),
  INDEX `fk_Signed_User_User1_idx` (`User_AMKA` ASC),
  CONSTRAINT `fk_Signed_User_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`Company` (
  `Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`User_owns_Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`User_owns_Company` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Company_Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`User_AMKA`, `Company_Name`),
  INDEX `fk_User_owns_Company_User1_idx` (`User_AMKA` ASC),
  INDEX `fk_User_owns_Company_Company1_idx` (`Company_Name` ASC),
  CONSTRAINT `fk_User_owns_Company_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_owns_Company_Company1`
    FOREIGN KEY (`Company_Name`)
    REFERENCES `sdi1700173`.`Company` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`User_works_for_Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`User_works_for_Company` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Company_Name` VARCHAR(45) NOT NULL,
  `Salary` INT NOT NULL,
  PRIMARY KEY (`User_AMKA`, `Company_Name`),
  INDEX `fk_User_works_for_Company_User1_idx` (`User_AMKA` ASC),
  INDEX `fk_User_works_for_Company_Company1_idx` (`Company_Name` ASC),
  CONSTRAINT `fk_User_works_for_Company_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_works_for_Company_Company1`
    FOREIGN KEY (`Company_Name`)
    REFERENCES `sdi1700173`.`Company` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`Thlergasia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`Thlergasia` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Company_Name` VARCHAR(45) NOT NULL,
  `Start` DATE NOT NULL,
  `Finish` DATE NOT NULL,
  PRIMARY KEY (`User_AMKA`, `Company_Name`, `Start`),
  INDEX `fk_Thlergasia_User1_idx` (`User_AMKA` ASC),
  INDEX `fk_Thlergasia_Company1_idx` (`Company_Name` ASC),
  CONSTRAINT `fk_Thlergasia_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Thlergasia_Company1`
    FOREIGN KEY (`Company_Name`)
    REFERENCES `sdi1700173`.`Company` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`Anastolh_Ergasias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`Anastolh_Ergasias` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Company_Name` VARCHAR(45) NOT NULL,
  `Start` DATE NOT NULL,
  `Finish` DATE NOT NULL,
  PRIMARY KEY (`User_AMKA`, `Company_Name`, `Start`),
  INDEX `fk_Anastolh_Ergasias_User1_idx` (`User_AMKA` ASC),
  INDEX `fk_Anastolh_Ergasias_Company1_idx` (`Company_Name` ASC),
  CONSTRAINT `fk_Anastolh_Ergasias_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Anastolh_Ergasias_Company1`
    FOREIGN KEY (`Company_Name`)
    REFERENCES `sdi1700173`.`Company` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`Adeia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`Adeia` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Company_Name` VARCHAR(45) NOT NULL,
  `Start` DATE NOT NULL,
  `Finish` DATE NOT NULL,
  `Type` ENUM('Ειδικού Σκοπού', 'Κανονική', 'Μητρότητας', 'Γονική', 'Αναρωτική', 'Αιμοδοσίας', ' Άνευ Αποδοχών') NOT NULL,
  PRIMARY KEY (`User_AMKA`, `Company_Name`, `Start`),
  INDEX `fk_User_has_Company_User1_idx` (`User_AMKA` ASC),
  INDEX `fk_Adeia_Company1_idx` (`Company_Name` ASC),
  CONSTRAINT `fk_User_has_Company_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Adeia_Company1`
    FOREIGN KEY (`Company_Name`)
    REFERENCES `sdi1700173`.`Company` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sdi1700173`.`Rantevou`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sdi1700173`.`Rantevou` (
  `User_AMKA` VARCHAR(11) NOT NULL,
  `Date_Time` DATETIME NOT NULL,
  PRIMARY KEY (`User_AMKA`, `Date_Time`),
  INDEX `fk_Rantevou_User1_idx` (`User_AMKA` ASC),
  CONSTRAINT `fk_Rantevou_User1`
    FOREIGN KEY (`User_AMKA`)
    REFERENCES `sdi1700173`.`User` (`AMKA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;