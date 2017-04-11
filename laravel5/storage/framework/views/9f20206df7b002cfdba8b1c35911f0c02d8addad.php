<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		<?php echo Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]); ?>

	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">NIP</label>
	<div class="col-sm-10">
		<?php echo Form::text('nip',null,['class'=>'form-control','placeholder'=>"NIP"]); ?>

	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		<?php echo Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]); ?>

	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		<?php echo Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]); ?>

	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		<?php echo Form::password('password',null,['class'=>'form-control','placeholder'=>"Password"]); ?>

	</div>	
</div>


