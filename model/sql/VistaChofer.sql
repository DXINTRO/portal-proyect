select
cf.idchofer as chofer,
cf.rut as rut,
cf.nombre as nombre,
cf.estado as estado,
cf.codigo as codigo,
cf.clasificacion as clasificacion,
cl.nombre as clasificacion_nombre,
cf.vehiculo as vehiculo,
vh.tipo_vehi as tipo_vehiculo,
vh.patente as patente,
vh.descripcion as descripcion,
vh.km as km
from chofer cf inner join clasificacion cl on cl.idClasificacion=cf.clasificacion
inner join vehiculo vh on vh.idvehiculo=cf.vehiculo

