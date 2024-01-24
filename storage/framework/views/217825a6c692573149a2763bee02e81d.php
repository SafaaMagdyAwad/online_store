
<?php $__env->startSection('title'); ?>
    rigister
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h1">
    <?php echo e($msg); ?>


   </div>

   <form method="post" action="<?php echo e(route('user.rigister')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="name" name="name">
    </div>
    <div>
        <input type="email" class="form-controll input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="card_number" name="card_number">
    </div>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="location" name="location">
    </div>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="auth" name="auth" value="user" hidden>
    </div>
    <div>
        <input type="password" class="form-controll input mt-1 form-control loginPass" placeholder="password" name="password">
    </div>
    <div>
        <input type="password" class="form-controll input mt-1 form-control loginPass" placeholder="repassword" name="confirm-password">
    </div>
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">rigister</button>
</form>
               
    <div class="container">
        <h6>
            have an account    
        </h6>    
        <div class="card">
             <a href="<?php echo e(route("user.login_form")); ?>" type="button" class="btn btn-success input mt-1 form-control loginPass"> login</a>
        </div>
    </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/user/rigister.blade.php ENDPATH**/ ?>