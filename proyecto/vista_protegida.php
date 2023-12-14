<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
    <?php
    
    session_start();
    if (!isset($_SESSION['token'])) {
        header("Location: index.php");
    }

    $token = $_SESSION['token'];
    $decoded = $controller->verificarToken($token);

    if (!$decoded) {
        header("Location: index.php");
    }
    ?>
    <div class="usuario-info">
        <h2>Bienvenido, <?php echo $decoded->nombre; ?></h2>
    </div>
    
    <header class="home-header">
        <div class="user-info">
            <h2><?php echo $decoded->nombre; ?></h2>
            <button class="logout-btn">Cerrar Sesión</button>
        </div>
    </header>

    <main class="home-main">
        <div class="account-info">
            <h3>Número de Cuenta Bancaria</h3>
            <p>06-98-98-889966-6</p>

            <h3>Saldo</h3>
            <p>$1,000,000.00</p>

            <h3>Transacciones Recientes</h3>
            <ul class="transactions-list">
                <li>Compra en Tienda XYZ - $50.00</li>
                <li>Transferencia a Amigo - $100.00</li>
                
            </ul>
        </div>

        <aside class="transaction-options">
            <h3>Realizar Transacciones</h3>
            <button class="transaction-btn">A Cuentas Propias</button>
            <button class="transaction-btn">A Terceros</button>
            <button class="transaction-btn">Internacionales</button>
        </aside>

        <div id="transactionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeTransactionModal()">&times;</span>
            <h2>Realizar Transacción</h2>
            <div class="form-group">
                <label for="destinationAccount">Número de Cuenta del Destino:</label>
                <input type="text" id="destinationAccount" name="destinationAccount" required>
            </div>
            <div class="form-group">
                <label for="recipientName">Nombre del Destinatario:</label>
                <input type="text" id="recipientName" name="recipientName" required>
            </div>
            <div class="form-group">
                <label for="amount">Monto:</label>
                <input type="text" id="amount" name="amount" required>
            </div>
            <button class="transaction-btn" onclick="performTransaction()">Realizar Transacción</button>
        </div>
    </div>

    </main>
</body>
</html>
