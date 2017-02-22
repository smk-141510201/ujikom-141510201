<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<h1>Data Tunjangan Pegawai</h1>
	<br>
	<a href="<?php echo e(url('/Tunjanganpegawai/create')); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="warning">
			<th><center>No</center></th>
			<th><center>Kode Tunjangan</center></th>
			<th><center>Photo</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama Pegawai</center></th>
			<th><center>Jabatan</center></th>
			<th><center>Golongan</center></th>
			<th><center>Besar Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $tunpeg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($data->tunjangans->Kode_tunjangan); ?></center></td>
			<td><center><img src="<?php echo e(asset('/assets/image/'.$data->pegawais->Photo)); ?>" height="100px" width="100px"></center></td>
			<td><center><?php echo e($data->pegawais->Nip); ?></center></td>
			<td><center><?php echo e($data->pegawais->users->name); ?></center></td>
			<td><center><?php echo e($data->pegawais->jabatans->Nama_jabatan); ?></center></td>
			<td><center><?php echo e($data->pegawais->golongans->Nama_golongan); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->tunjangans->Besaran_uang )); ?></center></td>
			<td><center><a href="<?php echo e(url('Tunjanganpegawai', $data->id)); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="<?php echo e(route('Tunjanganpegawai.edit', $data->id)); ?>" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Tunjanganpegawai.destroy', $data->id]]); ?>

				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>