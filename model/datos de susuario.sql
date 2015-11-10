create database queryjumbo;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


use queryjumbo;

 SELECT *
FROM users 
INNER JOIN userinformation ON  users.piochaid = userinformation.users_piochaid
INNER JOIN subcripccion  ON   userinformation.users_piochaid = subcripccion.users_piochaid
INNER JOIN groups     ON   users.groups_groupid = groups.groupid
INNER JOIN  timessent ON  users.piochaid = timessent.users_piochaid
INNER JOIN  suspencion ON users.piochaid = suspencion.users_piochaid;
  
  select * from suspencion;

  call getUsuarioValido('dxintro@hotmail.com','e10adc3949ba59abbe56e057f20f883e',1);
  
  
  
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
  call setTurnos("c60",200,401,0800,1,1,11413868610000);
  call setTurnos("c60",200,402,0800,1,1,11413868610000);
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
  call setTurnos("c60",200,400,0800,1,1,11413868610000);
/* c60 con el id $$ pudio un 400 alas 0800, en la fila 1 tipo 1 alas 24543date*/
  
  
  call getTurnos('c60');
  
  
  
  
  
  
  
  
 SELECT id,piochaid,email,user_passwd,disabled,displayname,displayapellidom,displayapellidop,substatus,admin,tipoduser,tiempoDesde,tiempoAsta,regaladode,released,suspencion.desde,suspencion.asta
FROM users 
INNER JOIN userinformation ON  users.piochaid = userinformation.users_piochaid
INNER JOIN subcripccion  ON   userinformation.users_piochaid = subcripccion.users_piochaid
INNER JOIN groups     ON   users.groups_groupid = groups.groupid
INNER JOIN  timessent ON  users.piochaid = timessent.users_piochaid
INNER JOIN  suspencion ON users.piochaid = suspencion.users_piochaid;







/*insert de los grupos el 0 es admin el 2 modedaror y el 4 usuario*/


INSERT INTO `queryjumbo`.`groups` (`groupid`, `admin`, `tipoduser`) VALUES ('0', '1', '2');
INSERT INTO `queryjumbo`.`groups` (`groupid`, `admin`, `tipoduser`) VALUES ('2', '0', '1');
INSERT INTO `queryjumbo`.`groups` (`groupid`, `admin`, `tipoduser`) VALUES ('4', '0', '0');

/*DELETE FROM `queryjumbo`.`groups` WHERE `groupid`='4';
DELETE FROM `queryjumbo`.`groups` WHERE `groupid`='0';
DELETE FROM `queryjumbo`.`groups` WHERE `groupid`='2';timessent*/


/*inserta datos de la carrera */
INSERT INTO `queryjumbo`.`carrera` (`nombre`, `descripcion`, `año`) VALUES ('robotica', 'carrera de informatica', '2013');
INSERT INTO `queryjumbo`.`carrera` (`nombre`, `descripcion`, `año`) VALUES ('ololl ', 'medicina', '2015');

/*ahora recien de puede agregar un usuario xd y despues su informacion*/
INSERT INTO `queryjumbo`.`users` (`piochaid`, `email`, `user_passwd`, `disabled`, `groups_groupid`) VALUES ('c60', 'dxintro@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0',  '500');

INSERT INTO `queryjumbo`.`userinformation` (`users_piochaid`,`displayname`, `displayapellidom`, `displayapellidop`, `fechanaciminto`, `carrera_idcarrera`, `cellphone`, `otrophone`, `direccion`) VALUES ('c60','daniel', 'perez', 'romo', '12-12-1989', '401', '867788', '666262817', 'casasaas');

/*agregamos la subcripcion y listo donde infinido es 1 no tomara encuenta los date  , substatus es 1 esta habilitado si no :( */
INSERT INTO `queryjumbo`.`subcripccion` (`desde`, `asta`, `indefinido`, `substatus`, `users_piochaid`) VALUES ('2008-7-04', '2016-7-04', '1', '1', 'c60');


