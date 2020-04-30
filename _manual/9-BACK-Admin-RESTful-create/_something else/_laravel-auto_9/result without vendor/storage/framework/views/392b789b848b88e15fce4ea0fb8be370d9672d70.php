<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="row">
        <!-- left column -->
       <div class="col-md-3">
       </div>
        <!-- center column -->       
        <div class="col-md-6 margin">
            <?php if(session('auto-ok')): ?>
                <?php $__env->startComponent('back.components.alert'); ?>
                    <?php $__env->slot('type'); ?>
                        success
                    <?php $__env->endSlot(); ?>
                    <?php echo session('auto-ok'); ?>

                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                     <div class="box-body">
                        <div class="form-group">
                          <img class="img_auto" src="<?php if(isset($image)): ?><?php echo e(asset('public/images/' . $image)); ?><?php else: ?><?php echo e(asset('public/images/nophoto.jpg')); ?><?php endif; ?>" alt="" style="width: 250px; margin-top: 5px;" />
                          <form method="post" action="<?php echo e(route('upload')); ?>" name="form_upload" enctype="multipart/form-data">
                                   <?php echo e(csrf_field()); ?>    
                              <input type="file" name="image" class="upload_field">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 250px; margin-top: 5px;">Select</button>
                          </form>                            
                        </div>   
                    <?php echo $__env->yieldContent('form-open'); ?>
                    <input type="hidden" id="image" name="image" value="<?php if(isset($image)): ?><?php echo e($image); ?><?php else: ?><?php echo e('nophoto.jpg'); ?><?php endif; ?>">  
                        <div class="form-group">
                            <label for="type"><?php echo app('translator')->getFromJson('Type of Country'); ?></label>
                            <select class="form-control" name="country_id" id="country_id">
                              <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                 <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                            </select>
                        </div>                    
                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Name of Auto'); ?></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($auto)): ?><?php echo e($auto->name); ?><?php elseif(old('name')): ?><?php echo e(old('name')); ?><?php endif; ?>" placeholder="Write Name of Auto"> 
                            <?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('Submit'); ?></button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- right column -->
       <div class="col-md-3">
       </div> 
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$(document).ready(function(){
  $("body").on("change", ".upload_field", function(){
    //alert('hi');
    $(".upload_submit").click();
  });
});       
</script>
<?php $__env->stopSection(); ?>  


<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/test/resources/views/back/autos/template.blade.php ENDPATH**/ ?>