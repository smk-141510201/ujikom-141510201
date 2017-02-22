<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Tambah Penggajian</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Penggajian']); ?>


	<div class="form-group">
		<?php echo Form::label('Nama Pegawai', 'Nama Pegawai: '); ?>

		<select class="form-control" name="Pegawai_id"> 
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($data->id); ?>"><?php echo e($data->users->name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	</div>

	<div class="form-group">
		<?php echo Form::label('Kode Tunjangan Pegawai', 'Kode Tunjangan Pegawai :'); ?>

		<input type="text" name="Tunjangan_pegawai_id" class="form-control" placeholder="<?php echo e($data->Kode_tunjangan); ?>" readonly>
	</div>

	<div class="form-group">
		<?php echo Form::label('Jumlah Jam Lembur', 'Jumlah Jam Lembur :'); ?>

		<input type="text" name="Jumlah_jam_lembur" class="form-control" placeholder="<?php echo e($data->Jumlah_jam_lembur); ?>" readonly>
	</div>
	<div class="form-group">
		<?php echo Form::label('Jumlah Uang Lembur', 'Jumlah Uang Lembur :'); ?>

		<input type="text" name="Jumlah_uang_lembur" class="form-control" placeholder="<?php echo e($data->Jumlah_uang_lembur); ?>" readonly>
	</div>
	<div class="form-group">
		<?php echo Form::label('Gaji Pokok', 'Gaji Pokok :'); ?>

		<input type="text" name="Gaji_pokok" class="form-control" placeholder="<?php echo e($data->Gaji_pokok); ?>" readonly>
	</div>
	<div class="form-group">
		<?php echo Form::label('Total Gaji', 'Total Gaji :'); ?>

		<input type="text" name="Total_gaji" class="form-control" placeholder="<?php echo e($data->Total_gaji); ?>" readonly>
	</div>
	<div class="form-group">
		<?php echo Form::label('Tanggal Pengambilan', 'Tanggal Pengambilan :'); ?>

		<input type="text" name="Tanggal_pengambilan" class="form-control" placeholder="<?php echo e($data->updated_at); ?>" readonly>
	</div>

	<div class="form-group">
	<label>Status Pengambilan
		<select type="text" class="form-control" name="Status_pengembalian" required>
			<option>Sudah Diambil</option>
			<option>Belum Diambil</option>
		</select>
		</label>
	</div>
	<div class="form-group">
		<?php echo Form::label('Petugas Penerima', 'Petugas Penerima :'); ?>

		<?php echo Form::text('Petugas_penerima', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-warning']); ?>	
	<?php echo Form::close(); ?>

	</div>
	
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>