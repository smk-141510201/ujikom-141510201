<?php $__env->startSection('content'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
<h3><b>Detail Jabatan</b></h3>
<hr>
<div class="panel-body">

<div class="col-md-4">
<div class="form-group">
	<?php echo Form::label('Kode Jabatan', 'Kode Jabatan :'); ?>

	<input type="text" name="Kode_jabatan" class="form-control" placeholder="<?php echo e($jab->Kode_jabatan); ?>" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	<?php echo Form::label('Nama Jabatan', 'Nama Jabatan :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="<?php echo e($jab->Nama_jabatan); ?>" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. <?php echo e(number_format($jab->Besaran_uang)); ?>" readonly>
</div>
</div>


<div class="col-md-4">
<div class="form-group">
	<a href="<?php echo e(route('Jabatan.index')); ?>" class="btn btn-info">Kembali</a>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>