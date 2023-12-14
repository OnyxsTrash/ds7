<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <p class="error">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>
        <form class="login-form" action="?action=login_submit" method="post">
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="contrasena" id="contrasena" name="contrasena" required>
            </div>
            <button 
                type="submit"
                class="login-btn"
            >
                Iniciar Sesión
            </button>
        </form>
    </div>
</body>

</html>