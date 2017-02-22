<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="panel-heading"><h3><b>Show Lembur Pegawai</b></h3></div>
<hr>
<div class="panel-body">

<div class="form-group">

	<?php echo Form::label('Kode Lembur', 'Kode Lembur :'); ?>

	<input type="text" name="Kode_lembur_id" class="form-control" placeholder="<?php echo e($lembur->kategori_lemburs->Kode_lembur); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('NIP', 'NIP :'); ?>

	<input type="text" name="Pegawai_id" class="form-control" placeholder="<?php echo e($lembur->pegawais->Nip); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Nama Pegawai', 'Nama Pegawai :'); ?>

	<input type="text" name="Pegawai_id" class="form-control" placeholder="<?php echo e($lembur->pegawais->users->name); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Jumlah Jam', 'Jumlah Jam :'); ?>

	<input type="text" name="Jumlah_jam" class="form-control" placeholder="<?php echo e($lembur->Jumlah_jam); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

	<input type="text" name="Besaran_uang" class="form-control" placeholder="Rp. <?php echo e(number_format($lembur->kategori_lemburs->Besaran_uang * $lembur->Jumlah_jam)); ?>" readonly>
</div>
<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Lemburpegawai.index')); ?>" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>