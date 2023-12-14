<?php

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

class UsuarioModel {
    private $conexion;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $host = "localhost";
        $usuario = "bancoadmin";
        $contrasena = "bancoadmin";
        $base_datos = "banco_online";

        $this->conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function obtenerUsuarioPorEmail($email) {
        $query = "CALL ObtenerUsuarioPorEmail(?, @usuario_id, @nombre, @hash_contrasena, @mensaje)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        
        $stmt->close();

        $result = $this->conexion->query("SELECT @usuario_id, @nombre, @hash_contrasena, @mensaje");
        $row = $result->fetch_assoc();

        return [
            'usuario_id' => $row['@usuario_id'],
            'nombre' => $row['@nombre'],
            'hash_contrasena' => $row['@hash_contrasena'],
            'mensaje' => $row['@mensaje'],
        ];
    }

    public function verificarCredenciales($email, $contrasena) {
        $usuario = $this->obtenerUsuarioPorEmail($email);

        if ($usuario['usuario_id'] !== null && password_verify($contrasena, $usuario['hash_contrasena'])) {
            return ['id' => $usuario['usuario_id'], 'nombre' => $usuario['nombre']];
        } else {
            return false;
        }
    }
}
?>