/*inserta detos del tiempo de envio*/

INSERT INTO `queryjumbo`.`timessent` (`timeatual`, `timeactual2`, `tiempoDesde`, `tiempoAsta`,`regaladode`, `users_piochaid`) VALUES ('2015-08-04', '2015-08-04', '2015-12-04', '2015-08-04','c61','c60');
/*inserta  datos de suspencion  relased es 1 :( si es 0 :)*/


 INSERT INTO `queryjumbo`.`suspencion` (`released`, `motivo`, `desde`, `asta`, `users_piochaid`) VALUES ('0', 'como chicle', '2008-7-04', '2016-7-04','C60');






--------------------------------------------------------------------------------------------------------
/*agregar turnos a la bd*/
/*primero se crea la planilla donde 1 es activa*/
INSERT INTO `queryjumbo`.`planilla` (`fechainicio`, `fechafinal`, `comntario`, `stado`) VALUES ('2015-11-08', '2015-11-15', 'planilla culia', '1');
/*despues se le establese su dimencionado*/
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('5', '6', '4', '3', '4', '5', '6', '3', '7');
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('4', '5', '3', '3', '2', '3', '4', '6', '8');
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('6', '5', '7', '8', '9', '7', '4', '7', '4');
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('5', '11', '10', '6', '4', '2', '7', '8', '11');
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('8', '7', '6', '4', '7', '8', '9', '3', '8');
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('6', '5', '4', '7', '8', '9', '7', '5', '4');
INSERT INTO `queryjumbo`.`redimencionado` (`8:00`, `9:00`, `10:30`, `12:00`, `12:30`, `14:00`, `15:30`, `17:30`, `19:00`) VALUES ('6', '5', '7', '4', '6', '7', '8', '5', '6');

SELECT * FROM queryjumbo.planilla;
SELECT * FROM queryjumbo.redimencionado;

/* insertamos del diaas  de la planillas*/
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '100', 'Lunes');
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '101', 'Martes');
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '102', 'Miercoles');
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '103', 'Jueves');
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '104', 'Viernes');
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '105', 'Sabado');
INSERT INTO `queryjumbo`.`dia` (`planilla_idplanilla`, `redimencionado_redimencionadoid`, `dianame`) VALUES ('300', '106', 'Domingo');



/*ahora cada usuario insertara lo siguiente */
INSERT INTO `queryjumbo`.`turno` (`hora`, `dia_iddias`) VALUES (0800, '400');/* lunes*/
INSERT INTO `queryjumbo`.`turno` (`hora`, `dia_iddias`) VALUES (1200, '401');/*martes*/
INSERT INTO `queryjumbo`.`turno` (`hora`, `dia_iddias`) VALUES (1500, '404');/*jueves*/
INSERT INTO `queryjumbo`.`turno` (`hora`, `dia_iddias`) VALUES (1030, '402');/*viernes*/



/*ahora cada usuario  y sus turnos de cada select */
  
  call setTurnos("c60",200,406,'900',1,1,11413868610000);
/* c60 con el id $$ pudio un 400 alas 0800, en la fila 1 tipo 1 alas 24543date*/
  
  
SET FOREIGN_KEY_CHECKS = 0; 
TRUNCATE turno; 
SET FOREIGN_KEY_CHECKS = 1;
SET FOREIGN_KEY_CHECKS = 0; 
TRUNCATE empaques; 
SET FOREIGN_KEY_CHECKS = 1;





setTurnos
SELECT indez,users_piochaid,dianame,hora,tiempoDeEnvio
FROM empaques INNER JOIN turno 
     ON empaques.idemp = turno.idturno
        INNER JOIN dia 
     ON   turno.dia_iddias = dia.iddias
     WHERE users_piochaid = piocha
GROUP BY dia.dianame;


select * from dia,empaques,turno where empaques.idemp= turno.idturno and dia.iddias=turno.dia_iddias and empaques.users_piochaid = 'c60';


