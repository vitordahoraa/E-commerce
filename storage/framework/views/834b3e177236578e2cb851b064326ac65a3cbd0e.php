<!-- BOOTSTRAP PEGO DO SITE: https://bbbootstrap.com/snippets/bootstrap-product-invoice-card-14183634 -->


<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row pt-5">
                <div class="d-flex justify-content-center container mt-5">  
                    <a href = "/p/<?php echo e($product->id); ?>"class="card p-3 bg-white"><i class="fa fa-apple"></i>
                    
                        <h3 class="d-flex justify-content-center"><?php echo e($product->status->name); ?></h3>
                        <div class="about-product text-center mt-2"><img src="storage/<?php echo e($product->image); ?>" width="300">
                            <div>
                                <h4><?php echo e($product->product_name); ?></h4>
                                <h6 class="mt-0 text-black-50"><?php echo e($product->merchant->merchant_name); ?></h6>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-center p-price"><span>R$ <?php echo e($product->price); ?></span></div>
                            <?php if($product->status_id == 1): ?>
                            <object><a href = "/o/<?php echo e($product->merchant->admin_id); ?>/<?php echo e($product->id); ?>/create" class="d-flex justify-content-center p-price"><span>Comprar</span></a></object>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update',$product)): ?>                                
                                <object><a href = "p/<?php echo e($product->id); ?>/edit" class="d-flex justify-content-center p-price"><span>Editar</span></a></object>
                                <object>
                                    <form method="POST" enctype="multipart/form-data" action="/p/<?php echo e($product->id); ?>/delete">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="d-flex justify-content-center p-price" onclick="return confirm('Are you sure?')" ><span>Excluir</span></button>
                                    </form>
                                </object>
                            <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Desafio da Wedev\resources\views/home.blade.php ENDPATH**/ ?>