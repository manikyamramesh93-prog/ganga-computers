<?php
header('Content-Type: application/json');
$data = file_get_contents('php://input');

if ($data && file_put_contents('stock.json', $data) !== false) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Write failed']);
}
?>