<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="panel-heading"><h3><b>Show Tunjangan</b></h3></div>
<div class="panel-body">

<div class="form-group">
	<?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan :'); ?>

	<input type="text" name="Kode_tunjangan" class="form-control" placeholder="<?php echo e($tunjangan->Kode_tunjangan); ?>" readonly>
</div>


<div class="form-group">
	<?php echo Form::label('Nama Jabatan', 'Nama Jabatan :'); ?>

	<input type="text" name="Jabatan_id" class="form-control" placeholder="<?php echo e($tunjangan->jabatans->Nama_jabatan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Nama Golongan', 'Nama Golongan :'); ?>

	<input type="text" name="Golongan_id" class="form-control" placeholder="<?php echo e($tunjangan->golongans->Nama_golongan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Status', 'Status :'); ?>

	<input type="text" name="Status" class="form-control" placeholder="<?php echo e($tunjangan->Status); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Jumlah Anak', 'Jumlah Anak :'); ?>

	<input type="text" name="Jumlah_anak" class="form-control" placeholder="<?php echo e($tunjangan->Jumlah_anak); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

	<input type="text" name="Besaran_uang" class="form-control" placeholder="<?php echo e($tunjangan->Besaran_uang); ?>" readonly>
</div>

<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Tunjangan.index')); ?>" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>