<?php $__env->startSection('content'); ?>
    <h1>Criar Loja</h1>
    <form action="/admin/stores/store" method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="form-group">
        <label>Nome Loja</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Celular/Whatsapp</label>
        <input type="text" name="mobile_phone" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Usuário</label>
        <select name="user" class="form-control">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </select>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
    </div>
    </form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ww/novoProjeto/resources/views/admin/stores/create.blade.php ENDPATH**/ ?>