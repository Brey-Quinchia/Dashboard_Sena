create table df53(
	ficha int not null,
    programa varchar(255), 
    tipo_formacion varchar(100), 
    clase_programa varchar(100),
    fecha_inicio datetime, 
    fecha_fin datetime, 
    estado_ficha varchar(100), 
    aprendices_activos int(4),
    programada varchar(2), 
    primary key(ficha)
); 