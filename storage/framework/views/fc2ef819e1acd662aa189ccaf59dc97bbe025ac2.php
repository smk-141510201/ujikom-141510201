<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<h1><b>Data Pegawai</b> (Dilihat Khusus Pegawai)</h1>
	<br><br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama pegawai</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Nama Golongan</center></th>
			<th><center>Permission</center></th>
			<th><center>Photo</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $showpeg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($data->Nip); ?></center></td>
			<td><center><?php echo e($data->users->name); ?></center></td>
			<td><center><?php echo e($data->jabatans->Nama_jabatan); ?></center></td>
			<td><center><?php echo e($data->golongans->Nama_golongan); ?></center></td>
			<td><center><?php echo e($data->users->permission); ?></center></td>
			<td><center><img src="<?php echo e(asset('/assets/image/'.$data->Photo)); ?>" height="100px" width="100px"></center></td>
			<td><center><a href="<?php echo e(url('Pegawai', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="<?php echo e(route('Pegawai.edit', $data->id)); ?>" class="btn btn-danger">Ubah</a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]); ?>

				<?php echo Form::submit('Hapus', ['class' =>'btn btn-success']); ?>

			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>