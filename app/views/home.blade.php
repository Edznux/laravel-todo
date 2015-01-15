@extends('layout')

@section('faire')
	@foreach ($tasks as $task)
		@if($task->done == 0)
			<div class="bouttons">
				<p>
					{{ $task->text }}
				</p>
				{{Form::open(['class' => 'form', 'method' => 'put', 'action' => ['TasksController@update', $task->id]])}}
			  	<button type="submit" class="btn btn-xl btn-success square boutton" bouttons>
					 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				</button>
				{{ Form::close() }}

				{{ Form::open(['class'=>'form', 'method' => 'delete','action' => ['TasksController@destroy', $task->id]]) }}
				<button type="submit" name="delete" class="btn btn-xl btn-danger square boutton">
					 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				{{ Form::close() }}
			</div>
		@endif
	@endforeach
@stop

@section('fait')
	@foreach ($tasks as $task)
			@if($task->done == 1)
			<div class="tache">	
				<p>
					{{ $task->text }}
				</p>
				<div class="bouttons">
					{{ Form::open(['class'=>'form', 'method' => 'delete','action' => ['TasksController@destroy', $task->id]]) }}
						<button type="submit" class="btn btn-xl btn-danger square boutton">
							 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					{{ Form::close() }}	
				</div>
			</div>
			@endif
	@endforeach
@stop
