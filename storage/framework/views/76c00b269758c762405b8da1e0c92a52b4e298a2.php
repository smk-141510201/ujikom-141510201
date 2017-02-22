<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Tambah Lembur Pegawai</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Lemburpegawai']); ?>


	<div class="form-group">
		<?php echo Form::label('Kode Lembur', 'Kode Lembur : '); ?>

		<select class="form-control" name="Kode_lembur_id"> 
		<?php $__currentLoopData = $katlem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>

	<div class="form-group">
		<?php echo Form::label('NIP', 'NIP : '); ?>

		<select class="form-control" name="Pegawai_id"> 
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nip); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>

	<div class="form-group<?php echo e($errors->has('Jumlah_jam') ? ' has-error' : ''); ?>">
     	<label for="Jumlah_jam">Jumlah Jam</label>
                      
     	<input id="Jumlah_jam" type="text" class="form-control" name="Jumlah_jam" value="<?php echo e(old('Jumlah_jam')); ?>" required autofocus>

        <?php if($errors->has('Jumlah_jam')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Jumlah_jam')); ?></strong>
      	</span>
      <?php endif; ?>
                            
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