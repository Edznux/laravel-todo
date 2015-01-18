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
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="/css/main.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<!-- Menu hamberger -->
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="/">Ma todo list</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="">
				<a href="#" onclick="hide('faire')">
					A faire
				</a>
			</li>
			<li>
				<a href="#" onclick="hide('fait')">
					Fait
				</a>
			</li>
		</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

	<div class="jumbotron">
	  <div class="container">
		@if($errors->has("text"))
			<div class="alert alert-danger">La tâche doit faire un minimum de 8 caractères</div>
		@endif
		<p>Ajouter une tâche à ma liste:</p>
		{{ Form::open(['url' => '/tasks','class'=>'form-inline']) }}
		{{ Form::text('text', null,['placeholder'=>'Saisissez votre tâche ici','class'=>'col-xs-12 col-md-8 input-lg square']);}}
		{{ Form::submit('Ajouter',['class'=>'btn btn-default btn-lg col-xs-12 col-md-offset-1 col-md-3 square']);}}
		{{ Form::close() }}
	  </div>
	</div>

	<div class="container">
	  <div class="row">
		<div class="col-md-6" id="faire">
		  <h2>A faire</h2>
			@yield('faire')
		</div>

		<div class="col-md-6" id="fait">
		  <h2>Fait</h2>
			@yield('fait')
	   </div>
	  </div>
	</div>
	<script src="/js/main.js"></script>
  </body>
</html>
