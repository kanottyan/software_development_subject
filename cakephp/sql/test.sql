DROP TABLE IF EXISTS `time_starts`;

CREATE  TABLE IF NOT EXISTS `cake`.`time_starts` (
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'サロゲートキー',
    `user_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'ユーザーID（外部キー）' ,
    `start` DATETIME NOT NULL COMMENT '出勤時間',
    `created` DATETIME NULL DEFAULT NULL COMMENT '作成日時' ,
    `modified` DATETIME NULL DEFAULT NULL COMMENT '更新日時',
   CONSTRAINT `FK_posts_user_id`
    PRIMARY KEY (`id`)
    FOREIGN KEY (`user_id`)
    REFERENCES `cake`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;