
<?php $__env->startSection('title'); ?>
    client page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="h1">
       <h5>
        welcome <?php echo e($user['name']); ?> <?php echo e($msg); ?>    
       </h5>
       <div class="row">
        <div class="col-6">
            <a href="<?php echo e(route('user.bill',$user['id'])); ?>" type="button" class="btn btn-success input mt-1 form-control loginPass">show my card</a>

        </div>
        <div class="col-6">
            <a href="<?php echo e(route('user.logout',$user['id'])); ?>" onclick="return confirm('are you sure ?')" type="button" class="btn btn-danger input mt-1 form-control loginPass">logout</a>

        </div>
       </div>
       <div class="card">
            <form style="display: inline" method="post" action="<?php echo e(route('product.search',$user['id'])); ?>">
                <?php echo csrf_field(); ?>
                <div>
                    <input type="search" class="form-controll input mt-1 form-control loginPass"  placeholder="search title" name="title">
                </div>
                
                

             </form>
       </div>
       
    


   </div>

            <div class="container">
                    <div class='row '> 
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class='col-4 mb-3'>
                                <div class="card">
                                    <div class="container ">
                                        <div class="h6 text-danger"> product title :<?php echo e($product['title']); ?> </div>
                                        <p>prand : <?php echo e($product['prand']); ?> </p>
                                        <p>price : <?php echo e($product['price']); ?> </p>
                                        <p>avilable num of parts : <?php echo e($product['num_parts']); ?></p>
                                        <a href="<?php echo e(route('client_product_form.buy',[$user['id'],$product['id']])); ?>" type="button" class="btn btn-warning input mt-1 form-control loginPass">add to card</a>
                                    </div>
                                    

                                </div>
                            </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                
            </div>
        


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\online_store\resources\views/user/client.blade.php ENDPATH**/ ?>