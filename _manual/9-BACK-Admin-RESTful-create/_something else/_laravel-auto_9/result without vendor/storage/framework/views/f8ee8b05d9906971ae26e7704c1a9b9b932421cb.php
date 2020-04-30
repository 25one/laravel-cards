<?php $__currentLoopData = $autos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="brick entry format-standard animate-this margin-top">

    <div class="entry-text">
        <div class="entry-header">
            <h5 class="entry-title"><a href="#"><?php echo e($auto->name); ?></a> <p class="red">(<?php echo e($auto->country->name); ?>)</p></h5>
        </div>
        <div class="entry-excerpt">
            <img src="<?php echo e(asset('public/images/' . $auto->image)); ?>" alt="">
        </div>
    </div>

</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/alex/www/test/resources/views/front/brick-standard.blade.php ENDPATH**/ ?>