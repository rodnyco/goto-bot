SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for main
-- ----------------------------
USE main;
DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `places` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(100) NOT NULL,
    `description` text,
    `address` text,
    `link` VARCHAR(512),
    `tg_user_id` VARCHAR(512) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of places
-- ----------------------------
# INSERT INTO `places` (`title`, `description`, `address`, `link`, `tg_user_id`)
# VALUES (
#            'Тайланд',
#            'Джунгли острова красота',
#            'Пхукет',
#            'https://lp-cms-production.imgix.net/2021-03/GettyRF_178111904.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850',
#            '32501'
#        );
#


SET FOREIGN_KEY_CHECKS = 1;