CREATE DEFINER=`admin`@`localhost` PROCEDURE `getTurnos`(in piocha varchar(4))
BEGIN
SELECT indez,users_piochaid,dianame,hora,tiempoDeEnvio
FROM empaques INNER JOIN turno 
     ON empaques.idemp = turno.idturno
        INNER JOIN dia 
     ON   turno.dia_iddias = dia.iddias
     WHERE users_piochaid = piocha
ORDER BY empaques.indez;

END