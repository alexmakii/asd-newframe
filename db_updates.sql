UPDATE `tbl_charsheet` SET `state` = '1' WHERE `tbl_charsheet`.`faculty` <> 'z' AND `tbl_charsheet`.`faculty` <> 'm';
-- выставляем state

ALTER TABLE `tbl_charsheet` ADD UNIQUE (`name`);
-- имена не повторяются

ALTER TABLE `tbl_charsheet` ADD `char_skills` TEXT NOT NULL COMMENT 'Навыки в json' AFTER `mag`;
ALTER TABLE `tbl_charsheet` CHANGE `mag` `mag` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'старый вариант навыков';
-- новый вариант навыков