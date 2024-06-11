<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Empleado</title>
</head>
<body>
    <h2>Actualizar Empleado</h2>
    <form action="index.php?action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label>Nombre:</label>
        <input type="text" name="name" value="<?php echo $employee->name; ?>" required>
        <label>Posición:</label>
        <input type="text" name="position" value="<?php echo $employee->position; ?>" required>
        <label>Salario:</label>
        <input type="text" name="salary" value="<?php echo $employee->salary; ?>" required>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
