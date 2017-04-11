<?php $__env->startSection('container'); ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Mahasiswa </strong>
		<a href="<?php echo e(url('mahasiswa/tambah')); ?>" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Mahasiswa </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> NIM </th>
				<th> Alamat </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			<?php foreach($semuaMahasiswa as $mahasiswa): ?>
				<tr>
					<td><?php echo e($x++); ?></td>
					<td><?php echo e(isset($mahasiswa->nama) ? $mahasiswa->nama : 'nama kosong'); ?></td>
					<td><?php echo e(isset($mahasiswa->nim) ? $mahasiswa->nim : 'nim kosong'); ?></td>
					<td><?php echo e(isset($mahasiswa->alamat) ? $mahasiswa->alamat : 'alamat kosong'); ?></td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="<?php echo e(url('mahasiswa/edit/'.$mahasiswa->id)); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="<?php echo e(url('mahasiswa/'.$mahasiswa->id)); ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="<?php echo e(url('mahasiswa/hapus/'.$mahasiswa->id)); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>