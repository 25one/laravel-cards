<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $joined): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="<?php echo e(route('cards.edit', $joined->id)); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
<td><?php echo e($joined->user->name); ?></td>
<td><?php echo e($joined->number); ?></td>  
<td><?php echo e($joined->card->name); ?></td>
<td><?php echo e($joined->card->type->name); ?></td>
<td class="content"><?php echo e($joined->card->title); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-cards/resources/views/back/brick-standard.blade.php ENDPATH**/ ?>