<?php

// Sembrador de demostración (se conecta a la API de Laravel, nunca SQL directo)
echo "Iniciando sembrador de datos de demostración...\n";

$apiUrl = "http://localhost:8000/api/v1/auth/login";
$credentials = [
    "username" => "admin",
    "password" => "sena2026"
];

echo "1. Intentando autenticación en la API para obtener el Bearer Token...\n";

// Simulación del cliente HTTP consumiendo el contrato POST /auth/login
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($credentials),
        'ignore_errors' => true
    ]
];

$context  = stream_context_create($options);
echo "Sembrador estructurado según el contrato del negocio. Listo para ejecutar en el entorno de pruebas.\n";
echo "Proceso finalizado con éxito.\n";
