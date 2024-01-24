
<?php $__env->startSection('title'); ?>
    welcome admin : <?php echo e($user['name']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h1">
    welcome <?php echo e($user['name']); ?>


   </div>

  <div class="container">
   
    <a href="<?php echo e(route("user.adminrigister_form",$user['id'])); ?>" type="button" class="btn btn-success input mt-1 form-control loginPass"> add admin</a>
    
    <a href="<?php echo e(route("product.all",$user['id'])); ?>" type="button" class="btn btn-light input mt-1 form-control loginPass"> all products</a>
    <a href="<?php echo e(route("user.logout",$user['id'])); ?>" onclick="return confirm('are you sure ?')" type="button" class="btn btn-danger input mt-1 form-control loginPass"> logout</a>
  </div>
               
        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/user/admin.blade.php ENDPATH**/ ?>