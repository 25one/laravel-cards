<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="brick entry format-standard animate-this margin-top">

    <div class="entry-text">
        <div class="entry-header">
            <h5 class="entry-title"><a href="#"><?php echo e($card->name); ?></a> <span class="red">(<?php echo e($card->type->name); ?>)</span></h5>
        </div>
        <div class="entry-excerpt">
            <?php echo e($card->title); ?>

        </div>
    </div>

</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-cards/resources/views/front/brick-standard.blade.php ENDPATH**/ ?>