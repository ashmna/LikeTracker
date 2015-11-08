# CREATE SCHEMA `like_tracker` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

DROP TABLE IF EXISTS `users_tasks`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `users` (
  `partnerId`     INT(3)     NOT NULL,
  `vkId`          INT(11)    NOT NULL,
  `lastLoginDate` DATETIME   NOT NULL,
  `balance`       INT(11)    NOT NULL,
  `rating`        INT(11)    NOT NULL,
  `status`        TINYINT(1) NOT NULL DEFAULT 1,

  PRIMARY KEY (`partnerId`, `vkId`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE utf8_unicode_ci;

CREATE TABLE `tasks` (
  `partnerId`  INT(3)     NOT NULL,
  `taskId`     INT(11)    NOT NULL AUTO_INCREMENT,
  `ownerId`    INT(11)    NOT NULL,
  `type`       ENUM('like', 'group', 'friend', 'share', 'poll', 'comment', 'video') NOT NULL,
  `url`        VARCHAR(255) NOT NULL,
  `price`      INT(3)     NOT NULL DEFAULT 0,
  `commission` INT(3)     NOT NULL DEFAULT 0,
  `count`      INT(5)     NOT NULL DEFAULT 0,
  `doneCount`  INT(5)     NOT NULL DEFAULT 0,
  `status`     TINYINT(1) NOT NULL DEFAULT 1,
  `createDate` DATETIME   NOT NULL,


  PRIMARY KEY (`taskId`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE utf8_unicode_ci;

CREATE TABLE `users_tasks` (
  `partnerId`   INT(3)     NOT NULL,
  `taskId`      INT(11)    NOT NULL,
  `userId`      INT(11)    NOT NULL,
  `takenAmount` INT(11)    NOT NULL DEFAULT 0,
  `givenAmount` INT(11)    NOT NULL DEFAULT 0,
  `commission`  INT(11)    NOT NULL DEFAULT 0,
  `isDone`      TINYINT(1) NOT NULL DEFAULT 0,
  `createDate`  DATETIME   NOT NULL,

  PRIMARY KEY (`taskId`, `userId`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE utf8_unicode_ci;

