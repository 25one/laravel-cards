<?php $__currentLoopData = $autos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<?php endif; ?>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="<?php echo e(route('autos.edit', [$auto->id])); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
   <td><?php echo e($auto->country->name); ?></td> 
   <td><?php echo e($auto->name); ?></td>      
   <td class="center"><img class="img_auto" src="<?php echo e(asset('public/images/' . $auto->image)); ?>" alt=""></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH /home/alex/www/laravel-auto-group1-test/resources/views/back/brick-standard.blade.php ENDPATH**/ ?>