# CREATE SCHEMA `like_tracker` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `partnerId`     INT(3)   NOT NULL,
  `vkId`          INT(11)  NOT NULL,
  `lastLoginDate` DATETIME NOT NULL,

  PRIMARY KEY (`partnerId`, `vkId`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE utf8_unicode_ci;
