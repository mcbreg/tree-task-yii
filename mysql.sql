CREATE TABLE `tree` (
  `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) COLLATE utf8_general_ci NOT NULL COMMENT '���',
  `url` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL COMMENT '����',
  `tree_id` INTEGER(11) DEFAULT NULL COMMENT '������',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  UNIQUE KEY `url` (`url`) USING BTREE,
  KEY `tree_id` (`tree_id`) USING BTREE,
  CONSTRAINT `treee_fk1` FOREIGN KEY (`tree_id`) REFERENCES `tree` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;