-- MySQL Workbench Synchronization
-- Generated: 2015-10-05 17:56
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: dxint

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `queryjumbo`.`subcripccion` 
ADD INDEX `fk_subcripccion_informationuser1_idx` (`informationuser_users_piochaid` ASC)  COMMENT '',
DROP INDEX `fk_subcripccion_informationuser1_idx` ;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`timessent` (
  `timeid` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `timeatual` DATETIME NULL DEFAULT NULL COMMENT '',
  `timeactual2` DATE NULL DEFAULT NULL COMMENT '',
  `timpoDeEnvio` VARCHAR(22) NULL DEFAULT NULL COMMENT '',
  `tiempoLlimite` INT(11) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`timeid`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`carrera` (
  `idcarrera` TINYINT(2) NOT NULL COMMENT '',
  `nombre` VARCHAR(100) NOT NULL COMMENT '',
  `descripcion` VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  `año` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`idcarrera`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`dias` (
  `iddias` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombredia` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`iddias`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`turno` (
  `idturno` INT(11) NOT NULL COMMENT '',
  `hora` INT(11) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`idturno`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`tiene` (
  `dias_iddias` INT(11) NOT NULL COMMENT '',
  `turno_idturno` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`dias_iddias`, `turno_idturno`)  COMMENT '',
  INDEX `fk_dias_has_turno_turno1_idx` (`turno_idturno` ASC)  COMMENT '',
  INDEX `fk_dias_has_turno_dias1_idx` (`dias_iddias` ASC)  COMMENT '',
  CONSTRAINT `fk_dias_has_turno_dias1`
    FOREIGN KEY (`dias_iddias`)
    REFERENCES `queryjumbo`.`dias` (`iddias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dias_has_turno_turno1`
    FOREIGN KEY (`turno_idturno`)
    REFERENCES `queryjumbo`.`turno` (`idturno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`semana` (
  `diaid` VARCHAR(45) NOT NULL COMMENT '',
  `8:00` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `9:00` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `10:30` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `12:00` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `12:30` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `14:00` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `15:30` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `17:30` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  `19:00` VARCHAR(45) NULL DEFAULT 'null' COMMENT '',
  PRIMARY KEY (`diaid`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`redimencionado` (
  `diaidname` VARCHAR(45) NOT NULL COMMENT '',
  `8:00` INT(11) NOT NULL COMMENT '',
  `9:00` INT(11) NOT NULL COMMENT '',
  `10:30` INT(11) NOT NULL COMMENT '',
  `12:00` INT(11) NOT NULL COMMENT '',
  `12:30` INT(11) NOT NULL COMMENT '',
  `14:00` INT(11) NOT NULL COMMENT '',
  `15:30` INT(11) NOT NULL COMMENT '',
  `17:30` INT(11) NOT NULL COMMENT '',
  `19:00` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`diaidname`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`planilla` (
  `idplanilla` INT(11) NOT NULL COMMENT '',
  `dias_iddias` INT(11) NOT NULL COMMENT '',
  `redimencionado_diaidname` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idplanilla`)  COMMENT '',
  INDEX `fk_planilla_dias1_idx` (`dias_iddias` ASC)  COMMENT '',
  INDEX `fk_planilla_redimencionado1_idx` (`redimencionado_diaidname` ASC)  COMMENT '',
  CONSTRAINT `fk_planilla_dias1`
    FOREIGN KEY (`dias_iddias`)
    REFERENCES `queryjumbo`.`dias` (`iddias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_planilla_redimencionado1`
    FOREIGN KEY (`redimencionado_diaidname`)
    REFERENCES `queryjumbo`.`redimencionado` (`diaidname`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`empaques` (
  `turno_idturno` INT(11) NOT NULL COMMENT '',
  `informationuser_id` INT(11) NOT NULL COMMENT '',
  `time` INT(11) NULL DEFAULT NULL COMMENT '',
  INDEX `fk_empaques_turno1_idx` (`turno_idturno` ASC)  COMMENT '',
  INDEX `fk_empaques_informationuser1_idx` (`informationuser_id` ASC)  COMMENT '',
  CONSTRAINT `fk_empaques_turno1`
    FOREIGN KEY (`turno_idturno`)
    REFERENCES `queryjumbo`.`turno` (`idturno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empaques_informationuser1`
    FOREIGN KEY (`informationuser_id`)
    REFERENCES `queryjumbo`.`informationuser` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `queryjumbo`.`suspencion` (
  `idsuspencion` INT(11) NOT NULL DEFAULT 100 COMMENT '',
  `released` TINYINT(1) NOT NULL COMMENT '',
  `motivo` VARCHAR(45) NOT NULL COMMENT '',
  `desde` DATE NOT NULL COMMENT '',
  `asta` DATE NOT NULL COMMENT '',
  PRIMARY KEY (`idsuspencion`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
