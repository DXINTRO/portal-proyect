select
v.idvehiculo as idvehiculo,
v.tipo_vehi as tipo_vehi_id,
tv.descrip as tipo_vehi_nombre,
v.patente as patente,
v.descripcion as descripcion,
v.km as km
from vehiculo v inner join tipo_vehi tv 
on v.tipo_vehi=tv.idtipo_vehi;

