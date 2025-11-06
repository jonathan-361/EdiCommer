<?php include 'header.php'; ?>
<h2><?= isset($producto) ? 'Editar Producto' : 'Nuevo Producto' ?></h2>

<form method="post" action="index.php?action=<?= isset($producto) ? 'update&id=' . $producto['id'] : 'store' ?>">
    Nombre: <input type="text" name="nombre" value="<?= $producto['nombre'] ?? '' ?>"><br>
    Precio: <input type="number" name="precio" value="<?= $producto['precio'] ?? '' ?>"><br>
    Categoría: <input type="text" name="categoria" value="<?= $producto['categoria'] ?? '' ?>"><br>
    Stock: <input type="number" name="stock" value="<?= $producto['stock'] ?? '' ?>"><br>
    <button type="submit">Guardar</button>
</form>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<?php include 'footer.php'; ?>
