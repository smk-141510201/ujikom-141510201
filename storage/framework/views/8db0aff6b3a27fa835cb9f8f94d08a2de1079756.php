<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<h1><b><i class="fa fa-database"></i>&nbsp;Data Lembur Pegawai</b></h1>
	<br>
	<a href="<?php echo e(url('/Lemburpegawai/create')); ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>Kode Lembur</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama pegawai</center></th>
			<th><center>Jumlah Jam</center></th>
			<th><center>Besaran Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($data->kategori_lemburs->Kode_lembur); ?></center></td>
			<td><center><?php echo e($data->pegawais->Nip); ?></center></td>
			<td><center><?php echo e($data->pegawais->users->name); ?></center></td>
			<td><center><?php echo e($data->Jumlah_jam); ?> Jam</center></td>
			<td><center>Rp. <?php echo e(number_format($data->kategori_lemburs->Besaran_uang * $data->Jumlah_jam)); ?></center></td>
			<td><center><a href="<?php echo e(url('Lemburpegawai', $data->id)); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="<?php echo e(route('Lemburpegawai.edit', $data->id)); ?>" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Lemburpegawai.destroy', $data->id]]); ?>

				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
				
			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>