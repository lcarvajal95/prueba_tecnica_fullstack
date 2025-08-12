<?php
class UserController {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getPdo();
    }

    /*
    GET /usuarios/recientes
    Retorna usuarios registrados en los últimos 30 días
    */
    public function getUsuariosRecientes(): void {
        header('Content-Type: application/json; charset=utf-8');

        try {
            $sql = "SELECT id, nombre, email, fecha_registro
                    FROM usuarios
                    WHERE fecha_registro >= (NOW() - INTERVAL 30 DAY)
                    ORDER BY fecha_registro DESC";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Si no hay resultados
            if (empty($usuarios)) {
                http_response_code(404);
                echo json_encode([
                    "status" => "error",
                    "message" => "No se encontraron usuarios recientes",
                    "timestamp" => date("Y-m-d H:i:s")
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                return;
            }

            // Respuesta exitosa
            echo json_encode([
                "status" => "success",
                "data" => $usuarios,
                "total" => count($usuarios),
                "timestamp" => date("Y-m-d H:i:s")
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Error interno al obtener los usuarios recientes",
                "timestamp" => date("Y-m-d H:i:s"),
                "debug" => $e->getMessage()
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
    }
}

