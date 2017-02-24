<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<h3><b>Tambah Lembur Pegawai</b></h3>
<hr>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Lemburpegawai']); ?>


	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Kode Lembur', 'Kode Lembur : '); ?>

		<select class="form-control" name="Kode_lembur_id"> 
		<?php $__currentLoopData = $katlem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<?php echo Form::label('Nama Pegawai', 'Nama Pegawai : '); ?>

		<select class="form-control" name="Pegawai_id"> 
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->users->name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group<?php echo e($errors->has('Jumlah_jam') ? ' has-error' : ''); ?>">
     	<label for="Jumlah_jam">Jumlah Jam</label>
                      
     	<input id="Jumlah_jam" type="text" class="form-control" name="Jumlah_jam" value="<?php echo e(old('Jumlah_jam')); ?>" required autofocus>

        <?php if($errors->has('Jumlah_jam')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Jumlah_jam')); ?></strong>
      	</span>
      <?php endif; ?>
                            
    </div>
    </div>

    <div class="col-md-4">
	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-primary']); ?>	
	<?php echo Form::close(); ?>

	</div>
	</div>
	
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>