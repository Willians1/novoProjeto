<?php $__env->startSection('content'); ?>
    <h1>Criar Loja</h1>
    <form action="/admin/stores/update/<?php echo e($store->id); ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <div class="form-group">
        <label>Nome Loja</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($store->name); ?>">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" value="<?php echo e($store->description); ?>">
    </div>
    
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo e($store->phone); ?>">
    </div>
    
    <div class="form-group">
        <label>Celular/Whatsapp</label>
        <input type="text" name="mobile_phone" class="form-control" value="<?php echo e($store->mobile_phone); ?>">
    </div>
    
    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="<?php echo e($store->slug); ?>">
    </div>
    
    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Loja</button>
    </div>
</form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ww/novoProjeto/resources/views/admin/stores/edit.blade.php ENDPATH**/ ?>