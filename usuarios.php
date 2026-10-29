<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>P2-Practica 1 Formulario</title>
    <style>
        body { 
            font-family: Arial, sans-serif; margin: 0; background-color: #eef2f5; color: #333333;
        }

        header { 
            background-color: #003da5; color: white; text-align: center; padding: 25px 10px;
        }

        header h1 {
            margin: 0; font-size: 32px;
        }

        nav { 
            background-color: #4a2c11; text-align: center; padding: 12px;
        }

        nav a { 
            color: white; text-decoration: none; background-color: #003da5; padding: 10px 20px; border-radius: 20px; font-weight: bold; display: inline-block;
        }

        .contenedor-formularios {
            background-color: white; width: 320px; margin: 40px auto; padding: 25px 30px; text-align: left; border-radius: 10px; border: 1px solid #d0d0d0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        h3 {
            color: #003da5; margin-top: 0; margin-bottom: 15px; border-bottom: 2px solid #003da5; padding-bottom: 5px; font-size: 20px;
        }

        .separador {
            margin-top: 30px;
        }

        label {
            font-size: 14px; font-weight: bold; color: #444444;
        }

        input { 
            width: 100%; padding: 9px; margin: 6px 0 16px; border: 1px solid #cccccc; border-radius: 5px; box-sizing: border-box;
        }

        button { 
            background-color: #003da5; color: white; padding: 10px; border: none; border-radius: 5px; width: 100%; font-weight: bold; font-size: 15px; cursor: pointer;
        }

        button:hover {
            background-color: #00266b;
        }

        footer { 
            background-color: #001f5c; color: white; text-align: center; padding: 20px; margin-top: 40px;
        }

        footer p {
            margin: 5px 0; font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Libreria Nakano</h1>
    </header>

    <nav>
        <a href="index.html">Pagina Principal</a>
    </nav>

    <div class="contenedor-formularios">
        
        <form action="login_proceso.php" method="POST">
            <h3>Iniciar sesión</h3>

            <label for="login_correo">Correo electrónico:</label>
            <input type="email" id="login_correo" name="login_correo" required>

            <label for="login_contrasena">Contraseña:</label>
            <input type="password" id="login_contrasena" name="login_contrasena" required>

            <button type="submit">Ingresar</button>
        </form>

        <form action="registro_proceso.php" method="POST" class="separador">
            <h3>¿No tienes cuenta? Regístrate</h3>

            <label for="reg_nombre">Nombre Completo:</label>
            <input type="text" id="reg_nombre" name="reg_nombre" required>

            <label for="reg_correo">Correo electrónico:</label>
            <input type="email" id="reg_correo" name="reg_correo" required>

            <label for="reg_contrasena">Contraseña:</label>
            <input type="password" id="reg_contrasena" name="reg_contrasena" required>

            <button type="submit">Registrar</button>
        </form>

    </div>

    <footer>
        <p><strong>Gardea Hernandez Christian David</strong></p>
        <p>Grupo: I | No. Control: 0545</p>
    </footer>

</body>
</html>