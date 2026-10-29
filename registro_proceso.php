<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = trim($_POST['reg_nombre']);
    $correo = trim($_POST['reg_correo']);
    $contrasena = $_POST['reg_contrasena'];

    if (empty($nombre) || empty($correo) || empty($contrasena)) {
        echo "<script>
                alert('Por favor, llena todos los campos.');
                window.location.href = 'usuarios.php';
              </script>";
        exit();
    }

    $check_correo = $conexion->prepare("SELECT id FROM usuarios WHERE correo = ?");
    $check_correo->bind_param("s", $correo);
    $check_correo->execute();
    $resultado = $check_correo->get_result();

    if ($resultado->num_rows > 0) {
        echo "<script>
                alert('El correo electrónico ya está registrado. Intenta iniciar sesión.');
                window.location.href = 'usuarios.php';
              </script>";
        $check_correo->close();
        exit();
    }
    $check_correo->close();

    $password_hash = password_hash($contrasena, PASSWORD_BCRYPT);

    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $password_hash);

    if ($stmt->execute()) {
        echo "<script>
                alert('¡Registro exitoso! Ahora puedes iniciar sesión.');
                window.location.href = 'usuarios.php';
              </script>";
    } else {
        echo "<script>
                alert('Ocurrió un error al registrar el usuario.');
                window.location.href = 'usuarios.php';
              </script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    header("Location: usuarios.php");
    exit();
}
?>