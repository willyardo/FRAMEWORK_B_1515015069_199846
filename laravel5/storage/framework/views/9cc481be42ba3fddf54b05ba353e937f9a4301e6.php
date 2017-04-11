<?php $__env->startSection('container'); ?>

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="<?php echo e(url('mahasiswa')); ?>"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Mahasiswa</strong>
	</div>
	<?php echo Form::model($mahasiswa,['url'=>'mahasiswa/edit/'.$mahasiswa->id,'class'=>'form-horizontal']); ?>

	<?php echo $__env->make('mahasiswa.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
	</div>
	<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>