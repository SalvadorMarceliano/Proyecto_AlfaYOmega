<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo e($nombreVariable); ?></h3>
    <h1>Hola, que tal te amo mucho</h1>
    <a href="<?php echo e(route('ruta.productos.create')); ?>">Crear producto</a>
    <a href="<?php echo e(route('ruta.productos.show')); ?>">Ver producto</a>
    <a href="<?php echo e(route('ruta.productos.edit')); ?>">Editar producto</a>
    <a href="<?php echo e(route('ruta.productos.delete')); ?>">Eliminar producto</a>
</body>
</html><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/vistaNueva.blade.php ENDPATH**/ ?>