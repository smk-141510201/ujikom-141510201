<?php $__env->startSection('content'); ?>
<div class="container">
<div class="panel panel-danger">
<div class="panel-heading"><h3><b>Ubah Golongan</b></h3></div>
<div class="panel-body">
	<?php echo Form::model($gol, ['method' => 'PATCH', 'route' => ['Golongan.update', $gol->id]]); ?>

	<div class="form-group">
		<?php echo Form::label('Kode Golongan', 'Kode Golongan :'); ?>

		<?php echo Form::text ('Kode_golongan', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Nama Golongan', 'Nama Golongan :'); ?>

		<?php echo Form::text ('Nama_golongan', null, ['class' => 'form-control']); ?>

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