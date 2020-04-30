<?php $__env->startSection('form-open'); ?>
    <form method="post" action="<?php echo e(route('autos.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('POST')); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.autos.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/test/resources/views/back/autos/create.blade.php ENDPATH**/ ?>