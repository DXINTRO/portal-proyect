
select 
p.idpago as idpago,
p.usuario as usuario_id,
u.nombre as usuario_nombre,
p.clieprove as clieprove_id,
cp.nombre as clieprove_nombre,
p.forma_pago as forma_pago_id,
tp.nombre as forma_pago_nombre,
p.documento_pag as documento_pago,
p.fecha as fecha_pago,
p.glosa as glosa,
p.correlativo as correlativo,
p.tipo as tipo,
p.estado as estado
from pago p 
inner join usuario u on p.usuario=u.idusuario 
inner join clieprove cp on p.clieprove = cp.id
inner join tipo_pago tp on p.forma_pago = tp.idtipo_pago;



