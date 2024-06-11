<!DOCTYPE html>
<html>
<head>
    <title>Crear Empleado</title>
</head>
<body>
    <h2>Crear Empleado</h2>
    <form action="index.php?action=create" method="POST">
        <label>Nombre:</label>
        <input type="text" name="name" required>
        <label>Posición:</label>
        <input type="text" name="position" required>
        <label>Salario:</label>
        <input type="text" name="salary" required>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
