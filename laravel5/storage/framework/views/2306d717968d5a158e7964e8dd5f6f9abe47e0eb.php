<?php $__env->startSection('container'); ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="<?php echo e(url('jadwal_matakuliah/tambah')); ?>" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>NIM Mahasiswa</th>
				<th>Mata Kuliah</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			<?php foreach($semuaJadwalMatkul as $jadwal): ?>
			<tr>
				<td><?php echo e($x++); ?></td>
				<td><?php echo e(isset($jadwal->mahasiswa->nama) ? $jadwal->mahasiswa->nama : 'nama kosong'); ?></td>
				<td><?php echo e(isset($jadwal->mahasiswa->nim) ? $jadwal->mahasiswa->nim : 'nim kosong'); ?></td>
				<td><?php echo e(isset($jadwal->dosen_matakuliah->matakuliah->title) ? $jadwal->dosen_matakuliah->matakuliah->title : 'kosong'); ?></td>				
				<td>
					<div class="btn-group" role="group">
						<a href="<?php echo e(url('jadwal_matakuliah/edit/'.$jadwal->id)); ?>" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="<?php echo e(url('jadwal_matakuliah/lihat/'.$jadwal->id)); ?>" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="<?php echo e(url('jadwal_matakuliah/hapus/'.$jadwal->id)); ?>" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>