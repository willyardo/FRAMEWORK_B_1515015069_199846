<?php $__env->startSection('container'); ?>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="<?php echo e(url('pengguna')); ?>"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Pengguna</strong>

	</div>
	<table class="table">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo e($pengguna->username); ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo e($pengguna->password); ?></td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td><?php echo e($pengguna->created_at); ?></td>
			</tr>
			<tr>
				<td class="col-xs-1">:</td>
				<td><?php echo e($pengguna->updated_at); ?></td>
			</tr>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>