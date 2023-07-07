<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr><td>id</td>
        <td><?php echo e($factura->idfactura); ?></td>
        </tr>
        <tr>
        <td>rfc</td>
        <td><?php echo e($factura->rfc); ?></td>
        </tr>
        <tr>
        <td>razon Social  </td>
        <td><?php echo e($factura->razonSocial); ?></td>
        </tr>
        <tr>
        <td>producto: </td>
        <td>id-<?php echo e($factura->idVenta); ?> {--{$factura->venta->productos->nombre--}}</td>
        </tr>
        <tr>
        <td>total: </td>
        <td></td>
        </tr>
        <tr> 
        <td>IVA:</td>
        <td><?php echo e($factura->iva); ?></td>
        </tr>
    </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/facturas/impFactura.blade.php ENDPATH**/ ?>