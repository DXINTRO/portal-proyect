CREATE DEFINER=`admin`@`localhost` PROCEDURE `getTurnForPiocha`(in piocha varchar(4),in dia int(5),in turn1 int(5),in turn2 int(5))
BEGIN
SELECT turno.dia_iddias,turno.hora,empaques.users_piochaid
FROM queryjumbo.turno
INNER JOIN empaques ON turno.idturno=empaques.idemp 
where (turno.dia_iddias like dia) and (empaques.users_piochaid like piocha) and (turno.hora like turn1 or turno.hora like turn2) ;

END