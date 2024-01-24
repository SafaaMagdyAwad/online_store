

<?php $__env->startSection('title'); ?>
    pay vertification
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h1">
    welcome

   </div>


   <div class="container">
    <form method="post" action="<?php echo e(route('user.pay',[$user['id'],$total_price])); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($user['name']); ?>" disabled >
        </div>
        <div>
            <input type="password" class="input mt-1 form-control loginPass" placeholder="card_ password" name="password">
        </div>
        
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">pay</button>
    </form>
</div>     
        


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/bank/password.blade.php ENDPATH**/ ?>