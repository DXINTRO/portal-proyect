CREATE DEFINER=`admin`@`localhost` PROCEDURE `getmischangers`(in piochaD varchar(4))
BEGIN
SELECT timessent.timeid,timessent.released,timessent.tiempoDesde,timessent.tiempoAsta,timessent.regaladode,userinformation.id,userinformation.users_piochaid,userinformation.displayname,userinformation.displayapellidop
FROM queryjumbo.timessent
INNER JOIN userinformation ON userinformation.users_piochaid =timessent.users_piochaid 
where (timessent.released= 1) and (timessent.regaladode like piochaD);
END