<?php $__env->startSection('content'); ?>

<div class="container-fluid">

<div class="panel-heading"><h3><b>Show Golongan</b></h3></div>
<div class="panel-body">

<div class="form-group">

	<?php echo Form::label('Kode Golongan', 'Kode Golongan :'); ?>

	<input type="text" name="Kode_jabatan" class="form-control" placeholder="<?php echo e($gol->Kode_golongan); ?>" readonly>
</div>


<div class="form-group">
	<?php echo Form::label('Nama Golongan', 'Nama Golongan :'); ?>

	<input type="text" name="Nama_golongan" class="form-control" placeholder="<?php echo e($gol->Nama_golongan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. <?php echo e(number_format($gol->Besaran_uang)); ?>" readonly>
</div>



<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Golongan.index')); ?>" class="btn btn-info">Kembali</a>
</div>
</div>


</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>