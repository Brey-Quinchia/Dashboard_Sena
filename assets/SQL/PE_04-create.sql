CREATE TABLE `PE_04` (
    `id` int(11) NOT NULL,
    `id_ficha` int(10) DEFAULT NULL,
    `estado_curso` varchar(30) DEFAULT NULL,
    `nivel_formacion` varchar(30) DEFAULT NULL,
    `tipo_formacion` varchar(30) DEFAULT NULL,
    `modalidad_formacion` varchar(30) DEFAULT NULL,
    `nombre_responsable` varchar(100) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `update_at` timestamp NULL DEFAULT NULL
)