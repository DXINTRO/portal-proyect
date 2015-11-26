CREATE DEFINER=`admin`@`localhost` PROCEDURE `getdatos`(in wher text(200),in NUM int(2))
BEGIN

       IF NUM = 1 THEN 
SELECT id,users_piochaid as Piocha,displayname as Nombre,displayapellidop as Apellido1,displayapellidom as Apellido2,email as Email 
FROM queryjumbo.userinformation
INNER JOIN queryjumbo.users ON users.piochaid=userinformation.users_piochaid  where users_piochaid= wher; 
    ELSEIF NUM= 2 THEN
SELECT id,users_piochaid as Piocha,displayname as Nombre,displayapellidop as Apellido1,displayapellidom as Apellido2,email as Email 
FROM queryjumbo.userinformation
INNER JOIN queryjumbo.users ON users.piochaid=userinformation.users_piochaid  where displayname= wher; 
    ELSE
SELECT id,users_piochaid as Piocha,displayname as Nombre,displayapellidop as Apellido1,displayapellidom as Apellido2,email as Email 
FROM queryjumbo.userinformation
INNER JOIN queryjumbo.users ON users.piochaid=userinformation.users_piochaid  where email= wher; 
    END IF;
END