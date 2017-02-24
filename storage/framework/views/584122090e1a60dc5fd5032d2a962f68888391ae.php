<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<h2><b>Ubah Tunjangan</b></h2>
<hr>
<div class="panel-body">
	<?php echo Form::model($tunjangan, ['method' => 'PATCH', 'route' => ['Tunjangan.update', $tunjangan->id]]); ?>


	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan'); ?>

		<?php echo Form::text ('Kode_tunjangan', null, ['class' => 'form-control']); ?>

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
	<label>Status
		<select type="text" class="form-control" name="Status" required>
			<option>Menikah</option>
			<option>Belum Menikah</option>
			<option>Duda</option>
			<option>Janda</option>
		</select>
		</label>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Jumlah Anak', 'Jumlah Anak'); ?>

		<?php echo Form::text ('Jumlah_anak', null, ['class' => 'form-control']); ?>

	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Besaran Uang', 'Besaran Uang'); ?>

		<?php echo Form::text ('Besaran_uang', null, ['class' => 'form-control']); ?>

	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::submit('Ubah', ['class' => 'btn btn-primary']); ?>

	</div>
	</div>
	<?php echo Form::close(); ?>

</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>