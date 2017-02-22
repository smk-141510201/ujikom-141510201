<?php $__env->startSection('content'); ?>

<div class="container">
	<h1>Data Penggajian</h1>
	<br>
	<a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-warning">Tambah Data</a>
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
			<td><center><?php echo e($data->tunjangan_pegawais->Kode_tunjangan); ?></center></td>
			<td><center><?php echo e($data->Jumlah_jam_lembur); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->Jumlah_uang_lembur)); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->Gaji_pokok)); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->Total_gaji)); ?></center></td>
			<td><center><?php echo e($data->Tanggal_pengembalian = $data->updated_at); ?></center></td>
			<td><center><?php echo e($data->Status_pengembalian); ?></center></td>
			<td><center><?php echo e($data->Petugas_penerima); ?></center></td>
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>