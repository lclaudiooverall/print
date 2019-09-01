SELECT 

v.id,
v.producto_id,
v.precio_unidad,
v.cantidad,
v.total,
v.estado,
p.nombre

FROM venta v

INNER JOIN producto p ON v.producto_id=p.id

WHERE v.id=13709