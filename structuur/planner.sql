CREATE TABLE IF NOT EXISTS `plannings`(
    `id` int(11) NOT NULL,
    `game` int(11) NOT NULL,
    `time` TIME NOT NULL,
    `duration` TIME NOT NULL,
    `date` DATE NOT NULL,
    `host` varchar(255) NOT NULL,
    `players` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

ALTER TABLE `plannings` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;