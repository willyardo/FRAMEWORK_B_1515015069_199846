<?php $__env->startSection('container'); ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jadwal Dosen </strong>
		<a href="<?php echo e(url('dosen_matakuliah/tambah')); ?>" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Jadwal Dosen </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Dosen </th>
				<th> NIP Dosen </th>
				<th> Nama Matakuliah </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			<?php foreach($semuaDosen_matakuliah as $doskul): ?>
				<tr>
					<td><?php echo e($x++); ?></td>
					<td><?php echo e(isset($doskul->dosen->nama) ? $doskul->dosen->nama : 'nama kosong'); ?></td>
					<td><?php echo e(isset($doskul->dosen->nip) ? $doskul->dosen->nip : 'nip kosong'); ?></td>
					<td><?php echo e(isset($doskul->matakuliah->title) ? $doskul->matakuliah->title : 'matakuliah kosong'); ?></td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="<?php echo e(url('dosen_matakuliah/edit/'.$doskul->id)); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="<?php echo e(url('dosen_matakuliah/'.$doskul->id)); ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="<?php echo e(url('dosen_matakuliah/hapus/'.$doskul->id)); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>