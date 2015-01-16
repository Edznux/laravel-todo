@extends('layout')

@section('faire')
	@foreach ($tasks as $task)
		@if($task->done == 0)
		<div class="tache">
			<p class="col-xs-8">
				{{ $task->text }}
			</p>
			<div class="">
				{{Form::open(['class' => 'form', 'method' => 'put', 'action' => ['TasksController@update', $task->id]])}}
			  	<button type="submit" class="btn btn-success square col-md-1 col-xs-2">
					 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				</button>
				{{ Form::close() }}

				{{ Form::open(['class'=>'form', 'method' => 'delete','action' => ['TasksController@destroy', $task->id]]) }}
				<button type="submit" name="delete" class="btn btn-danger square col-md-1 col-xs-2">
					 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				<div class="clearfix"></div>
				{{ Form::close() }}
			</div>
		</div>
		@endif
	@endforeach
@stop

@section('fait')
	@foreach ($tasks as $task)
			@if($task->done == 1)
			<div class="tache">
				<p class="col-xs-8">
					{{ $task->text }}
				</p>
				<div class="">
					{{ Form::open(['class'=>'form', 'method' => 'delete','action' => ['TasksController@destroy', $task->id]]) }}
						<button type="submit" class="btn btn-danger square col-md-1 col-xs-2">
							 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					{{ Form::close() }}	
				</div>
				<div class="clearfix"></div>
			</div>
			@endif
	@endforeach
@stop
