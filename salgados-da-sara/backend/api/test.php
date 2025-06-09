<?php
// Arquivo de teste para verificar se o PHP está funcionando
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

echo json_encode([
    'success' => true,
    'message' => 'Backend PHP está funcionando!',
    'timestamp' => date('Y-m-d H:i:s'),
    'php_version' => phpversion()
]);
?>