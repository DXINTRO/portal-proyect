/*create database sofnetcl_sisweb;

create database queryjumbo;*/


use queryjumbo;

  select *
  from users   inner join userinformation on users.piochaid = users_piochaid   
  inner join  subcripccion  on userinformation.users_piochaid = subcripccion.users_piochaid;
  
  
  
  call getUsuarioValido('dxintro@hotmail.com','123456',1) ;
  
  
    select id,piochaid,email,user_passwd,disabled,suspencion_idsuspencion,groups_groupid,displayname,displayapellidom,displayapellidop,substatus
    from users inner join userinformation on users.piochaid = users_piochaid   
  inner join  subcripccion  on userinformation.users_piochaid = subcripccion.users_piochaid;
  






/*insert de los grupos el 0 es admin el 2 modedaror y el 4 usuario*/


INSERT INTO `queryjumbo`.`groups` (`groupid`, `admin`, `tipoduser`) VALUES ('0', '1', '2');
INSERT INTO `queryjumbo`.`groups` (`groupid`, `admin`, `tipoduser`) VALUES ('2', '0', '1');
INSERT INTO `queryjumbo`.`groups` (`groupid`, `admin`, `tipoduser`) VALUES ('4', '0', '0');

/*DELETE FROM `queryjumbo`.`groups` WHERE `groupid`='4';
DELETE FROM `queryjumbo`.`groups` WHERE `groupid`='0';
DELETE FROM `queryjumbo`.`groups` WHERE `groupid`='2';timessent*/


/*inserta datos de la carrera */
INSERT INTO `queryjumbo`.`carrera` (`nombre`, `descripcion`, `año`) VALUES ('robotica', 'carrera de informatica', '2013');
INSERT INTO `queryjumbo`.`carrera` (`nombre`, `descripcion`, `año`) VALUES ('enfermeria ', 'medicina', '2015');

/*inserta detos del tiempo de envio*/
INSERT INTO `queryjumbo`.`timessent` (`timeatual`, `timeactual2`, `timpoDeEnvio`, `tiempoLlimite`) VALUES ('2015-08-04', '2015-08-04', '2015-12-04', '2015-08-04');
/*inserta  datos de suspencion  relased es 1 :( si es 0 :)*/
INSERT INTO `queryjumbo`.`suspencion` (`released`, `motivo`, `desde`, `asta`) VALUES ('1', 'como chicle', '2008-7-04', '2016-7-04');

/*ahora recien de puede agregar un usuario xd y despues su informacion*/
INSERT INTO `queryjumbo`.`userinformation` (`displayname`, `displayapellidom`, `displayapellidop`, `fechanaciminto`, `carrera_idcarrera`, `cellphone`, `otrophone`, `direccion`, `users_piochaid`) VALUES ('daniel', 'perez', 'romo', '12-12-1989', '700', '867788', '666262817', 'casasaas', 'c60');

/*agregamos la subcripcion y listo donde infinido es 1 no tomara encuenta los date  , substatus es 1 esta habilitado si no :( */
INSERT INTO `queryjumbo`.`subcripccion` (`desde`, `asta`, `indefinido`, `substatus`, `users_piochaid`) VALUES ('2008-7-04', '2016-7-04', '1', '1', 'c60');




--------------------------------------------------------------------------------------------------------









