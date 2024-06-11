<?php
require_once 'models/Employee.php';

class EmployeeController {
    public function create() {
        if ($_POST) {
            $employee = new Employee();
            $employee->name = $_POST['name'];
            $employee->position = $_POST['position'];
            $employee->salary = $_POST['salary'];

            if ($employee->create()) {
                header("Location: index.php");
            } else {
                echo "Error al crear el empleado.";
            }
        }
        include 'views/create.php';
    }

    public function read() {
        $employee = new Employee();
        $stmt = $employee->read();
        include 'views/read.php';
    }

    public function update() {
        $employee = new Employee();

        if ($_POST) {
            $employee->id = $_POST['id'];
            $employee->name = $_POST['name'];
            $employee->position = $_POST['position'];
            $employee->salary = $_POST['salary'];

            if ($employee->update()) {
                header("Location: index.php");
            } else {
                echo "Error al actualizar el empleado.";
            }
        } else {
            $employee->id = $_GET['id'];
            $stmt = $employee->read();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $employee->name = $row['name'];
            $employee->position = $row['position'];
            $employee->salary = $row['salary'];

            include 'views/update.php';
        }
    }

    public function delete() {
        if ($_POST) {
            $employee = new Employee();
            $employee->id = $_POST['id'];

            if ($employee->delete()) {
                header("Location: index.php");
            } else {
                echo "Error al eliminar el empleado.";
            }
        }
        include 'views/delete.php';
    }
}
?>
