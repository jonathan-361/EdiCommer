<?php include 'header.php'; ?>
<h2>Listado de Productos</h2>
<a href="index.php?action=create">Agregar Producto</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Nombre</th><th>Precio</th><th>Categoría</th><th>Stock</th><th>Acciones</th>
    </tr>
    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['nombre'] ?></td>
        <td><?= $p['precio'] ?></td>
        <td><?= $p['categoria'] ?></td>
        <td><?= $p['stock'] ?></td>
        <td>
            <a href="index.php?action=show&id=<?= $p['id'] ?>">Ver</a> |
            <a href="index.php?action=edit&id=<?= $p['id'] ?>">Editar</a> |
            <a href="index.php?action=delete&id=<?= $p['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>
