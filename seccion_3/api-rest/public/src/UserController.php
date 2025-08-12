<?php
class UserController {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getPdo();
    }

    /**
     * GET /usuarios/recientes
     * Retorna usuarios registrados en los últimos 30 días
     */
    public function getUsuariosRecientes(): void {
        try {
            $sql = "SELECT id, nombre, email, fecha_registro
                    FROM usuarios
                    WHERE fecha_registro >= (NOW() - INTERVAL 30 DAY)
                    ORDER BY fecha_registro DESC";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll();

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(
                    ['data' => $usuarios],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
                    );
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Error en consulta', 'message' => $e->getMessage()]);
        }
    }
}