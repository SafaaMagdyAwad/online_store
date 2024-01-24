
<?php $__env->startSection('title'); ?>
    login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h1">
    <?php echo e($msg); ?>


   </div>

   <form method="post" action="<?php echo e(route('user.login')); ?>">
    <?php echo csrf_field(); ?>
    
    <div>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="card_number" name="card_number">
    </div>
    
    
    <div>
        <input type="password" class="input mt-1 form-control loginPass" placeholder="password" name="password">
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">login</button>
</form>
<div class="container">
    <h6>
       don't have an account ?   
    </h6>    
    <div class="card">
         <a href="<?php echo e(route("user.rigister_form")); ?>" type="button" class="btn btn-success input mt-1 form-control loginPass">rigister</a>
    </div>
</div> 

        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/user/login.blade.php ENDPATH**/ ?>