
select
pv.idplanilla as idplanilla,
pv.usuario as usuario_id,
u.rut as usuario_rut,
u.nombre as usuario_nombre,
pv.chofer as chofer_id,
c.rut as chofer_rut,
c.nombre as chofer_nombre,
v.idvehiculo as vehiculo_id,
v.tipo_vehi as vehiculo_tipo,
v.patente as vehiculo_patente,
v.km as vehiculo_km,
pv.clasificacion  as clasificacion_id,
cf.nombre as clasificacion_nombre,
pv.fecha as fecha,
pv.km as km,
pv.lt as lt,
pv.rendimiento as rendimineto,
pv.obs as obs
from planilla_vehi pv 
inner join usuario u on pv.usuario=u.idusuario
inner join chofer c  on pv.chofer=c.idchofer
inner join vehiculo v on pv.vehiculo=v.idvehiculo
inner join clasificacion cf on pv.clasificacion=cf.idclasificacion