<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="tex" class="form-control" name="Nombre" value="<?php echo e((isset($categoria))?$categoria->Nombre:old('Nombre')); ?>" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Categoria</label>
            <input type="text" class="form-control" name="Descripcion" value="<?php echo e((isset($categoria))?$categoria->Descripcion:old('Descripcion')); ?>" required>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/categorias/partials/form.blade.php ENDPATH**/ ?>