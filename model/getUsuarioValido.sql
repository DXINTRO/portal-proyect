CREATE DEFINER=`root`@`localhost` PROCEDURE `getUsuarioValido`(in log varchar(45),in pas varchar(60),in est int(1))
BEGIN
 SELECT id,piochaid,email,user_passwd,disabled,displayname,displayapellidom,displayapellidop,substatus,admin,tipoduser,tiempoDesde,tiempoAsta,regaladode,released,suspencion.desde,suspencion.asta
FROM users 
INNER JOIN userinformation ON  users.piochaid = userinformation.users_piochaid
INNER JOIN subcripccion  ON   userinformation.users_piochaid = subcripccion.users_piochaid
INNER JOIN groups     ON   users.groups_groupid = groups.groupid
INNER JOIN  timessent ON  users.piochaid = timessent.users_piochaid
INNER JOIN  suspencion ON users.piochaid = suspencion.users_piochaid

  where users.email=log and (users.user_passwd=pas and users.disabled=0) and subcripccion.substatus=est;
  
  
END