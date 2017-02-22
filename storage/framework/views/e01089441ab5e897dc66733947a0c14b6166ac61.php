<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="panel-heading"><h3><b>Tambah Kategori Lembur</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Kategorilembur']); ?>


	<div class="form-group<?php echo e($errors->has('Kode_lembur') ? ' has-error' : ''); ?>">
     	<label for="Kode_lembur">Kode Golongan</label>
                     
     	<input id="Kode_lembur" type="text" class="form-control" name="Kode_lembur" value="<?php echo e(old('Kode_lembur')); ?>" required autofocus>

        <?php if($errors->has('Kode_lembur')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Kode_lembur')); ?></strong>
      	</span>
      <?php endif; ?>                     
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

		<select class="form-control" na<option>--= Nama Golongan =--
		<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>
	<div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
     	<label for="Besaran_uang">Besaran Uang</label>
                      
     	<input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="<?php echo e(old('Besaran_uang')); ?>" required autofocus>

        <?php if($errors->has('Besaran_uang')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Besaran_uang')); ?></strong>
      	</span>
      <?php endif; ?>
                            
    </div>

	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-warning']); ?>	
	<?php echo Form::close(); ?>

	</div>
	
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>