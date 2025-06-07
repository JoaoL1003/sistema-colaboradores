<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1 class="mb-4">Lista de Colaboradores</h1>

    <a href="<?php echo e(route('colaboradores.create')); ?>" class="btn btn-success mb-3">
        + Novo Colaborador
    </a>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>Cidade</th>
                    <th>Check-in</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $colaboradores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colaborador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($colaborador->nome); ?></td>
                        <td><?php echo e($colaborador->setor); ?></td>
                        <td><?php echo e($colaborador->cidade); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($colaborador->data_checkin)->format('d/m/Y H:i')); ?></td>
                        <td>
                            <a href="<?php echo e(route('colaboradores.edit', $colaborador->id)); ?>" class="btn btn-sm btn-primary">
                                ✏️ Editar
                            </a>

                            <form action="<?php echo e(route('colaboradores.destroy', $colaborador->id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                                    🗑️ Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">Nenhum colaborador cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\system\resources\views/colaboradores/index.blade.php ENDPATH**/ ?>