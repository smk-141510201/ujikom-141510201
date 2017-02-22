<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Tambah Golongan</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Golongan']); ?>


	<div class="form-group<?php echo e($errors->has('Kode_golongan') ? ' has-error' : ''); ?>">
     	<label for="Kode_golongan">Kode Golongan</label>
                      
     	<input id="Kode_golongan" type="text" class="form-control" name="Kode_golongan" value="<?php echo e(old('Kode_golongan')); ?>" required autofocus>

        <?php if($errors->has('Kode_golongan')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Kode_golongan')); ?></strong>
      	</span>
      <?php endif; ?>                     
    </div>
	<div class="form-group<?php echo e($errors->has('Nama_golongan') ? ' has-error' : ''); ?>">
     	<label for="Nama_golongan">Nama Golongan</label>
                      
     	<input id="Nama_golongan" type="text" class="form-control" name="Nama_golongan" value="<?php echo e(old('Nama_golongan')); ?>" required autofocus>

        <?php if($errors->has('Nama_golongan')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Nama_golongan')); ?></strong>
      	</span>
      <?php endif; ?>                     
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
	<?php echo Form::submit('Save', ['class' => 'btn btn-warning']); ?>	
	<?php echo Form::close(); ?>

	</div>
	
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>