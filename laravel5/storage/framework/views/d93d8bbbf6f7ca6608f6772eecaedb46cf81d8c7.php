<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $__env->yieldContent('page_title','Halaman Awal'); ?> | Laboratorium Pemrograman FW</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('component/bootstrap/dist/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('component/font-awesome/css/font-awesome.min.css')); ?>">

		<style type="text/css">
				body {
						padding-top: 70px;
						padding-bottom: 70px;
				}
				.starter-template {
					padding: 40px 15px;
					text-align: center;
				}
				.form-horizontal{
					padding-top: 15px 10px;
				}
				footer{
					padding-top: 15px;
					text-align: right;
				}
		</style>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		<a class="navbar-brand" href="<?php echo e(url('/')); ?>"> Laravel -5	</a>		
				</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Mahasiswa <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li><a href="<?php echo e(url('mahasiswa')); ?>"> Data Mahasiswa</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo e(url('jadwal_matakuliah')); ?>"> Jadwal Mahasiswa </a></li>	
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dosen <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li><a href="<?php echo e(url('dosen')); ?>"> Data Dosen</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo e(url('dosen_matakuliah')); ?>"> Jadwal Dosen Mengajar</a></li>	
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li><a href="<?php echo e(url('pengguna')); ?>"> Pengguna</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo e(url('ruangan')); ?>"> Ruangan</a></li>	
				<li><a href="<?php echo e(url('matakuliah')); ?>"> Matakuliah</a></li>	
			</ul>	
				</li>			
			</ul>	
		</div><!--/.nav-collapse -->		
			</div>	
		</nav>
		<div class="clearfix"></div>
		<div class="container">
			<?php if(Session::has('informasi')): ?>
				<div class="alert alert-info">
					<strong> Informasi : </strong>
			<?php echo e(Session::get('informasi')); ?>		
				</div>
			<?php endif; ?>
			<?php echo $__env->yieldContent('container'); ?>	
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			<!-- Please dont delete this -->
			created by <a href="https://www.facebook.com/willyarrdo"><span><i class="fa fa-facebook" style="color:#1da1f2"></i> @Willyardo</span></a>
			<!--/ Please dont delete this -->
		</footer>	
		</nav>
		<script type="text/javascript" src="<?php echo e(asset('component/jquery/dist/jquery.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('component/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
		<script type="text/javascript">
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			});	
			}
			</script>	
</body>
</html>	
