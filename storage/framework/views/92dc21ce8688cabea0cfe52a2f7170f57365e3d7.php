<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<h3><b>Detail Tunjangan Pegawai</b></h3>
<hr>
<div class="panel-body">


<img src="<?php echo e(asset('/assets/image/'.$tunpeg->pegawais->Photo)); ?>" height="100" width="100" class="img-circle"><br>
<br>

<div class="col-md-3">
<div class="form-group">
	<?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan :'); ?>

	<input type="text" name="Kode_tunjangan_id" class="form-control" placeholder="<?php echo e($tunpeg->tunjangans->Kode_tunjangan); ?>" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	<?php echo Form::label('Nama Pegawai', 'Nama Pegawai :'); ?>

	<input type="text" name="Pegawai_id" class="form-control" placeholder="<?php echo e($tunpeg->pegawais->users->name); ?>" readonly>
</div>
</div>

<div class="col-md-6">
<div class="form-group">

	<a href="<?php echo e(route('Tunjanganpegawai.index')); ?>" class="btn btn-primary">Kembali</a>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>