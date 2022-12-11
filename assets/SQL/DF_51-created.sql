create table DF_51(
	
    id int auto_increment,
    id_ficha int(10), 
    estado_ficha varchar(30), 
    cupo_ficha int(3), 
    aprendices_activos int(3), 
    activos_con_ruta int(3), 
    activos_sin_ruta int(3),
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `update_at` timestamp NULL DEFAULT NULL, 
    primary key(id)
); 