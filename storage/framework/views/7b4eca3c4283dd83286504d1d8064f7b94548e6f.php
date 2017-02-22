<?php $__env->startSection('content'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
<div class="panel panel-info">
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
		<?php echo Form::submit('Ubah', ['class' => 'btn btn-info']); ?>

	</div>
	<?php echo Form::close(); ?>

</div>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>