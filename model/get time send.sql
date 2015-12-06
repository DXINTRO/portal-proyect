CREATE DEFINER=`admin`@`localhost` PROCEDURE `getTimeSend`(in id int(5))
BEGIN
SELECT timessent.timeid,timessent.released,timessent.tiempoDesde,timessent.tiempoAsta,timessent.regaladode,userinformation.id,userinformation.users_piochaid,userinformation.displayname,userinformation.displayapellidop
FROM queryjumbo.timessent
INNER JOIN userinformation ON userinformation.users_piochaid =timessent.users_piochaid 
where userinformation.id like id;
END