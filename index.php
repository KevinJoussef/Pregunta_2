<?php
require_once 'controllers/EmployeeController.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller = new EmployeeController();

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'read':
        $controller->read();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->read();
        break;
}
?>
