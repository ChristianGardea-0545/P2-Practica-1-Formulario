<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = trim($_POST['login_correo']);
    $contrasena = $_POST['login_contrasena'];

    if (empty($correo) || empty($contrasena)) {
        echo "<script>
                alert('Por favor, ingresa tu correo y contraseña.');
                window.location.href = 'usuarios.php';
              </script>";
        exit();
    }

    $stmt = $conexion->prepare("SELECT id, nombre, contrasena FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($contrasena, $usuario['contrasena'])) {
            echo "<script>
                    alert('¡Bienvenido de nuevo, " . $usuario['nombre'] . "!');
                    window.location.href = 'index.html';
                  </script>";
        } else {
            echo "<script>
                    alert('Contraseña incorrecta.');
                    window.location.href = 'usuarios.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('No existe una cuenta con ese correo electrónico.');
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