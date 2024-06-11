<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Empleado</title>
</head>
<body>
    <h2>Eliminar Empleado</h2>
    <form action="index.php?action=delete" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <p>¿Estás seguro de que deseas eliminar este empleado?</p>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
