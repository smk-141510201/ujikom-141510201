<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Jabatan</b></h3></div>
<div class="panel-body">

<div class="form-group">

	<?php echo Form::label('Kode Jabatan', 'Kode Jabatan :'); ?>

	<input type="text" name="Kode_jabatan" class="form-control" placeholder="<?php echo e($jab->Kode_jabatan); ?>" readonly>
</div>


<div class="form-group">
	<?php echo Form::label('Nama Jabatan', 'Nama Jabatan :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="<?php echo e($jab->Nama_jabatan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="<?php echo e($jab->Besaran_uang); ?>" readonly>
</div>



<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Jabatan.index')); ?>" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>