<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar Colaborador</h1>

    <form action="<?php echo e(route('colaboradores.update', $colaborador->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?php echo e($colaborador->nome); ?>" required>
        </div>

        <div class="mb-3">
            <label>Setor:</label>
            <select name="setor" class="form-control" required>
                <?php $__currentLoopData = $setores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($setor); ?>" <?php echo e($colaborador->setor == $setor ? 'selected' : ''); ?>><?php echo e($setor); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Cidade:</label>
            <select name="cidade" class="form-control" required>
                <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($cidade); ?>" <?php echo e($colaborador->cidade == $cidade ? 'selected' : ''); ?>><?php echo e($cidade); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Data Check-in:</label>
            <input type="datetime-local" name="data_checkin" class="form-control" value="<?php echo e($colaborador->data_checkin->format('Y-m-d\TH:i')); ?>" required>
        </div>

        <button class="btn btn-primary">Atualizar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\system\resources\views/colaboradores/edit.blade.php ENDPATH**/ ?>