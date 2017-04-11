<?php $__env->startSection('container'); ?>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="<?php echo e(url('dosen')); ?>"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Dosen</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo e($dosen->nama); ?></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><?php echo e($dosen->nip); ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo e($dosen->alamat); ?></td>
			</tr>
			<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo e($dosen->pengguna->username); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><?php echo e($dosen->pengguna->password); ?></td>
		</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td><?php echo e($dosen->created_at); ?></td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal</td>
				<td class="col-xs-1"> :</td>
				<td><?php echo e($dosen->updated_at); ?></td>
			</tr>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>