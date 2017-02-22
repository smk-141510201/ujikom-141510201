<?php $__env->startSection('content'); ?>

<div class="container">
	<h1>Data Jabatan</h1>
	<br>
	<a href="<?php echo e(url('/Jabatan/create')); ?>" class="btn btn-warning">Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="warning">
			<th><center>No</center></th>
			<th><center>Kode Jabatan</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Besaran Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($data->Kode_jabatan); ?></center></td>
			<td><center><?php echo e($data->Nama_jabatan); ?></center></td>
			<td><center><?php echo e($data->Besaran_uang); ?></center></td>
			<td><center><a href="<?php echo e(url('Jabatan', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="<?php echo e(route('Jabatan.edit', $data->id)); ?>" class="btn btn-danger">Ubah</a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Jabatan.destroy', $data->id]]); ?>

				<?php echo Form::submit('Hapus', ['class' =>'btn btn-success']); ?>

			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>