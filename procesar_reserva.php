<?php
include 'database/db_connection.php'; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST['entrada'];
    $salida = $_POST['salida'];
    $codigo_promocional = $_POST['codigo_promocional'];
    $adultos = $_POST['adultos'];  // Es un array
    $ninos = $_POST['ninos'];  // Es un array

    // Preparar la consulta SQL
    $sql = "INSERT INTO reservas (entrada, salida, codigo_promocional) VALUES ('$entrada', '$salida', '$codigo_promocional')";
    if ($conn->query($sql) === TRUE) {
        $reserva_id = $conn->insert_id;

        // Insertar los datos de cada habitación
        foreach ($adultos as $key => $adulto) {
            $nino = $ninos[$key];
            $sql_habitacion = "INSERT INTO habitaciones (reserva_id, adultos, ninos) VALUES ('$reserva_id', '$adulto', '$nino')";
            $conn->query($sql_habitacion);
        }

        echo "Reserva realizada con éxito!";
    } else {
        echo "Error al procesar la reserva: " . $conn->error;
    }
}
