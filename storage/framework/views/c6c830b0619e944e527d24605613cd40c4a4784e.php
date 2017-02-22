<?php $__env->startSection('content'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
	<h1>Data Jabatan</h1>
	<br>
	<a href="<?php echo e(url('/Jabatan/create')); ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
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
			<td><center>Rp. <?php echo e(number_format($data->Besaran_uang)); ?></center></td>
			<td><center><a href="<?php echo e(url('Jabatan', $data->id)); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="<?php echo e(route('Jabatan.edit', $data->id)); ?>" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				<?php echo Form::open(['method'=> 'DELETE', 'route' => ['Jabatan.destroy', $data->id]]); ?>

				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
			</center></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>