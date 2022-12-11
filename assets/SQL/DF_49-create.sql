create table DF_49(
	
    id int auto_increment,
    id_ficha int(10), 
    estado_ficha varchar(30),
    aprendices_matriculados int(3), 
    aprendices_con_certificado int(3), 
    aprendices_sin_certificado int(3),
    aprendices_sin_juicio int(3), 
    aprendices_reprobados int(3),
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `update_at` timestamp NULL DEFAULT NULL, 
    primary key(id)
); 