<?php
$SERVER = "localhost:3307";
$user = "root";
$pass = "";
$db = "pagina final";

$conexion = new mysqli($SERVER, $user, $pass, $db);

// Verificar conexión
if ($conexion->connect_errno) {
    die("Conexión fallida: " . $conexion->connect_error);
} else  { 
    echo "Conectado";
}

// Obtener datos del formulario
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
$grado = $_POST['grado'];
$tipo_tarjeta = $_POST['tipo-tarjeta'];
$numero_tarjeta = mysqli_real_escape_string($conexion, $_POST['numero-tarjeta']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$password = mysqli_real_escape_string($conexion, $_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash de contraseña

// Mapeo del tipo de documento y grado
$tipo_documento = 0; // Asignación predeterminada o lógica para mapear con base de datos
$grado_id = 0; // Asignación predeterminada o lógica para mapear con base de datos

// Asignaciones manuales para tipo de documento y grado según los valores
switch ($tipo_tarjeta) {
    case "tarjeta de identidad":
        $tipo_documento = 1;
        break;
    case "Cedula de ciudadania":
        $tipo_documento = 2;
        break;
    case "Cedula extranjera":
        $tipo_documento = 3;
        break;
}

switch ($grado) {
    case "primero":
        $grado_id = 1;
        break;
    case "segundo":
        $grado_id = 2;
        break;
    case "tercero":
        $grado_id = 3;
        break;
}

// Verificar si grado_id está mapeado correctamente
if ($grado_id === 0) {
    die("Error: Grado no válido.");
}

// Preparar la consulta SQL
$sql = "INSERT INTO usuario (Nombre, Apellido, Tipo_Documento, N_Tarjeta, Correo, Grado, Contraseña) 
        VALUES ('$nombre', '$apellido', $tipo_documento, $numero_tarjeta, '$correo', $grado_id, '$hashed_password')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Registro guardado exitosamente";
} else {
    echo "Error al insertar: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
