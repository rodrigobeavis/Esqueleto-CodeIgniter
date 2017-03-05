<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo asset_url()?>css/style.css" rel="stylesheet"/>
	<meta charset="UTF-8">
</head>
<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url()?>">MVC Básico</a>
					</div>
					<div class="nav navbar-right navbar-nav">
						<ul class="nav navbar-nav">
							<li <?php echo isset($menu_ativo) && $menu_ativo=='home'?'class="active"':''?>><a href="<?php echo site_url();?>">Home</a></li>
							<li <?php echo isset($menu_ativo) && $menu_ativo=='sobre'?'class="active"':''?>><a href="<?php echo site_url()?>sobre">Sobre</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main class="container">
			<div class="col-md-8">
				<?php echo $body ?>
			</div>
			<div class="col-md-4">
				Esta é minha sidebar.
			</div>
		</main>

		<footer class="container">
			
		</footer>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<?php if (!empty($scripts_adicionais)):
			foreach ($scripts_adicionais as $script_adicional): ?>
				<script src="<?php echo asset_url()?>js/'.$script_adicional?>"></script>
		<?php endforeach; endif; ?>
		<script src="<?php echo asset_url()?>js/custom.js"></script>
	</body>
</html> 