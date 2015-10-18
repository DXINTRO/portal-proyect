

select 
ad.idadjunto as idadjunto,
ad.idpadre as idpadre,
ad.padre as tabla_padre,
us.idusuario as usuario_id,
us.nombre as usuario_nombre,
ad.fecha as fecha,
ad.comentario as comentario,
ad.archivo as archivo,
ad.tipo as archivo_tipo,
ad.estado as estado
from adjunto ad inner join usuario us on ad.usuario = us.idusuario;

select * from vistaarchivo where idpadre=2 and tabla_padre='fc';
show columns from adjunto;

insert into adjunto(idpadre,padre,usuario,fecha,comentario,archivo,tipo,estado) 
values(2,'fc',1,'2015-04-05','adasdasdasd','2_fc_archivoql.jpg','jpg',1);
