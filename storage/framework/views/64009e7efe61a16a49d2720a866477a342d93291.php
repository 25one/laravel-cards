<?php $__env->startSection('css'); ?>
<style>
.content {
width: 30%;  
}
</style>  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                    <?php if(session('card-updated')): ?>
                        <?php $__env->startComponent('back.components.alert'); ?>
                            <?php $__env->slot('type'); ?>
                                success
                            <?php $__env->endSlot(); ?>
                            <?php echo session('card-updated'); ?>

                        <?php echo $__env->renderComponent(); ?>
                    <?php endif; ?>                      
                      <table>
                         <thead>
                          <tr>
                            <?php if(auth()->guard()->check()): ?>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                            <?php endif; ?>
                            <td>User Name</td>
                            <td>Card Number</td>                            
                            <td>Card Name</td>
                            <td>Card Type</td>
                            <td>Card Title</td>                            
                          </tr>  
                          </thead>
                          <tbody id="pannel">
                             <?php echo $__env->make('back.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                             <?php
                             //print_r($cards)
                             ?>
                         </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>         

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
<script>
   $(document).ready(function(){
      $('.listbuttonremove').click(function(){
         BaseRecord.destroy($(this).attr('id'));
         return false;
      });
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/laravel-cards/resources/views/back/index.blade.php ENDPATH**/ ?>