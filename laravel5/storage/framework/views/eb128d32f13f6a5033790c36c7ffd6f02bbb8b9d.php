<?php $__env->startSection('container'); ?>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="<?php echo e(url('dosen_matakuliah')); ?>"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Jadwal Dosen</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama Dosen</td>
				<td>:</td>
				<td><?php echo e($dosen_matakuliah->dosen->nama); ?></td>
			</tr>
			<tr>
				<td>NIP Dosen</td>
				<td>:</td>
				<td><?php echo e($dosen_matakuliah->dosen->nip); ?></td>
			</tr>			
			<tr>
				<td>Nama Matakuliah</td>
				<td>:</td>
				<td><?php echo e($dosen_matakuliah->matakuliah->title); ?></td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td><?php echo e($dosen_matakuliah->created_at); ?></td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal</td>
				<td class="col-xs-1"> :</td>
				<td><?php echo e($dosen_matakuliah->updated_at); ?></td>
			</tr>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>