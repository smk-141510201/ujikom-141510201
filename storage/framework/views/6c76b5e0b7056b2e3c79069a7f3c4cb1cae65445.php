<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<center><h2><b>Ubah Pegawai</b></h2></center>
<hr>

<div class="panel-body">
	<?php echo Form::model($pegawai, ['method' => 'PATCH', 'route' => ['Pegawai.update', $pegawai->id]]); ?>


<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('NIP', 'NIP'); ?>

		<?php echo Form::text ('Nip', null, ['class' => 'form-control']); ?>

	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Nama Jabatan', 'Nama Jabatan'); ?>

		<select class="form-control" name="Jabatan_id"> 
		<?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Nama Golongan', 'Nama Golongan'); ?>

		<select class="form-control" name="Golongan_id"> 
		<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Photo', 'Photo :'); ?>

		<?php echo Form::file ('Photo', null, ['class' => 'form-control']); ?>

		<br>
		<img src="<?php echo e(asset('/assets/image/'.$pegawai->Photo)); ?>" height="100px" width="100px" class="img-circle">
	</div>
	<div class="form-group">
		<?php echo Form::submit('Ubah', ['class' => 'btn btn-primary']); ?>

	</div>
	<?php echo Form::close(); ?>

</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>