<?php
$servername = "localhost"; // Servidor de base de datos
$username = "root"; // El nombre de usuario de tu base de datos
$password = ""; // La contraseña de tu base de datos
$dbname = "agiva"; // El nombre de la base de datos
// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

$response = array('status' => '', 'message' => '');

// Verificar la conexión
if ($conexion->connect_error) {
    $response['status'] = 'error';
    $response['message'] = "Conexión fallida: " . $conexion->connect_error;
    echo json_encode($response);
}
