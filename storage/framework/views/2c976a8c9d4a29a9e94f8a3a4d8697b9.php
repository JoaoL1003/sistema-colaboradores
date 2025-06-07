<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Colaboradores</h1>

    <a href="<?php echo e(route('colaboradores.create')); ?>" class="btn btn-success mb-3">Novo Colaborador</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Setor</th>
            <th>Cidade</th>
            <th>Data Check-in</th>
            <th>Ações</th>
        </tr>
        <?php $__currentLoopData = $colaboradores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colaborador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($colaborador->nome); ?></td>
        <td><?php echo e($colaborador->setor); ?></td>
        <td><?php echo e($colaborador->cidade); ?></td>
        <td><?php echo e($colaborador->data_checkin); ?></td>
        <td>
            <a href="<?php echo e(route('colaboradores.edit', $colaborador->id)); ?>" class="btn btn-warning btn-sm">Editar</a>

            <form action="<?php echo e(route('colaboradores.destroy', $colaborador->id)); ?>" method="POST" style="display:inline-block;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este colaborador?')">
                    Excluir
                </button>
            </form>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\aluno\projeto-colaboradores\resources\views/colaboradores/index.blade.php ENDPATH**/ ?>