<?php
$host = 'mysql-8001.dinaserver.com';
$dbname = 'delicias';
$user = 'delicias';
$pass = 'Penyarol1234$';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Error de connexió: " . $conn->connect_error);
}
?>
