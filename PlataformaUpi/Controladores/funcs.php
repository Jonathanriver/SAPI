<?php
// session_start();

function cambiarPassword($pass_hash, $user_id)
{

	//print_r($user_id);die;
	global $mysqli;

	$stmt = $mysqli->prepare("UPDATE usuario SET password = ? WHERE idUsuario = ?");
	$stmt->bind_param('si', $pass_hash, $user_id);

	if ($stmt->execute()) {
		return true;
	} else {
		return false;
	}
}

function isNull($Nombre, $Apellido, $NDocumento, $Email, $Telefono, $Celular, $Direccion)
{
	if (strlen(trim($Nombre)) < 1 || strlen(trim($Apellido)) < 1 ||  strlen(trim($NDocumento)) < 1 || strlen(trim($Email)) < 1 || strlen(trim($Telefono)) < 1 || strlen(trim($Celular)) < 1 || strlen(trim($Direccion)) < 1) {
		return true;
	} else {
		return false;
	}
}

function isEmail($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	} else {
		return false;
	}
}

function minMax($min, $max, $valor)
{
	if (strlen(trim($valor)) < $min) {
		return true;
	} else if (strlen(trim($valor)) > $max) {
		return true;
	} else {
		return false;
	}
}

function usuarioExiste($usuario)
{
	global $mysqli; //valida desde la conexion 

	$stmt = $mysqli->prepare("SELECT idUsuario FROM usuario WHERE usuario = ? LIMIT 1");
	$stmt->bind_param("s", $usuario);
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;
	$stmt->close();

	if ($num > 0) {
		return true;
	} else {
		return false;
	}
}

function emailExiste($email)
{
	global $mysqli;

	$stmt = $mysqli->prepare("SELECT idUsuario FROM usuario WHERE correo = ? LIMIT 1");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;
	$stmt->close();

	if ($num > 0) {
		return true;
	} else {
		return false;
	}
}

function generateToken()
{
	$gen = md5(uniqid(mt_rand(), false));
	return $gen;
}

function hashPassword($password)
{
	$hash = password_hash($password, PASSWORD_DEFAULT);
	return $hash;
}

function resultBlock($errors)
{
	if (count($errors) > 0) {
		echo "<div id='error' class='alert alert-danger alert-dismissible fade show' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'>
    		<span aria-hidden='true'>&times;</span>
  			</button>
			<ul>";
		foreach ($errors as $error) {
			echo "<li>" . $error . "</li>";
		}
		echo "</ul>";
		echo "</div>";
	}
}

function registraUsuario($Nombre, $Apellido, $TpDocument, $NDocumento, $Rol, $Email, $Telefono, $Celular, $Direccion)
{

	global $mysqli;

	$stmt = $mysqli->prepare("INSERT INTO usuario (nombre,apellido, tpDocumento, cedula, tipo_Cargo, correo,telefono,celular,direccion) VALUES (?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param('sssssssss', $Nombre, $Apellido, $TpDocument, $NDocumento, $Rol, $Email, $Telefono, $Celular, $Direccion);

	if ($stmt->execute()) {
		return $mysqli->insert_id;
	} else {
		return 0;
	}
}

function isNullLogin($usuario)
{
	if (strlen(trim($usuario))) {
		return true;
	} else {
		return false;
	}
}


function login($usuario)
{
	global $mysqli;

	$stmt = $mysqli->prepare("SELECT idUsuarios, documento FROM usuarios WHERE documento = ? LIMIT 1");
	$stmt->bind_param("s", $usuario);
	$stmt->execute();
	$stmt->store_result();
	$rows = $stmt->num_rows;

	if ($rows > 0) {

		$stmt->bind_result($idUsuario, $user);
		$stmt->fetch();

		$validaPassw = $usuario == $user;

		if ($validaPassw) {
			lastSession($idUsuario);
			$_SESSION['id_usuario'] = $idUsuario;
			$_SESSION['documento'] = $user;
			// $_SESSION['status'] = " Su Usuario Se encuentra Registrado!!";
			header('Location: ./index.php');
			// echo "Biem";
		} else {
			$errors = "El Numero no se Encontro <strong>Incorrecto!</strong>";
		}
	} else {
		// $errors = "El Número de Documento no <strong>Existe!</strong>";
		// $_SESSION['status'] = " Su Usuario no se encuentra en el sistema Registrese Aquí!!";
		header("location:./Registrate.php");
	}
	return $errors;
}

function lastSession($idUsuario)
{
	global $mysqli;

	$stmt = $mysqli->prepare("UPDATE usuarios SET last_session=NOW()  WHERE idUsuarios = ?");
	$stmt->bind_param('s', $idUsuario);
	$stmt->execute();
	$stmt->close();
}

function generaTokenPass($user_id)
{
	global $mysqli;

	$token = generateToken();

	$stmt = $mysqli->prepare("UPDATE usuario SET token_password=?, password_request=1 WHERE idUsuario = ?");
	$stmt->bind_param('ss', $token, $user_id);
	$stmt->execute();
	$stmt->close();

	return $token;
}

function getValor($campo, $campoWhere, $valor)
{
	global $mysqli;

	$stmt = $mysqli->prepare("SELECT $campo FROM usuario WHERE $campoWhere = ? LIMIT 1");
	$stmt->bind_param('s', $valor);
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;

	if ($num > 0) {
		$stmt->bind_result($_campo);
		$stmt->fetch();
		return $_campo;
	} else {
		return null;
	}
}

function getPasswordRequest($idUsuario)
{
	global $mysqli;

	$stmt = $mysqli->prepare("SELECT password_request FROM usuario WHERE idUsuario = ?");
	$stmt->bind_param('i', $idUsuario);
	$stmt->execute();
	$stmt->bind_result($_id);
	$stmt->fetch();

	if ($_id == 1) {
		return true;
	} else {
		return null;
	}
}

function cambiaPassword($pass_hash, $user_id)
{
	global $mysqli;

	$stmt = $mysqli->prepare("UPDATE usuario SET password = ? WHERE idUsuario = ? ");
	$stmt->bind_param($pass_hash, $user_id);

	if ($stmt->execute()) {
		return true;
	} else {
		return false;
	}
}
