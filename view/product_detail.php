<?php include 'header.php'; ?>
<h2>Detalle del Producto</h2>
<p><b>ID:</b> <?= $producto['id'] ?></p>
<p><b>Nombre:</b> <?= $producto['nombre'] ?></p>
<p><b>Precio:</b> <?= $producto['precio'] ?></p>
<p><b>Categoría:</b> <?= $producto['categoria'] ?></p>
<p><b>Stock:</b> <?= $producto['stock'] ?></p>
<a href="index.php">Volver</a>
<?php include 'footer.php'; ?>
