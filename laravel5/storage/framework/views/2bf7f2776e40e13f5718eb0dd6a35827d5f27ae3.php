<?php $__env->startSection('container'); ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="<?php echo e(url('pengguna')); ?>"><i class="fa text-default fa-chevron-left"></i></a> Perbarui data pengguna</strong>
	</div>
	<?php echo Form::model($pengguna,['url'=>'pengguna/edit/'.$pengguna->id,'class'=>'form-horizontal']); ?>

		<?php echo $__env->make('pengguna.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div style="widt:100%;text-align:right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	<?php echo Form::close(); ?>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>