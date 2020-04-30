<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<?php
//print_r($cards);
//print_r($types);
?>

<div class="row margin">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label for="type" class="size">Select type of card</label>
            <select class="form-control input-size" style="height: auto;" name="type_id" id="type_id">
                <option value="0" class="input-size" 
                   >-----</option> 
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
            </select>
        </div>
    </div>
</div>   

<!-- brick-wrapper -->
<div class="bricks-wrapper">

    <div id="pannel">
       <?php echo $__env->make('front.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>   

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
<script>
   $(document).ready(function(){
      //...
   });
</script>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-cards/resources/views/front/index.blade.php ENDPATH**/ ?>