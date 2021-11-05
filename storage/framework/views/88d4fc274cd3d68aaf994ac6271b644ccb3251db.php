

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Compra')); ?></div>
                
                <?php if(Auth::user()->orders()->where('status','Em Andamento')->first()): ?>
                <?php echo csrf_field(); ?>

                        <?php $__currentLoopData = $order->orderitens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                        <a href = "/p/<?php echo e($orderitem->product->id); ?>"class="card p-3 bg-white"><i class="fa fa-apple"></i>
                        <div class="about-product text-center mt-2"><img src="storage/<?php echo e($orderitem->product->image); ?>" width="300">
                            <div>
                                <h4><?php echo e($orderitem->product->product_name); ?></h4>
                                <h6 class="mt-0 text-black-50"><?php echo e($orderitem->product->merchant->merchant_name); ?></h6>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-center p-price"><span>R$: <?php echo e($orderitem->product->price); ?></span></div>
                            <div class="d-flex justify-content-center p-price"><span>QTD: <?php echo e($orderitem->quantity); ?></span></div>
                            <div class="d-flex justify-content-center p-price"><span>TOTAL: R$: <?php echo e(number_format($orderitem->quantity * $orderitem->product->price,2)); ?></span></div>
                                
                                <object><a href = "o/<?php echo e($orderitem->id); ?>/edit" class="d-flex justify-content-center p-price"><span>Editar</span></a></object>
                                <object>
                                <form method="POST" enctype="multipart/form-data" action="/o/<?php echo e($orderitem->id); ?>/delete">
                                    <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="d-flex justify-content-center p-price" onclick="return confirm('Are you sure?')" ><span>Excluir</span></button>
                                </form>
                                </object>
                            </div>
                        </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    
                    <form method="POST" action="<?php echo e(route('bought',[$order->id])); ?>">    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Comprar')); ?>

                                </button>
                            </div>
                    </form>
                </div>
                <?php else: ?>
                                                                        
                <div class="card-header"><?php echo e(__('Não há pedidos')); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Desafio da Wedev\resources\views/order/view.blade.php ENDPATH**/ ?>