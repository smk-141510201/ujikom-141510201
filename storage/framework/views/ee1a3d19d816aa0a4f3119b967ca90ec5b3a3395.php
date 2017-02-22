<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Tambah Kategori Lembur</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Kategorilembur']); ?>


	<div class="form-group">
		<?php echo Form::label('Kode_lembur', 'Kode Lembur : '); ?>

		<?php echo Form::text('Kode_lembur', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Nama Jabatan', 'Nama Jabatan : '); ?>

		<select class="form-control" name="Jabatan_id"> 
		<?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	<div class="form-group">
		<?php echo Form::label('Nama Golongan', 'Nama Golongan : '); ?>

		<select class="form-control" name="Golongan_id"> 
		<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	<div class="form-group">
		<?php echo Form::label('Besaran_uang', 'Besaran Uang :'); ?>

		<?php echo Form::text('Besaran_uang', null, ['class' => 'form-control']); ?>

	</div>

	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-warning']); ?>	
	<?php echo Form::close(); ?>

	</div>
	
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>