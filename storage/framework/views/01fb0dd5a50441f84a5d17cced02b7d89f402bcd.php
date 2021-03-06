<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<center><h3><b>Ubah Lembur Pegawai</b></h3></center>
<hr>
<div class="panel-body">
	<?php echo Form::model($lembur, ['method' => 'PATCH', 'route' => ['Lemburpegawai.update', $lembur->id]]); ?>


	<div class="col-md-3">
	<div class="form-group">
		<?php echo Form::label('Kode Lembur', 'Nama Lembur : '); ?>

		<select class="form-control" name="Kode_lembur_id"> 
		<?php $__currentLoopData = $katlem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	</div>

	<div class="col-md-3">
	<div class="form-group">
		<?php echo Form::label('Nama Pegawai', 'Nama Pegawai : '); ?>

		<select class="form-control" name="Pegawai_id"> 
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->users->name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	</div>

	<div class="col-md-3">
	<div class="form-group">
		<?php echo Form::label('Jumlah Jam', 'Jumlah Jam :'); ?>

		<?php echo Form::text ('Jumlah_jam', null, ['class' => 'form-control']); ?>

	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::submit('Ubah', ['class' => 'btn btn-danger']); ?>

	</div>
	</div>
	<?php echo Form::close(); ?>

</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>