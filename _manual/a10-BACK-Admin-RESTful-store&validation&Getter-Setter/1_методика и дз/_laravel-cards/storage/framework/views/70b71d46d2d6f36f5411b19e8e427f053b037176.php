<?php $__env->startSection('form-open'); ?>
    <form method="post" action="<?php echo e(route('cards.store')); ?>">
                    <?php echo e(csrf_field()); ?>

           
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.cards.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-cards/resources/views/back/cards/create.blade.php ENDPATH**/ ?>