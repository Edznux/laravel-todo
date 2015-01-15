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
	<link rel="stylesheet" href="/css/main.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Ma Todo list</a>
				<a class="navbar-text" href="#">A faire</a>
				<a class="navbar-text" href="#">Fait </a>	
			</div>
		</div>
	</nav>

	<div class="jumbotron">
	  <div class="container">
		<p>Ajouter une tâche à ma liste:</p>
		{{ Form::open(['url' => '/tasks','class'=>'form-inline']) }}
		{{ Form::text('tache', null,['placeholder'=>'Saisissez votre tâche ici','class'=>'col-xs-12 col-md-8 input-lg square']);}}
		{{ Form::submit('Ajouter',['class'=>'btn btn-lg col-xs-12 col-md-offset-1 col-md-3 square']);}}
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