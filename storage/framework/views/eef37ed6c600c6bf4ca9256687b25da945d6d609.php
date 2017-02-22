<?php $__env->startSection('content'); ?>
<div class="container">
<div class="panel panel-danger">
<div class="panel-heading"><h3><b>Ubah Tunjangan Pegawai</b></h3></div>
<div class="panel-body">
	<?php echo Form::model($tunpeg, ['method' => 'PATCH', 'route' => ['Tunjanganpegawai.update', $tunpeg->id]]); ?>

	<div class="form-group">
		<?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan : '); ?>

		<select class="form-control" name="Kode_tunjangan_id"> 
		<?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>

	<div class="form-group">
		<?php echo Form::label('Nama ', 'Nama : '); ?>

		<select class="form-control" name="Pegawai_id"> 
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->users->name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	
	<div class="form-group">
		<?php echo Form::submit('Ubah', ['class' => 'btn btn-danger']); ?>

	</div>
	<?php echo Form::close(); ?>

</div>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>