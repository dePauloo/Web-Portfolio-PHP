<?php
header('Content-Type: application/json');

require_once 'koneksi.php';

$sql = "SELECT label, value FROM chartt";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    http_response_code(500);
    echo json_encode(['error' => 'Prepare failed']);
    exit;
}

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode(['error' => 'Execute failed']);
    exit;
}

$result = $stmt->get_result();
$labels = [];
$values = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['label'];
    $values[] = (int) $row['value'];
}

echo json_encode([
    'labels' => $labels,
    'values' => $values
]);

$stmt->close();
$conn->close();