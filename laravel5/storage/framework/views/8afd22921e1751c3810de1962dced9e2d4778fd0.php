<?php $__env->startSection('container'); ?>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="<?php echo e(url('mahasiswa')); ?>"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Mahasiswa</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo e($mahasiswa->nama); ?></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php echo e($mahasiswa->nim); ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo e($mahasiswa->alamat); ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo e($mahasiswa->pengguna->username); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><?php echo e($mahasiswa->pengguna->password); ?></td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td><?php echo e($mahasiswa->created_at); ?></td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td><?php echo e($mahasiswa->updated_at); ?></td>
		</tr>
	</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>