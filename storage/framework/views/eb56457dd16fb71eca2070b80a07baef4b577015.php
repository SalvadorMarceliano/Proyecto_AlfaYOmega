<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo e((isset($cliente))?$cliente->nombre:old('nombre')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellidoPaterno" value="<?php echo e((isset($cliente))?$cliente->apellidoPaterno:old('apellidoPaterno')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellido Materno</label>
            <input type="text" class="form-control" name="apellidoMaterno" value="<?php echo e((isset($cliente))?$cliente->apellidoMaterno:old('apellidoMaterno')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">RFC</label>
            <input type="text" class="form-control" name="rfc" value="<?php echo e((isset($cliente))?$cliente->rfc:old('rfc')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Telefono</label>
            <input type="tel" class="form-control" name="telefono" value="<?php echo e((isset($cliente))?$cliente->telefono:old('telefono')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Correo</label>
            <input type="email" class="form-control" name="correo" value="<?php echo e((isset($cliente))?$cliente->correo:old('correo')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" class="form-control" name="direccion" value="<?php echo e((isset($cliente))?$cliente->direccion:old('direccion')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Productos</label>
            <select class="form-control" name="idProducto">
                <option value="0">Seleccione una opcion</option>
                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($producto->idProducto); ?>" <?php if(isset($cliente)): ?>
                <?php echo e(($cliente->idProducto == $producto->idProducto)?'selected':""); ?>

                <?php endif; ?>><?php echo e($producto->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/clientes/partials/form.blade.php ENDPATH**/ ?>