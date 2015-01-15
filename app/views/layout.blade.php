<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Todo list</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Ma Todo list</a>
				<a class="" href="#">A faire</a>
				<a class="" href="#">Fait </a>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
	  <div class="container">
		<p>Ajouter une tâche à ma liste:</p>
		{{ Form::open(array('url' => '/tasks')) }}
			<?php
				echo Form::token();
				echo Form::text('tache');
				echo Form::submit('Ajouter');
			?>
		{{ Form::close() }}
	  </div>
	</div>

	<div class="container">

	  <div class="row">
		<div class="col-md-6">
		  <h2>A faire</h2>
		  	@yield('faire')
		</div>
		<div class="col-md-6">
		  <h2>Fait</h2>
		 	@yield('fait')
	   </div>
	  </div>
	</div>
  </body>
</html>