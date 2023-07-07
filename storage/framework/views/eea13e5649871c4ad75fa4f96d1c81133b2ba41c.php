<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo e((isset($producto))?$producto->nombre:old('nombre')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo e((isset($producto))?$producto->descripcion:old('descripcion')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" class="form-control" name="precio" value="<?php echo e((isset($producto))?$producto->precio:old('precio')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Expiracion</label>
            <input type="date" class="form-control" name="expiracion" value="<?php echo e((isset($producto))?$producto->expiracion:old('expiracion')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control" name="stock" value="<?php echo e((isset($producto))?$producto->stock:old('stock')); ?>" required>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/productos/partials/form.blade.php ENDPATH**/ ?>