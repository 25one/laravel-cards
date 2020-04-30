<?php $__env->startSection('css'); ?>

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
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td>User Name</td>
                            <td>Card Number</td>                            
                            <td>Card Name</td>
                            <td>Card Type</td>
                          </tr>  
                          </thead>
                          <tbody id="pannel">
                             <!-- include brick -->
                             <?php
                             print_r($cards)
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-cards/resources/views/back/index.blade.php ENDPATH**/ ?>