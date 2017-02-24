<?php $__env->startSection('content'); ?>


<div class="container-fluid">
<h3><b>Penggajian</b></h3>
<hr>

<div class="row">
<div class="col-md-6 ">
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/Penggajian')); ?>">
<?php echo e(csrf_field()); ?>



<div class="col-md-5">
<div class="form-group">
<label>Nama Pegawai</label>
   <select class="col-md-6 form-control" name="Tunjangan_pegawai_id">
      <?php $__currentLoopData = $tunpeg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
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
</div>

<div class="form-group">
<div class="col-md-6">
<label>Status Pengambilan</label>
    <select id="Status_pengambilan" type="text" class="form-control" name="Status_pengambilan" required>
      <option value="1">Sudah</option>
      <option value="0">Belum</option>
      </select> 
</div>
</div>
<div class="form-group">

<div class="col-md-3">
<button type="submit" class="btn btn-primary form-control">Tambah</button>
</div>
</div>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>