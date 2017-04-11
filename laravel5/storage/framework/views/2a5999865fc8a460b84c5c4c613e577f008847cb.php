<?php $__env->startSection('container'); ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Ruangan </strong>
		<a href="<?php echo e(url('ruangan/tambah')); ?>" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Ruangan </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Title </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			<?php foreach($data as $ruangan): ?>
				<tr>
					<td><?php echo e($x++); ?></td>
					<td><?php echo e(isset($ruangan->title) ? $ruangan->title : 'title kosong'); ?></td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="<?php echo e(url('ruangan/edit/'.$ruangan->id)); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="<?php echo e(url('ruangan/'.$ruangan->id)); ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="<?php echo e(url('ruangan/hapus/'.$ruangan->id)); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>