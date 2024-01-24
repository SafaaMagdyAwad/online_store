
<?php $__env->startSection('title'); ?>
    Bill
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h1">
    welcome

   </div>

<div class="container">
    
    <table class="table">
        <thead>
           <tr>
           <th scope="col">product id</th>
           <th scope="col">title</th>
           <th scope="col">prand</th>
           <th scope="col">price</th>
           <th scope="col">no.parts</th>
           <th scope="col">....</th>
           </tr>
       </thead>
       <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <th scope="row"><?php echo e($product['id']); ?></th>
                <td><?php echo e($product['title']); ?></td>
                <td><?php echo e($product['prand']); ?></td>
                <td><?php echo e($product['price']); ?></td>
                <td><?php echo e($product['num_parts']); ?></td>
                
                <td>
                        <a href="<?php echo e(route('product.update_form',$product['id'])); ?>" type="button" class="btn btn-success">update product</a>
                        <a href="<?php echo e(route('product.delete',$product['id'])); ?>" type="button" class="btn btn-danger">delete product</a>
                </td>
           </tr>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
           
       </tbody>


    <a href="<?php echo e(route('product.all')); ?>"  type="button" class="btn btn-success">all products</a>
</div>
               
        


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/bill.blade.php ENDPATH**/ ?>