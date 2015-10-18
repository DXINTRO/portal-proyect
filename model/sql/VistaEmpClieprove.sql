select 
ec.idemp_clieprove as idemp_clieprove,
ec.empresa as empresa,
ec.clieprove as clieprove,
e.nombre as nombre,
e.estado as estado,
ec.defecto as defecto
from emp_clieprove ec inner join empresa e on ec.empresa=e.idempresa;