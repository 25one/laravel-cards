<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                      <?php if(session('auto-ok')): ?>
                          <?php $__env->startComponent('back.components.alert'); ?>
                              <?php $__env->slot('type'); ?>
                                  success
                              <?php $__env->endSlot(); ?>
                              <?php echo session('auto-ok'); ?>

                          <?php echo $__env->renderComponent(); ?>
                      <?php endif; ?>                    
                      <?php if(session('auto-updated')): ?>
                          <?php $__env->startComponent('back.components.alert'); ?>
                              <?php $__env->slot('type'); ?>
                                  success
                              <?php $__env->endSlot(); ?>
                              <?php echo session('auto-updated'); ?>

                          <?php echo $__env->renderComponent(); ?>
                      <?php endif; ?>
                      <table>
                         <thead>
                          <tr>
                            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                            <td class="widthbutton">&nbsp;</td>
                            <?php endif; ?>
                            <td class="widthbutton">&nbsp;</td>
                            <td>Country</td>                            
                            <td>Name</td>
                            <td>Image</td>
                          </tr>  
                          </thead>
                          <tbody id="pannel">
                             <?php echo $__env->make('back.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>  
</section>  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
    <script>
       $(document).ready(function(){
          $('.listbuttonremove').click(function(){
             BaseRecord.destroy($(this).attr('href'));
             return false;
          });
       });
    </script>
<?php $__env->stopSection(); ?>    

<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/laravel-auto-group1-test/resources/views/back/index.blade.php ENDPATH**/ ?>