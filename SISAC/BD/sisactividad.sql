SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `usuario` INT NULL ,
  `clave` INT NULL ,
  PRIMARY KEY (`idUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Docente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Docente` (
  `idDocente` INT NOT NULL AUTO_INCREMENT ,
  `nomDocente` VARCHAR(45) NULL ,
  `apeDocente` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`idDocente`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Participante`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Participante` (
  `idParticipante` INT NOT NULL AUTO_INCREMENT ,
  `Usuario_idUsuario` INT NOT NULL ,
  `Docente_idDocente` INT NOT NULL ,
  PRIMARY KEY (`idParticipante`) ,
  INDEX `fk_Participante_Usuario1_idx` (`Usuario_idUsuario` ASC) ,
  INDEX `fk_Participante_Docente1_idx` (`Docente_idDocente` ASC) ,
  CONSTRAINT `fk_Participante_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario` )
    REFERENCES `mydb`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Participante_Docente1`
    FOREIGN KEY (`Docente_idDocente` )
    REFERENCES `mydb`.`Docente` (`idDocente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Actividad` (
  `idActividad` INT NOT NULL AUTO_INCREMENT ,
  `nomActividad` VARCHAR(300) NULL ,
  `fecInicio` DATE NULL ,
  `fecFinal` DATE NULL ,
  `horInicio` TIME NULL ,
  `horFinal` TIME NULL ,
  `tipActividad` VARCHAR(100) NULL ,
  `nota` VARCHAR(500) NULL ,
  `horRecordatorio` TIME NULL ,
  `subArchivo` VARCHAR(100) NULL ,
  PRIMARY KEY (`idActividad`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comunicado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Comunicado` (
  `idComunicado` INT NOT NULL AUTO_INCREMENT ,
  `titComunicado` VARCHAR(100) NULL ,
  `contenido` VARCHAR(1000) NULL ,
  `fecEnvio` DATE NULL ,
  `horEnvio` TIME NULL ,
  PRIMARY KEY (`idComunicado`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Participante_has_Actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Participante_has_Actividad` (
  `Participante_idParticipante` INT NOT NULL ,
  `Actividad_idActividad` INT NOT NULL ,
  INDEX `fk_Participante_has_Actividad_Participante1_idx` (`Participante_idParticipante` ASC) ,
  INDEX `fk_Participante_has_Actividad_Actividad1_idx` (`Actividad_idActividad` ASC) ,
  CONSTRAINT `fk_Participante_has_Actividad_Participante1`
    FOREIGN KEY (`Participante_idParticipante` )
    REFERENCES `mydb`.`Participante` (`idParticipante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Participante_has_Actividad_Actividad1`
    FOREIGN KEY (`Actividad_idActividad` )
    REFERENCES `mydb`.`Actividad` (`idActividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Participante_has_Comunicado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Participante_has_Comunicado` (
  `Comunicado_idComunicado` INT NOT NULL ,
  `Participante_idParticipante` INT NOT NULL ,
  INDEX `fk_Participante_has_Comunicado_Comunicado1_idx` (`Comunicado_idComunicado` ASC) ,
  INDEX `fk_Participante_has_Comunicado_Participante1_idx` (`Participante_idParticipante` ASC) ,
  CONSTRAINT `fk_Participante_has_Comunicado_Comunicado1`
    FOREIGN KEY (`Comunicado_idComunicado` )
    REFERENCES `mydb`.`Comunicado` (`idComunicado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Participante_has_Comunicado_Participante1`
    FOREIGN KEY (`Participante_idParticipante` )
    REFERENCES `mydb`.`Participante` (`idParticipante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
