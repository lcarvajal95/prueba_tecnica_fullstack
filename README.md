[API REST - Usuarios Recientes.txt](https://github.com/user-attachments/files/21737087/API.REST.-.Usuarios.Recientes.txt)
API REST - Usuarios Recientes

Descripción
Este proyecto implementa una API REST en PHP para obtener los usuarios registrados en los últimos 30 días.  


Tecnologías utilizadas

- PHP 8.3 (modo servidor embebido)
- MySQL 8 (gestión de base de datos)
- Extensión mysqli para conexión a MySQL
- JSON para la respuesta de datos

Endponit http://localhost:8000/usuarios/recientes
Metodo GET

Respuesta de la API

[
    {
        "id": 1,
        "nombre": "Juan Pérez",
        "email": "juan@example.com",
        "fecha_registro": "2025-08-09 23:56:18"
    },
    {
        "id": 2,
        "nombre": "Camila Gómez",
        "email": "camila@example.com",
        "fecha_registro": "2025-08-09 23:56:18"
    }
]
