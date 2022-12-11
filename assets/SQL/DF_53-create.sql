CREATE TABLE DF_53 (
    `id` int(11) NOT NULL,
    `id_ficha` int(11) NOT NULL,
    `nombre_programa` varchar(255) DEFAULT NULL,
    `tipo_formacion` varchar(100) DEFAULT NULL,
    `clase_programa` varchar(100) DEFAULT NULL,
    `fecha_inicio` datetime DEFAULT NULL,
    `fecha_fin` datetime DEFAULT NULL,
    `estado_ficha` varchar(100) DEFAULT NULL,
    `aprendices_activos` int(4) DEFAULT NULL,
    `programada` varchar(2) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `update_at` timestamp NULL DEFAULT NULL
) 