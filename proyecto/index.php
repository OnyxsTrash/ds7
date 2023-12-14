<?php
require_once 'UsuarioModel.php';
require_once 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Dotenv\Dotenv;

class Controller {
    private $secret_key = "#Secr3TSe3D"; 

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

    public function mostrarLogin() {
        include 'login.php';
    }

    public function iniciarSesion($email, $contrasena) {
        $usuarioModel = new UsuarioModel();
        $resultado = $usuarioModel->verificarCredenciales($email, $contrasena);

        if ($resultado) {
            
            $token = $this->generarToken($resultado['id'], $resultado['nombre']);

            
            session_start();
            $_SESSION['token'] = $token;
            header("Location: ?action=vista_protegida");
            exit(); 
        } else {
            // Mostrar mensaje de error en la vista
            $error = "Credenciales inválidas";
            include 'login.php';
        }
    }

    private function generarToken($usuario_id, $nombre) {
        $payload = [
            'usuario_id' => $usuario_id,
            'nombre' => $nombre,
            'exp' => time() + (60 * 60), 
        ];

        return JWT::encode($payload, $this->secret_key);
    }

    public function mostrarVistaProtegida() {
        
        session_start();
        if (!isset($_SESSION['token'])) {
            header("Location: ?action=login");
            exit();
        }

        $token = $_SESSION['token'];
        $decoded = $this->verificarToken($token);

        if (!$decoded) {
            header("Location: ?action=login");
            exit();
        }

        include 'vista_protegida.php';
    }

    private function verificarToken($token) {
        try {
            return JWT::decode($token, $this->secret_key, ['HS256']);
        } catch (Exception $e) {
            return false;
        }
    }
}

$controller = new Controller();

// Rutas
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        $controller->mostrarLogin();
    } elseif ($_GET['action'] == 'vista_protegida') {
        $controller->mostrarVistaProtegida();
    } elseif ($_GET['action'] == 'login_submit' && isset($_POST['email'], $_POST['contrasena'])) {
        $controller->iniciarSesion($_POST['email'], $_POST['contrasena']);
    }
} else {
    $controller->mostrarLogin();
}
?>
