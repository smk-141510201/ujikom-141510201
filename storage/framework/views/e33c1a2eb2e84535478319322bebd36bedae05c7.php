<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<h1><i class="fa fa-database"></i>&nbsp;<b>Data Penggajian</b></h1>
	<br>
	<a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>Photo</center></th>
			<th><center>Nama Pegawai</center></th>
			<th><center>NIP</center></th>
			<th><center>Jumlah Jam Lembur</center></th>
			<th><center>Jumlah Uang Lembur</center></th>
			<th><center>Gaji Pokok</center></th>
			<th><center>Total Gaji</center></th>
			<th><center>Tanggal Pengambilan</center></th>
			<th><center>Status Pengambilan</center></th>
			<th><center>Petugas Penerima</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><img height="50px" alt="Smiley face" width="50px" class="img-circle" src="assets/image/<?php echo e($data->tunjangan_pegawais->pegawais->Photo); ?>"></center></td>
			<td><center><?php echo e($data->tunjangan_pegawais->pegawais->users->name); ?></center></td>
			<td><center><?php echo e($data->tunjangan_pegawais->pegawais->Nip); ?></center></td>
			<td><center><?php echo e($data->Jumlah_jam_lembur); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->Jumlah_uang_lembur)); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->Gaji_pokok)); ?></center></td>
			<td><center>Rp. <?php echo e(number_format($data->Total_gaji)); ?></center></td>
			<td><center><?php echo e($data->Tanggal_pengambilan); ?></center></td>
			<td><center> <?php if($data->Tanggal_pengambilan == ""&&$data->Status_pengambilan == "0"): ?>
				Gaji Belum Diambil 
				<div class="col-md-12">
				<a class="btn btn-danger col-md-12" href="<?php echo e(route('Penggajian.edit',$data->id)); ?>">Ubah Pengambilan</a>
				</div>
						<?php elseif($data->Tanggal_pengambilan == ""||$data->Status_pengambilan == "0"): ?>
						Gaji Belum Diambil
				<div class="col-md-12">
				<a class="btn btn-danger col-md-12 " href="<?php echo e(route('Penggajian.edit',$data->id)); ?>">Ubah Pengambilan</a>
				</div>
						<?php else: ?>
						Gaji Sudah Diambil Pada <?php echo e($data->Tanggal_pengambilan); ?>

						<?php endif; ?> </center></td>
			<td><center><?php echo e($data->Petugas_penerima); ?></center></td>
			<td><center><a href="<?php echo e(url('Penggajian', $data->id)); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="<?php echo e(route('Penggajian.edit', $data->id)); ?>" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]); ?>

				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>