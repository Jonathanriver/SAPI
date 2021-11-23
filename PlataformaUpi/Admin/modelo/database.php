<?php

$mysqli = new mysqli("localhost", "root", "", "supi");

if ($mysqli->connect_errno) {

    die('ERROR EN LA CONEXIÓN' . $mysqli->connect_error);
}
?>