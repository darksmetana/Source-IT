# База данных library

#1.
#CREATE DATABASE `library`;
#USE `library`;

#2.
#CREATE TABLE `book` (
#  `id` int(6) PRIMARY KEY AUTO_INCREMENT,
#  `title` VARCHAR(255) NOT NULL,
#  `created_at` DATETIME NOT NULL
#);

#3.
#CREATE TABLE `author` (
#  `id` int(6) PRIMARY KEY AUTO_INCREMENT,
#  `first_name` VARCHAR(24) NOT NULL,
#  `last_name` VARCHAR(24) NOT NULL 
#);

#4.
#CREATE TABLE `book_author` (
#  `id` INT(6) PRIMARY KEY AUTO_INCREMENT,
#  `book_id` INT NOT NULL,
#  `author_id` INT NOT NULL
#);

#5.
#ALTER TABLE `book` 
#ADD COLUMN `is_published` BOOLEAN NULL 
#AFTER `title`;

#6.
#ALTER TABLE `author` 
#ADD COLUMN `email` VARCHAR(26) NOT NULL;

#7.
#INSERT INTO `author` (
#  `first_name`, 
#  `last_name`, 
#  `email`
#) VALUES 
#  (
#      'Max', 'Brooks', 'max-brooks@gmail.com'
#  ),
#  (
#      'Herbert', 'Wells', 'herbert-wells@gmail.com'
#  ),
#  (
#      'Anton','Chekhov','anton-chekhov@gmail.com'
#  ),
#  (
#      'Mark','Twain','mark-twain@gmail.com'
#  ),
#  (
#      'Matt','Zandstra','matt-zandstra@gmail.com'
#  );

#8.
#INSERT INTO `book` (`title`)
#VALUES
#  (
#      'World War Z'
#  ),
#  (
#      'Time Machine'
#  ),
#  (
#     'Ward No.6'
#  ),
#  (
#      'The Prince and the Pauper'
#  ),
#  (
#      'PHP 5 Objects, Patterns, and Practice'
#  );

#9.
#INSERT INTO `book_author`(`book_id`, `author_id`) VALUES ((SELECT `id` FROM `book` WHERE `book`.`id`=1), (SELECT `id` FROM `author` WHERE `author`.`id`=1));
#INSERT INTO `book_author`(`book_id`, `author_id`) VALUES ((SELECT `id` FROM `book` WHERE `book`.`id`=2), (SELECT `id` FROM `author` WHERE `author`.`id`=2));
#INSERT INTO `book_author`(`book_id`, `author_id`) VALUES ((SELECT `id` FROM `book` WHERE `book`.`id`=3), (SELECT `id` FROM `author` WHERE `author`.`id`=3));
#INSERT INTO `book_author`(`book_id`, `author_id`) VALUES ((SELECT `id` FROM `book` WHERE `book`.`id`=4), (SELECT `id` FROM `author` WHERE `author`.`id`=4));
#INSERT INTO `book_author`(`book_id`, `author_id`) VALUES ((SELECT `id` FROM `book` WHERE `book`.`id`=5), (SELECT `id` FROM `author` WHERE `author`.`id`=5));

#10.
#UPDATE `book` SET `is_published`=1 WHERE `id` IN (1,3,5);

#11.
#UPDATE `book` SET `created_at`=NOW() WHERE `is_published`=1;

#12.
#UPDATE `author` SET `email`=(SELECT CONCAT_WS('_', `author`.`first_name`, `author`.`last_name`));
#UPDATE `author` SET `email`=(SELECT CONCAT(`author`.`email`, '@gmail.com'));

#13.
#SELECT `title`, `created_at` FROM `book`;

#14.
#SELECT `first_name`, `last_name` FROM `author`;

#15.
#SELECT `title`, `first_name`, `last_name` FROM `book` LEFT JOIN `author` ON `book`.`id`=`author`.`id` ORDER BY `book`.`title`;

#16.
#SELECT `title`, `first_name`, `last_name` FROM `book` INNER JOIN `author` ON `book`.`id`=`author`.`id` ORDER BY `book`.`title`;

#17.
#SELECT `title`, `first_name`, `last_name` FROM `book` INNER JOIN `author` ON `book`.`is_published`=1 AND `author`.`first_name` LIKE 'H%' ORDER BY `book`.`title`;

#18.
#SELECT `title`, `first_name`, `last_name` FROM `book` INNER JOIN `author` ON `book`.`is_published`=1 AND `author`.`email` LIKE '%gmail%' ORDER BY `book`.`title`;