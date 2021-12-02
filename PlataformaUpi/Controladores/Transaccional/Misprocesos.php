<?php

$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
} else {
    mysqli_select_db($conn, 'supi');
}
// Import the file where we defined the connection to Database.     
// require_once "connection.php";

$per_page_record = 4;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $per_page_record;
$query = "SELECT * FROM registro_full INNER JOIN `registro` ON `registro_full`.`registro_idRegistro`=`registro`.`idRegistro`
INNER JOIN usuarios ON registro_full.`usuarios_idUsuarios`=usuarios.`idUsuarios`
INNER JOIN tipo_registro ON registro_full.`tipo_registro_idTipo_Registro`= tipo_registro.`idTipo_Registro` WHERE registro.usuarios_idUsuarios='$id_perfil' LIMIT $start_from, $per_page_record ";
$rs_result = mysqli_query($conn, $query);
