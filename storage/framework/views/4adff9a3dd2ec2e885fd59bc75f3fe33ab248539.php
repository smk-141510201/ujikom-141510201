<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
    <div class="panel-body">
                    <span class="name">Selamat Datang</span>
                    <span><b><?php echo e(Auth::user()->name); ?></b>, Anda Login sebagai <b><?php echo e(Auth::user()->permission); ?></b></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>