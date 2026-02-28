
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="../../src/css/login_admin.css">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width:400px;">
    <div class="card shadow p-4">
        <h4 class="text-center mb-4">Panel Administrativo</h4>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger">
                Usuario o contraseña incorrectos
            </div>
        <?php endif; ?>

        <form action="validar_login.php" method="POST">
            <div class="mb-3">
                <label>Usuario</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Contraseña</label>
                <input type="password" name="clave" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark w-100">
                Ingresar
            </button>
        </form>
    </div>
</div>

</body>
</html>
