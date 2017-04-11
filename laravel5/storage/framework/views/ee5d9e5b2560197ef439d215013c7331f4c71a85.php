<?php $__env->startSection('container'); ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Dosen </strong>
		<a href="<?php echo e(url('dosen/tambah')); ?>" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Dosen </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> NIP </th>
				<th> Alamat </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			<?php foreach($semuaDosen as $dosen): ?>
				<tr>
					<td><?php echo e($x++); ?></td>
					<td><?php echo e(isset($dosen->nama) ? $dosen->nama : 'nama kosong'); ?></td>
					<td><?php echo e(isset($dosen->nip) ? $dosen->nip : 'nip kosong'); ?></td>
					<td><?php echo e(isset($dosen->alamat) ? $dosen->alamat : 'alamat kosong'); ?></td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="<?php echo e(url('dosen/edit/'.$dosen->id)); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="<?php echo e(url('dosen/'.$dosen->id)); ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="<?php echo e(url('dosen/hapus/'.$dosen->id)); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>