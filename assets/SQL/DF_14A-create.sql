create table DF_14A(
	
    id int auto_increment,
    id_ficha int(10), 
    tipo_respuesta varchar(30), 
    ampliacion_cobertura varchar(5), 
    en_transito int(3),
    en_induccion int(3), 
    en_formacion int(3), 
    en_condicionado int(3), 
    en_aplazado int(3), 
    en_retiroVolutario int(3), 
    en_desercion int(3), 
    en_cancelado int(3), 
    con_certificado int(3), 
    sin_certificado int(3),
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `update_at` timestamp NULL DEFAULT NULL, 
    primary key(id)
); 