<?php
declare(strict_types=1);

/**
 * Tarifas máximas comerciales del SOAT 2026 (total a pagar por el usuario: prima + contribución ADRES 52% + tasa RUNT $2.400).
 * Fuente de transcripción: tabla "Tarifas máximas comerciales del SOAT 2026" publicada por Fasecolda,
 * que cita la Circular Externa 022 de 2025 de la Superintendencia Financiera de Colombia.
 * https://www.fasecolda.com/wp-content/uploads/Tarifas-SOAT-2026-referencia.pdf  (revisado 2026-11-23)
 * Formato de fila: [código, descripción, total COP]
 */
return [
    'fuente' => 'Circular Externa 022 de 2025 (Superintendencia Financiera de Colombia), tabla publicada por Fasecolda',
    'fuente_url' => 'https://www.fasecolda.com/wp-content/uploads/Tarifas-SOAT-2026-referencia.pdf',
    'revision' => '2026-11-23',
    'grupos' => [
        ['slug' => 'motos', 'nombre' => 'Motos', 'filas' => [
            [100, 'Ciclomotor', 124100],
            [110, 'Menos de 100 c.c.', 256200],
            [120, 'De 100 a 200 c.c.', 343300],
            [130, 'Más de 200 c.c.', 761400],
            [140, 'Motocarros, tricimotos y cuadriciclos', 386900],
            [150, 'Motocarro de 5 pasajeros', 386900],
        ]],
        ['slug' => 'autos-familiares', 'nombre' => 'Autos familiares', 'filas' => [
            [511, 'Menos de 1.500 c.c., 0 a 9 años', 447300],
            [512, 'Menos de 1.500 c.c., 10 años o más', 592900],
            [521, '1.500 a 2.500 c.c., 0 a 9 años', 544700],
            [522, '1.500 a 2.500 c.c., 10 años o más', 677400],
            [531, 'Más de 2.500 c.c., 0 a 9 años', 636000],
            [532, 'Más de 2.500 c.c., 10 años o más', 754300],
        ]],
        ['slug' => 'camperos-camionetas', 'nombre' => 'Camperos y camionetas', 'filas' => [
            [211, 'Menos de 1.500 c.c., 0 a 9 años', 792800],
            [212, 'Menos de 1.500 c.c., 10 años o más', 953000],
            [221, '1.500 a 2.500 c.c., 0 a 9 años', 946600],
            [222, '1.500 a 2.500 c.c., 10 años o más', 1121400],
            [231, 'Más de 2.500 c.c., 0 a 9 años', 1110300],
            [232, 'Más de 2.500 c.c., 10 años o más', 1274000],
        ]],
        ['slug' => 'seis-o-mas-pasajeros', 'nombre' => 'Vehículos para seis o más pasajeros', 'filas' => [
            [611, 'Menos de 2.500 c.c., 0 a 9 años', 797300],
            [612, 'Menos de 2.500 c.c., 10 años o más', 1017700],
            [621, '2.500 c.c. o más, 0 a 9 años', 1067300],
            [622, '2.500 c.c. o más, 10 años o más', 1281600],
        ]],
        ['slug' => 'autos-negocios-taxis', 'nombre' => 'Autos de negocios y taxis', 'filas' => [
            [711, 'Menos de 1.500 c.c., 0 a 9 años', 281900],
            [712, 'Menos de 1.500 c.c., 10 años o más', 352000],
            [721, '1.500 a 2.500 c.c., 0 a 9 años', 350000],
            [722, '1.500 a 2.500 c.c., 10 años o más', 432400],
            [731, 'Más de 2.500 c.c., 0 a 9 años', 451400],
            [732, 'Más de 2.500 c.c., 10 años o más', 529300],
        ]],
        ['slug' => 'carga-mixto', 'nombre' => 'Vehículos de carga o mixtos', 'filas' => [
            [310, 'Menos de 5 toneladas', 888400],
            [320, 'De 5 a 15 toneladas', 1282800],
            [330, 'Más de 15 toneladas', 1621900],
        ]],
        ['slug' => 'oficiales-especiales', 'nombre' => 'Oficiales especiales', 'filas' => [
            [410, 'Menos de 1.500 c.c.', 999500],
            [420, '1.500 a 2.500 c.c.', 1260200],
            [430, 'Más de 2.500 c.c.', 1510600],
        ]],
        ['slug' => 'servicio-publico', 'nombre' => 'Servicio público', 'filas' => [
            [810, 'Buses y busetas de servicio público urbano', 673300],
            [910, 'Servicio público intermunicipal, menos de 10 pasajeros', 665500],
            [920, 'Servicio público intermunicipal, 10 o más pasajeros', 965300],
        ]],
    ],
];
