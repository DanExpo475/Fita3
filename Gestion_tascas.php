<?php
$servername = "mysql-danexpo.alwaysdata.net";
$username = "danexpo";
$password = "daniel_carla";
$dbname = "daniel_carla_tascas";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar la inserción de eventos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addEvent'])) {
        $eventTitle = $_POST['eventTitle'];
        $eventType = $_POST['eventType'];
        $eventDate = $_POST['eventDate'];

        // Insertar evento en la base de datos
        $sql = "INSERT INTO eventos (tareas, descripcion, fecha, estado, personas_idpersonas) VALUES ('$eventTask', '$eventDescription', '$eventDate', '$eventStatus', '$personId')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
// Obtener eventos de la base de datos
$sql = "SELECT * FROM eventos";
$result = $conn->query($sql);

$conn->close();
?>
