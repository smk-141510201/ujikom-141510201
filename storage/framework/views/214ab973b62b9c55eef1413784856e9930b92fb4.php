<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<h3><b>Ubah Golongan</b></h3>
<hr>
<div class="panel-body">
	<?php echo Form::model($gol, ['method' => 'PATCH', 'route' => ['Golongan.update', $gol->id]]); ?>


<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Kode Golongan', 'Kode Golongan :'); ?>

		<?php echo Form::text ('Kode_golongan', null, ['class' => 'form-control']); ?>

	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Nama Golongan', 'Nama Golongan :'); ?>

		<?php echo Form::text ('Nama_golongan', null, ['class' => 'form-control']); ?>

	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Besaran Uang', 'Besaran Uang :'); ?>

		<?php echo Form::text ('Besaran_uang', null, ['class' => 'form-control']); ?>

	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::submit('Ubah', ['class' => 'btn btn-info']); ?>

	</div>
</div>

	<?php echo Form::close(); ?>

</div>
</div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>