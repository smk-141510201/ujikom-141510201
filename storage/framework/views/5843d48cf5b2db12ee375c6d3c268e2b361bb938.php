<?php $__env->startSection('content'); ?>
<div class="container">
<div class="panel panel-danger">
<div class="panel-heading"><h3><b>Ubah Jabatan</b></h3></div>
<div class="panel-body">
	<?php echo Form::model($jab, ['method' => 'PATCH', 'route' => ['Jabatan.update', $jab->id]]); ?>

	<div class="form-group">
		<?php echo Form::label('Kode Jabatan', 'Kode Jabatan :'); ?>

		<?php echo Form::text ('Kode_jabatan', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Nama Jabatan', 'Nama Jabatan :'); ?>

		<?php echo Form::text ('Nama_jabatan', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

		<?php echo Form::text ('Besaran_uang', null, ['class' => 'form-control']); ?>

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