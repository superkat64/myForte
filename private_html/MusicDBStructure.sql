SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP DATABASE IF EXISTS `myforte_DB`;
CREATE DATABASE `myforte_DB`;
USE `myforte_DB`;User

-- -----------------------------------------------------
-- Table `myforte_DB`.`Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Genre` (
  `Genre_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Genre_Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Genre_OID`),
  UNIQUE INDEX `Genre_OID_UNIQUE` (`Genre_OID` ASC),
  UNIQUE INDEX `Genre_Name_UNIQUE` (`Genre_Name` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Album` (
  `Album_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Album_Name` VARCHAR(200) NOT NULL,
  `Genre_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Image_URL` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`Album_OID`),
  UNIQUE INDEX `Album_OID_UNIQUE` (`Album_OID` ASC),
  UNIQUE INDEX `Album_Name_UNIQUE` (`Album_Name` ASC),
  INDEX `Genre_Album_FK` (`Genre_FK` ASC),
  CONSTRAINT `Genre_Album_FK`
    FOREIGN KEY (`Genre_FK`)
    REFERENCES `myforte_DB`.`Genre` (`Genre_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`User` (
  `User_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Password` CHAR(128) NOT NULL,
  `First_Name` VARCHAR(50) NOT NULL,
  `Last_Name` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`User_OID`),
  UNIQUE INDEX `User_OID_UNIQUE` (`User_OID` ASC),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Review` (
  `Review_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Comment` VARCHAR(200) NOT NULL,
  `Stars` TINYINT(3) UNSIGNED NOT NULL,
  `Timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `User_FK` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`Review_OID`),
  UNIQUE INDEX `Review_OID_UNIQUE` (`Review_OID` ASC),
  INDEX `User_Review_FK` (`User_FK` ASC),
  CONSTRAINT `User_Review_FK`
    FOREIGN KEY (`User_FK`)
    REFERENCES `myforte_DB`.`User` (`User_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Album_Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Album_Review` (
  `Album_Review_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Album_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Review_FK` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`Album_Review_OID`),
  UNIQUE INDEX `idAlbum_Review_UNIQUE` (`Album_Review_OID` ASC),
  UNIQUE INDEX `Review_FK_UNIQUE` (`Review_FK` ASC),
  INDEX `Review_AlbumReviewFK` (`Review_FK` ASC),
  INDEX `Album_AlbumReview_FK` (`Album_FK` ASC),
  CONSTRAINT `Album_AlbumReview_FK`
    FOREIGN KEY (`Album_FK`)
    REFERENCES `myforte_DB`.`Album` (`Album_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Review_AlbumReviewFK`
    FOREIGN KEY (`Review_FK`)
    REFERENCES `myforte_DB`.`Review` (`Review_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Artist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Artist` (
  `Artist_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Artist_Name` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`Artist_OID`),
  UNIQUE INDEX `Artist_OID_UNIQUE` (`Artist_OID` ASC),
  UNIQUE INDEX `Artist_Name_UNIQUE` (`Artist_Name` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Artist_Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Artist_Review` (
  `Artist_Review_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Artist_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Review_FK` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`Artist_Review_OID`),
  UNIQUE INDEX `idArtist_Review_UNIQUE` (`Artist_Review_OID` ASC),
  UNIQUE INDEX `Review_FK_UNIQUE` (`Review_FK` ASC),
  INDEX `Artist_ArtistReview_FK` (`Artist_FK` ASC),
  INDEX `Review_ArtistReview_FK` (`Review_FK` ASC),
  CONSTRAINT `Artist_ArtistReview_FK`
    FOREIGN KEY (`Artist_FK`)
    REFERENCES `myforte_DB`.`Artist` (`Artist_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Review_ArtistReview_FK`
    FOREIGN KEY (`Review_FK`)
    REFERENCES `myforte_DB`.`Review` (`Review_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Playlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Playlist` (
  `Playlist_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Playlist_Name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`Playlist_OID`),
  UNIQUE INDEX `Playlist_OID_UNIQUE` (`Playlist_OID` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Song`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Song` (
  `Song_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(200) NULL DEFAULT NULL,
  `Length` SMALLINT(5) UNSIGNED NULL DEFAULT NULL,
  `Artist_FK` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `Song_URL` VARCHAR(100) NOT NULL,
  `Album_FK` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`Song_OID`),
  UNIQUE INDEX `Song_OID_UNIQUE` (`Song_OID` ASC),
  INDEX `Artist_Song_FK` (`Artist_FK` ASC),
  INDEX `Album_Song_FK` (`Album_FK` ASC),
  CONSTRAINT `Album_Song_FK`
    FOREIGN KEY (`Album_FK`)
    REFERENCES `myforte_DB`.`Album` (`Album_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Artist_Song_FK`
    FOREIGN KEY (`Artist_FK`)
    REFERENCES `myforte_DB`.`Artist` (`Artist_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 81
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Song_In_Playlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Song_In_Playlist` (
  `Playlist_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Song_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Order_Number` INT(11) NULL DEFAULT NULL,
  `Song_In_Playlist_OID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Song_In_Playlist_OID`),
  UNIQUE INDEX `Song_In_Playlist_OID_UNIQUE` (`Song_In_Playlist_OID` ASC),
  INDEX `Song_SongInPlaylist_FK` (`Song_FK` ASC),
  INDEX `Playlist_SongInPlaylist_FK` (`Playlist_FK` ASC),
  CONSTRAINT `Playlist_SongInPlaylist_FK`
    FOREIGN KEY (`Playlist_FK`)
    REFERENCES `myforte_DB`.`Playlist` (`Playlist_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Song_SongInPlaylist_FK`
    FOREIGN KEY (`Song_FK`)
    REFERENCES `myforte_DB`.`Song` (`Song_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`Song_Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`Song_Review` (
  `Song_Review_OID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Song_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Review_FK` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`Song_Review_OID`),
  UNIQUE INDEX `idSong_Review_UNIQUE` (`Song_Review_OID` ASC),
  UNIQUE INDEX `Review_FK_UNIQUE` (`Review_FK` ASC),
  INDEX `Song_SongReview_FK` (`Song_FK` ASC),
  INDEX `Review_SongReview_FK` (`Review_FK` ASC),
  CONSTRAINT `Review_SongReview_FK`
    FOREIGN KEY (`Review_FK`)
    REFERENCES `myforte_DB`.`Review` (`Review_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Song_SongReview_FK`
    FOREIGN KEY (`Song_FK`)
    REFERENCES `myforte_DB`.`Song` (`Song_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `myforte_DB`.`User_Playlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myforte_DB`.`User_Playlist` (
  `User_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Playlist_FK` BIGINT(20) UNSIGNED NOT NULL,
  `User_Playlist_OID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`User_Playlist_OID`),
  UNIQUE INDEX `User_Playlist_OID_UNIQUE` (`User_Playlist_OID` ASC),
  INDEX `User_UserPlaylist_FK` (`User_FK` ASC),
  INDEX `Playlist_UserPlaylist_FK` (`Playlist_FK` ASC),
  CONSTRAINT `Playlist_UserPlaylist_FK`
    FOREIGN KEY (`Playlist_FK`)
    REFERENCES `myforte_DB`.`Playlist` (`Playlist_OID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `User_UserPlaylist_FK`
    FOREIGN KEY (`User_FK`)
    REFERENCES `myforte_DB`.`User` (`User_OID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO Genre (Genre_Name) VALUES ("Rock and Roll");
SET @genre = last_insert_id();
-- SET @genre = 5;
INSERT INTO Artist (Artist_Name) VALUES ("Boston");
SET @artist = last_insert_id();

INSERT INTO Album (Album_Name, Genre_FK)  VALUES ("Boston", @genre);
SET @album = last_insert_id();

INSERT INTO Song (Title, Artist_FK, Album_FK) values
    ("More Than a Feeling", @artist, @album),
    ("Peace of Mind", @artist, @album),
    ("Rock & Roll Band", @artist, @album),
    ("Smokin", @artist, @album);
INSERT INTO Genre (Genre_Name) VALUES ("Folk Rock");
SET @genre = last_insert_id();

INSERT INTO Artist (Artist_Name) VALUES ("Jim Croche");
SET @artist = last_insert_id();

INSERT INTO Album (Album_Name, Genre_FK)  VALUES ("You Don't Mess Around with Jim", @genre);
SET @album = last_insert_id();

INSERT INTO Song (Title, Artist_FK, Album_FK) values
    ("Operator", @artist, @album),
    ("Partie Time", @artist, @album),
    ("You Don't Mess Around With Jim", @artist, @album),
    ("Photographs and Memories", @artist, @album);
INSERT INTO User VALUES
    (DEFAULT, SHA2("password", 512), "John", "Doe", "johndoe@email.com");
SET @user = last_insert_id();

INSERT INTO Playlist VALUES
    (DEFAULT, "Boogie Tunes");
SET @play = last_insert_id();

INSERT INTO User_Playlist VALUES
    (@user, @play, DEFAULT);
    
-- NOTE: Songs have already been added and are in the id range 81 - 84

INSERT INTO Song_In_Playlist (Playlist_FK, Song_FK, Order_Number) VALUES
    (@play, 81, 1),
	(@play, 82, 2),
    (@play, 83, 3),
    (@play, 84, 4);

-- ADDING A SECOND PLAYLIST
INSERT INTO Playlist VALUES
    (DEFAULT, "Sad songs");
SET @play = last_insert_id();

INSERT INTO User_Playlist VALUES
    (@user, @play, DEFAULT);
    
-- NOTE: Songs have already been added and are in the id range 81 - 84

INSERT INTO Song_In_Playlist (Playlist_FK, Song_FK, Order_Number) VALUES
    (@play, 81, 2),
    (@play, 84, 4);