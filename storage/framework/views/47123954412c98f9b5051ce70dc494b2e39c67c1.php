<?php $__env->startSection('content'); ?>

<div class="container">
	<h1>Data Lembur Pegawai</h1>
	<br>
	<a href="<?php echo e(url('/Lemburpegawai/create')); ?>" class="btn btn-warning">Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="warning">
			<th><center>No</center></th>
			<th><center>Kode Lembur</center></th>
			<th><center>Nip</center></th>
			<th><center>Jumlah Jam</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($data->kategori_lemburs->Kode_lembur_id); ?></center></td>
			<td><center><?php echo e($data->pegawais->Nip); ?></center></td>
			<td><center><?php echo e($data->Jumlah_jam); ?></center></td>
			<td><center><a href="<?php echo e(url('Lemburpegawai', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="<?php echo e(route('Lemburpegawai.edit', $data->id)); ?>" class="btn btn-danger">Ubah</a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Lemburpegawai.destroy', $data->id]]); ?>

				<?php echo Form::submit('Hapus', ['class' =>'btn btn-success']); ?>

			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>