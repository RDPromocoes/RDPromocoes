mysql_query("CREATE TABLE `usuarios` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nome` VARCHAR( 50 ) NOT NULL ,
`descricao` VARCHAR( 150 ) NOT NULL ,
`valor` FLOAT NOT NULL ,
`img` VARCHAR( 100 ) NOT NULL
) ENGINE = InnoDB ;");
