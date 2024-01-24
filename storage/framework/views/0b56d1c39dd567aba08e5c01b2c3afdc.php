
<?php $__env->startSection('title'); ?>
    add product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h4 text_center">
   <?php echo e($msg); ?>

   </div>

<div class="container">
    <form method="post" action="<?php echo e(route('product.add',$user['id'])); ?>">
        <?php echo csrf_field(); ?>

        <div>
            <select name="title" class="input mt-1 form-control loginPass " placeholder="title">
                <option  disabled selected>select title</option>
                <option value="phone">phone</option>
                <option value="labtob">labtob</option>
                <option value="TV">TV</option>
                <option value="computer">computer</option>
                <option value="external hard">external hard</option>
                <option value="head phone">head phone</option>
                <option value="kayboard">kayboard</option>
            </select>
            
        </div>
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="prand" name="prand">
        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="price" name="price">
        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="num_parts" name="num_parts">
        </div>
       
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add product</button>
    </form>
    <a href="<?php echo e(route('product.all',$user['id'])); ?>"  type="button" class="btn btn-success input mt-1 form-control loginPass">all products</a>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/product/add.blade.php ENDPATH**/ ?>