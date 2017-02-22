<?php $__env->startSection('content'); ?>

<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Tunjangan Pegawai</b></h3></div>
<div class="panel-body">


<center><img src="<?php echo e(asset('/assets/image/'.$tunpeg->pegawais->Photo)); ?>" height="200" width="200"></center>

<div class="form-group">
	<?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan :'); ?>

	<input type="text" name="Kode_tunjangan_id" class="form-control" placeholder="<?php echo e($tunpeg->tunjangans->Kode_tunjangan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Nama Pegawai', 'Nama Pegawai :'); ?>

	<input type="text" name="Pegawai_id" class="form-control" placeholder="<?php echo e($tunpeg->pegawais->users->name); ?>" readonly>
</div>

<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Tunjanganpegawai.index')); ?>" class="btn btn-primary">Kembali</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>