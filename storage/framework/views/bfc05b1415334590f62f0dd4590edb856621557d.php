<?php $__env->startSection('content'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
<h3><b>Tambah Jabatan</b></h3>
<hr>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Jabatan']); ?>


  <div class="col-md-4">
	 <div class="form-group<?php echo e($errors->has('Kode_jabatan') ? ' has-error' : ''); ?>">
     	<label for="Kode_jabatan">Kode Jabatan</label>
                      
     	<input id="Kode_jabatan" type="text" class="form-control" name="Kode_jabatan" value="<?php echo e(old('Kode_jabatan')); ?>" required autofocus>

        <?php if($errors->has('Kode_jabatan')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Kode_jabatan')); ?></strong>
      	</span>
      <?php endif; ?>
             
    </div>               
    </div>

  <div class="col-md-4">
	<div class="form-group<?php echo e($errors->has('Nama_jabatan') ? ' has-error' : ''); ?>">
     	<label for="Nama_jabatan">Nama Jabatan</label>
                      
     	<input id="Nama_jabatan" type="text" class="form-control" name="Nama_jabatan" value="<?php echo e(old('Nama_jabatan')); ?>" required autofocus>

        <?php if($errors->has('Nama_jabatan')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Nama_jabatan')); ?></strong>
      	</span>
      <?php endif; ?>
  </div>                   
    </div>

    <div class="col-md-4">
	<div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
     	<label for="Besaran_uang">Besaran Uang</label>
                      
     	<input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="<?php echo e(old('Besaran_uang')); ?>" required autofocus>

        <?php if($errors->has('Besaran_uang')): ?>
      	<span class="help-block">
      		<strong><?php echo e($errors->first('Besaran_uang')); ?></strong>
      	</span>
      <?php endif; ?>
                            
    </div>
    </div>
  <div class="col-md-6">
	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-info']); ?>	
	<?php echo Form::close(); ?>

	</div>
  </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>