<?php $__env->startSection('container'); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><a href="<?php echo e(url('dosenmatakuliah')); ?>"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data Jadwal Dosen</strong>
		</div>
		<?php echo Form::open(['url'=>'dosen_matakuliah/simpan','class'=>'form-horizontal']); ?>

		<?php echo $__env->make('dosen_matakuliah.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div style="width:100%;text-align:right;">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>	
		</div>
		<?php echo Form::close(); ?>

	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>