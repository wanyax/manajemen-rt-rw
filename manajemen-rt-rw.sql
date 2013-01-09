SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `rt_rw` ;
CREATE SCHEMA IF NOT EXISTS `rt_rw` DEFAULT CHARACTER SET utf8 ;
USE `rt_rw` ;

-- -----------------------------------------------------
-- Table `rt_rw`.`rw`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`rw` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`rw` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  `kelurahan` VARCHAR(255) NULL ,
  `kecamatan` VARCHAR(255) NULL ,
  `kota_madya` VARCHAR(255) NULL ,
  `kota` VARCHAR(255) NULL ,
  `propinsi` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE INDEX `nama_rw_index` ON `rt_rw`.`rw` (`nama` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`perumahan`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`perumahan` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`perumahan` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  `kecamatan` VARCHAR(255) NULL ,
  `kota_madya` VARCHAR(255) NULL ,
  `kota` VARCHAR(255) NULL ,
  `propinsi` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `nama_UNIQUE` ON `rt_rw`.`perumahan` (`nama` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`blok`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`blok` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`blok` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  `perumahan_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `perumahan_id_blok_fk`
    FOREIGN KEY (`perumahan_id` )
    REFERENCES `rt_rw`.`perumahan` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `nama_blok_index` ON `rt_rw`.`blok` (`nama` ASC) ;

CREATE INDEX `perumahan_id_blok_fk_idx` ON `rt_rw`.`blok` (`perumahan_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`rt`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`rt` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`rt` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  `rw_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `rw_id_rt_fk`
    FOREIGN KEY (`rw_id` )
    REFERENCES `rt_rw`.`rw` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `rw_id_rt_fk_idx` ON `rt_rw`.`rt` (`rw_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`rumah`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`rumah` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`rumah` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nomor` VARCHAR(255) NULL ,
  `nama` VARCHAR(255) NOT NULL ,
  `blok_id` INT UNSIGNED NULL ,
  `rt_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `blok_id_rumah_fk`
    FOREIGN KEY (`blok_id` )
    REFERENCES `rt_rw`.`blok` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rt_id_rumah_fk`
    FOREIGN KEY (`rt_id` )
    REFERENCES `rt_rw`.`rt` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `blok_id_rumah_fk_idx` ON `rt_rw`.`rumah` (`blok_id` ASC) ;

CREATE INDEX `rt_id_rumah_fk_idx` ON `rt_rw`.`rumah` (`rt_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`warga`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`warga` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`warga` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama_depan` VARCHAR(255) NOT NULL ,
  `nama_belakang` VARCHAR(255) NULL ,
  `kelamin` TINYINT(1) NOT NULL ,
  `tanggal_lahir` DATE NOT NULL ,
  `status_kepala_keluarga` TINYINT(1) NOT NULL ,
  `rumah_id` INT UNSIGNED NOT NULL ,
  `tanggal_wafat` DATE NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `rumah_id_warga_fk`
    FOREIGN KEY (`rumah_id` )
    REFERENCES `rt_rw`.`rumah` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `nama_depan_warga_index` ON `rt_rw`.`warga` (`nama_depan` ASC) ;

CREATE INDEX `nama_belakang_warga_index` ON `rt_rw`.`warga` (`nama_belakang` ASC) ;

CREATE INDEX `rumah_id_warga_fk_idx` ON `rt_rw`.`warga` (`rumah_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`tipe_hubungan`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`tipe_hubungan` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`tipe_hubungan` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rt_rw`.`hubungan_keluarga`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`hubungan_keluarga` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`hubungan_keluarga` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `warga1_id` INT UNSIGNED NOT NULL ,
  `warga2_id` INT UNSIGNED NOT NULL ,
  `tipe_hubungan_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `warga1_id_hubungan_keluarga_fk`
    FOREIGN KEY (`warga1_id` )
    REFERENCES `rt_rw`.`warga` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `warga2_id_hubungan_keluarga_fk`
    FOREIGN KEY (`warga2_id` )
    REFERENCES `rt_rw`.`warga` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `tipe_hubungan_id_hubungan_keluarga_index`
    FOREIGN KEY (`tipe_hubungan_id` )
    REFERENCES `rt_rw`.`tipe_hubungan` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `warga1_id_hubungan_keluarga_fk_idx` ON `rt_rw`.`hubungan_keluarga` (`warga1_id` ASC) ;

CREATE INDEX `warga2_id_hubungan_keluarga_fk_idx` ON `rt_rw`.`hubungan_keluarga` (`warga2_id` ASC) ;

CREATE INDEX `tipe_hubungan_id_hubungan_keluarga_index_idx` ON `rt_rw`.`hubungan_keluarga` (`tipe_hubungan_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`jabatan_rw`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`jabatan_rw` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`jabatan_rw` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `nama_UNIQUE` ON `rt_rw`.`jabatan_rw` (`nama` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`pengurus_rw`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`pengurus_rw` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`pengurus_rw` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `rw_id` INT UNSIGNED NOT NULL ,
  `warga_id` INT UNSIGNED NOT NULL ,
  `jabatan_rw_id` INT UNSIGNED NOT NULL ,
  `tanggal_mulai` DATE NOT NULL ,
  `tanggal_berakhir` DATE NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `warga_id_pengurus_rw_fk`
    FOREIGN KEY (`warga_id` )
    REFERENCES `rt_rw`.`warga` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rw_id_pengurus_rw_fk`
    FOREIGN KEY (`rw_id` )
    REFERENCES `rt_rw`.`rw` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `jabatan_rw_id_fk`
    FOREIGN KEY (`jabatan_rw_id` )
    REFERENCES `rt_rw`.`jabatan_rw` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `warga_id_pengurus_rw_fk_idx` ON `rt_rw`.`pengurus_rw` (`warga_id` ASC) ;

CREATE INDEX `rw_id_pengurus_rw_fk_idx` ON `rt_rw`.`pengurus_rw` (`rw_id` ASC) ;

CREATE INDEX `jabatan_rw_id_fk_idx` ON `rt_rw`.`pengurus_rw` (`jabatan_rw_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`jabatan_rt`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`jabatan_rt` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`jabatan_rt` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rt_rw`.`pengurus_rt`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`pengurus_rt` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`pengurus_rt` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `rt_id` INT UNSIGNED NOT NULL ,
  `warga_id` INT UNSIGNED NOT NULL ,
  `jabatan_rt_id` INT UNSIGNED NOT NULL ,
  `tanggal_mulai` DATE NOT NULL ,
  `tanggal_berakhir` DATE NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `rt_id_pengurus_rt_fk`
    FOREIGN KEY (`rt_id` )
    REFERENCES `rt_rw`.`rt` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `warga_id_pengurus_rt_fk`
    FOREIGN KEY (`warga_id` )
    REFERENCES `rt_rw`.`warga` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `jabatan_rt_id_pengurus_rt_fk`
    FOREIGN KEY (`jabatan_rt_id` )
    REFERENCES `rt_rw`.`jabatan_rt` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `rt_id_pengurus_rt_fk_idx` ON `rt_rw`.`pengurus_rt` (`rt_id` ASC) ;

CREATE INDEX `warga_id_pengurus_rt_fk_idx` ON `rt_rw`.`pengurus_rt` (`warga_id` ASC) ;

CREATE INDEX `jabatan_rt_id_pengurus_rt_fk_idx` ON `rt_rw`.`pengurus_rt` (`jabatan_rt_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`tipe_periode`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`tipe_periode` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`tipe_periode` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rt_rw`.`tipe_iuran`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`tipe_iuran` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`tipe_iuran` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `rt_id` INT UNSIGNED NOT NULL ,
  `nama` VARCHAR(255) NOT NULL ,
  `tipe_periode_id` INT UNSIGNED NOT NULL ,
  `nominal` INT UNSIGNED NOT NULL ,
  `status_berlaku` TINYINT(1) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `rt_id_tipe_iuran_fk`
    FOREIGN KEY (`rt_id` )
    REFERENCES `rt_rw`.`rt` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `tipe_periode_id_tipe_iuran_fk`
    FOREIGN KEY (`tipe_periode_id` )
    REFERENCES `rt_rw`.`tipe_periode` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `rt_id_tipe_iuran_fk_idx` ON `rt_rw`.`tipe_iuran` (`rt_id` ASC) ;

CREATE INDEX `tipe_periode_id_tipe_iuran_fk_idx` ON `rt_rw`.`tipe_iuran` (`tipe_periode_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`periode`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`periode` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`periode` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipe_iuran_id` INT UNSIGNED NOT NULL ,
  `nama` VARCHAR(255) NOT NULL ,
  `tanggal_mulai` DATE NOT NULL ,
  `tanggal_akhir` DATE NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `tipe_iuran_id_periode_fk`
    FOREIGN KEY (`tipe_iuran_id` )
    REFERENCES `rt_rw`.`tipe_iuran` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `tipe_iuran_id_periode_fk_idx` ON `rt_rw`.`periode` (`tipe_iuran_id` ASC) ;


-- -----------------------------------------------------
-- Table `rt_rw`.`iuran`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rt_rw`.`iuran` ;

CREATE  TABLE IF NOT EXISTS `rt_rw`.`iuran` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `periode_id` INT UNSIGNED NOT NULL ,
  `rumah_id` INT UNSIGNED NOT NULL ,
  `nominal` INT UNSIGNED NOT NULL ,
  `pembayar_id` INT UNSIGNED NOT NULL ,
  `penerima_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `periode_id_iuran_fk`
    FOREIGN KEY (`periode_id` )
    REFERENCES `rt_rw`.`periode` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rumah_id_fk`
    FOREIGN KEY (`rumah_id` )
    REFERENCES `rt_rw`.`rumah` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pembayar_id_iuran_fk`
    FOREIGN KEY (`pembayar_id` )
    REFERENCES `rt_rw`.`warga` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `penerima_id_iuran_fk`
    FOREIGN KEY (`penerima_id` )
    REFERENCES `rt_rw`.`warga` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `periode_id_iuran_fk_idx` ON `rt_rw`.`iuran` (`periode_id` ASC) ;

CREATE INDEX `rumah_id_fk_idx` ON `rt_rw`.`iuran` (`rumah_id` ASC) ;

CREATE INDEX `pembayar_id_idx` ON `rt_rw`.`iuran` (`pembayar_id` ASC) ;

CREATE INDEX `penerima_id_iuran_fk_idx` ON `rt_rw`.`iuran` (`penerima_id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
