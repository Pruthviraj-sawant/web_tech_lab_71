<?php
// REST API Example
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        echo json_encode(["message" => "GET request received"]);
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        echo json_encode(["message" => "POST data received", "data" => $data]);
        break;

    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);
        echo json_encode(["message" => "PUT request", "updated_data" => $data]);
        break;

    case 'DELETE':
        echo json_encode(["message" => "DELETE request received"]);
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method Not Allowed"]);
        break;
}
?>
