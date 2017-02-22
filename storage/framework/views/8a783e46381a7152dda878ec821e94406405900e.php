<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="panel-heading"><h3><b>Show Kategori Lembur</b></h3></div>
<div class="panel-body">

<div class="form-group">

	<?php echo Form::label('Kode Lembur', 'Kode Lembur :'); ?>

	<input type="text" name="Kode_jabatan" class="form-control" placeholder="<?php echo e($katlem->Kode_lembur); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Nama Jabatan', 'Nama Jabatan :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="<?php echo e($katlem->jabatans->Nama_jabatan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Nama Golongan', 'Nama Golongan :'); ?>

	<input type="text" name="Nama_golongan" class="form-control" placeholder="<?php echo e($katlem->golongans->Nama_golongan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. <?php echo e(number_format($katlem->Besaran_uang)); ?>" readonly>
</div>



<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Kategorilembur.index')); ?>" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>