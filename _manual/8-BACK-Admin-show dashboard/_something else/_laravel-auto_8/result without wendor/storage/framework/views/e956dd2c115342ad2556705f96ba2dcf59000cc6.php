<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<h3>Home</h3>

<?php
//print_r($autos);
?>

<div class="row margin">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label for="type" class="size">Select country</label>
            <select class="form-control input-size" style="height: auto;" name="country_id" id="country_id">
                <option value="0" class="input-size" 
                   >-----</option> 
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>    
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
          $('#country_id').change(function(){
             BaseRecord.selectCountry($(this).val());
          });
       });
    </script>
<?php $__env->stopSection(); ?>    

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/laravel-auto-group1-test/resources/views/front/index.blade.php ENDPATH**/ ?>