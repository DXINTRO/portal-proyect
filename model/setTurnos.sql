CREATE DEFINER=`root`@`localhost` PROCEDURE `setTurnos`(in piocha varchar(4),in id int(8),in daay int(4),in houur int(5),in inx int(1), in tipe int(1),in mili bigint(16))
BEGIN
INSERT INTO `queryjumbo`.`turno` (`hora`, `dia_iddias`) VALUES (houur, daay);
INSERT INTO `queryjumbo`.`empaques` (`users_piochaid`, `tiempoDeEnvio`, `userinformation_id`, `index`, `tipo`) VALUES (piocha, mili,id,inx,tipe);

END
