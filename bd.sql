CREATE TABLE `adm`.`adm_usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(20) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `fechaHoradeRegistro` DATETIME NULL,
  `fechaUltimaSesion` DATE NULL,
  `horaUltimaSesion` TIME NULL,
  `nombre` VARCHAR(20) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);
