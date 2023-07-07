<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo e((isset($venta))?$venta->fecha:old('fecha')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" value="<?php echo e((isset($venta))?$venta->cantidad:old('cantidad')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Total</label>
            <input type="number" class="form-control" name="total" value="<?php echo e((isset($venta))?$venta->total:old('total')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Producto</label>
            <select class="form-control" name="idProducto">
                <option value="0">Seleccione una opcion</option>
                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($producto->idProducto); ?>" <?php if(isset($venta)): ?>
                <?php echo e(($venta->idProducto == $producto->idProducto)?'selected':""); ?>

                <?php endif; ?>><?php echo e($producto->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/ventas/partials/form.blade.php ENDPATH**/ ?>