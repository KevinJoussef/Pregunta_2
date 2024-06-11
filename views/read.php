<!DOCTYPE html>
<html>
<head>
    <title>Leer Empleados</title>
</head>
<body>
    <h2>Lista de Empleados</h2>
    <a href="index.php?action=create">Crear Nuevo Empleado</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Posición</th>
            <th>Salario</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['position']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td>
                    <a href="index.php?action=update&id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="index.php?action=delete&id=<?php echo $row['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
