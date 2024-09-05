<?php
require_once 'config.php';

$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
