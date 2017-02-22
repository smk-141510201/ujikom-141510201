<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<h1>Data Penggajian</h1>
	<br>
	<a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="warning">
			<th><center>No</center></th>
			<th><center>Kode Tunjangan Pegawai</center></th>
			<th><center>Jumlah Jam Lembur</center></th>
			<th><center>Jumlah Uang Lembur</center></th>
			<th><center>Gaji Pokok</center></th>
			<th><center>Total Gaji</center></th>
			<th><center>Tanggal Pengembalian</center></th>
			<th><center>Status Pengembalian</center></th>
			<th><center>Petugas Penerima</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<img height="100px" alt="Smiley face" width="100px" class="img-circle" src="asset/assets/image/<?php echo e($data->tunjangan_pegawais->pegawais->Photo); ?>">
				<h3><?php echo e($data->tunjangan_pegawais->pegawais->users->name); ?></h3>
				<h4><?php echo e($data->tunjangan_pegawais->pegawais->Nip); ?></h4>
				<h5><b><?php if($data->Tanggal_pengambilan == ""&&$data->Status_pengambilan == "0"): ?>
				Gaji Belum Diambil 
				<div class="col-md-12">
				<a class="btn btn-primary col-md-12" href="<?php echo e(route('penggajian.edit',$datapenggajian->id)); ?>">Ubah Pengambilan</a>
				</div>
						<?php elseif($data->Tanggal_pengambilan == ""||$data->Status_pengambilan == "0"): ?>
						Gaji Belum Diambil
				<div class="col-md-12">
				<a class="btn btn-primary col-md-12 " href="<?php echo e(route('penggajian.edit',$datapenggajian->id)); ?>">Ubah Pengambilan</a>
				</div>
						<?php else: ?>
						Gaji Sudah Diambil Pada <?php echo e($data->Tanggal_pengambilan); ?>

						<?php endif; ?></b></h5>
				</h5>
			<td><center><a href="<?php echo e(url('Penggajian', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="<?php echo e(route('Penggajian.edit', $data->id)); ?>" class="btn btn-danger">Ubah</a></center></td>
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