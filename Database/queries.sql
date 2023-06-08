CREATE TABLE `login_system_php`.`users` (
                                            `id` INT NOT NULL AUTO_INCREMENT,
                                            `email` VARCHAR(255) NOT NULL,
                                            `password` VARCHAR(255) NOT NULL,
                                            `first_name` VARCHAR(45) NOT NULL,
                                            `last_name` VARCHAR(45) NULL,
                                            PRIMARY KEY (`id`),
                                            UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
                                            UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);