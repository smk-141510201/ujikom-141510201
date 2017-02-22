<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Pegawai</b></h3></div>
<div class="panel-body">

<center><img src="<?php echo e(asset('/assets/image/'.$pegawai->Photo)); ?>" height="200" width="200"></center>
<div class="form-group">
	<?php echo Form::label('NIP', 'NIP :'); ?>

	<input type="text" name="Nip" class="form-control" placeholder="<?php echo e($pegawai->Nip); ?>" readonly>
</div>


<div class="form-group">
	<?php echo Form::label('Nama Jabatan', 'Nama Jabatan :'); ?>

	<input type="text" name="Jabatan_id" class="form-control" placeholder="<?php echo e($pegawai->jabatans->Nama_jabatan); ?>" readonly>
</div>

<div class="form-group">
	<?php echo Form::label('Nama Golongan', 'Nama Golongan :'); ?>

	<input type="text" name="Golongan_id" class="form-control" placeholder="<?php echo e($pegawai->golongans->Nama_golongan); ?>" readonly>
</div>


<div class="form-group">
<div class="col-sm-4">
	<a href="<?php echo e(route('Pegawai.index')); ?>" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>