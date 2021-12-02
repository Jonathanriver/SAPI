<?php
if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location:../../Login.php');
}


$id_user = $_SESSION['SESS_MEMBER_ID'];
$id_perfil = $_SESSION['SESS_MEMBER_ID_PERFIL'];
