@extends('layout')

@section('faire')
	@foreach ($tasks as $task)
	<p>
		{{ $task->text }}

		{{ Form::open(array('url' => "/tasks/$task->id")) }}
		  <button type="submit" class="btn btn-xl btn-default">
			 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		</button>
		{{ Form::close() }}
		{{ Form::open(array('url' => "/tasks/$task->id/delete")) }}
		<button type="submit" class="btn btn-xl btn-default">
			 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</button>
		{{ Form::close() }}
	</p>
	@endforeach
@stop

@section('fait')
	@foreach ($tasksDone as $task)
	<p>
		{{ $task->text }}
		{{ $task->id }}
		{{ Form::open(array('url' => "/tasks/$task->id/delete")) }}
		<button type="submit" class="btn btn-xl btn-default">
			 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</button>
		{{ Form::close() }}
	</p>
	@endforeach
@stop
