
<?php $__env->startSection('title'); ?>
    update product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h6">
    you can change any of them or all :)

   </div>

<div class="container">
    <form method="post" action="<?php echo e(route('product.update',[$product['id'],$user['id']])); ?>">
        <?php echo csrf_field(); ?>
       <?php echo method_field('put'); ?>
        <div>
            <label htmlFor='password' className='text-white'>price</label>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="<?php echo e($product['price']); ?>" name="price">
        </div>
        <div>
            <label htmlFor='password' className='text-white'>number of peices</label>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="<?php echo e($product['num_parts']); ?>" name="num_parts">
        </div>
       
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update product</button>
    </form>
    <a href="<?php echo e(route('product.all',$user['id'])); ?>"  type="button" class="btn btn-success input mt-1 form-control loginPass">all products</a>
</div>
               
        


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/product/update.blade.php ENDPATH**/ ?>