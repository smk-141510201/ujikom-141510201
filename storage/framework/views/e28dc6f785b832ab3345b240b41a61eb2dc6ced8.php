<?php $__env->startSection('content'); ?>

<div class="container">
	<h1>Data Golongan</h1>
	<br>
	<a href="<?php echo e(url('/Golongan/create')); ?>" class="btn btn-warning">Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="warning">
			<th><center>No</center></th>
			<th><center>Kode Golongan</center></th>
			<th><center>Nama Golongan</center></th>
			<th><center>Besaran Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($data->Kode_golongan); ?></center></td>
			<td><center><?php echo e($data->Nama_golongan); ?></center></td>
			<td><center><?php echo e($data->Besaran_uang); ?></center></td>
			<td><center><a href="<?php echo e(url('Golongan', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="<?php echo e(route('Golongan.edit', $data->id)); ?>" class="btn btn-danger">Ubah</a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Golongan.destroy', $data->id]]); ?>

				<?php echo Form::submit('Hapus', ['class' =>'btn btn-success']); ?>

			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>