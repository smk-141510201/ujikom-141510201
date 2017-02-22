<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading"><b>Selamat Datang</b></div>

                <div class="panel-body">
                    <span class="name">Selamat Datang</span>
                    <span><b><?php echo e(Auth::user()->name); ?></b>, Anda Login sebagai <b><?php echo e(Auth::user()->permission); ?></b></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>