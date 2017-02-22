<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="panel-heading"><h3><b>Tambah Penggajian</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Penggajian']); ?>

	<?php echo e(csrf_field()); ?>


	 <div class="col-md-12">
     	<label for="jabatans">Nama Pegawai</label>
        <select class="col-md-6 form-control" name="Tunjangan_pegawai_id">
             <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
             <option  value="<?php echo e($data->id); ?>" ><?php echo e($data->pegawais->users->name); ?></option>

			 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
             <span class="help-block">
 		<?php echo e($errors->first('Tunjangan_pegawai_id')); ?>

        	</span>
      <div>
       <?php if(isset($error)): ?>
       Check Lagi Gaji Sudah Ada
       <?php endif; ?>
       </div>
       </div>
       <div class="col-md-12"></div>
	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-warning']); ?>	
	<?php echo Form::close(); ?>

	</div>
	
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>