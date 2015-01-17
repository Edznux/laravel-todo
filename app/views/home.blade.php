@extends('layout')

@section('faire')
	@foreach ($tasks as $task)	
		@if($task->done == 0)
		<div class="tache">
			<div class="col-xs-9">
				<div class="tache-text">
					{{ $task->text }}
				</div>
			</div>
			<div class="col-xs-3">
				<div class="tache-button"> 
					{{Form::open(['class' => 'form pull-left', 'method' => 'put', 'action' => ['TasksController@update', $task->id]])}}
				  	<button type="submit" class="btn btn-success square">
						 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</button>
					{{ Form::close() }}

					{{ Form::open(['class'=>'form pull-right', 'method' => 'delete','action' => ['TasksController@destroy', $task->id]]) }}
					<button type="submit" name="delete" class="btn btn-danger square">
						 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					{{ Form::close() }}
				</div>
			</div>
				<div style="clear:both;"></div>
		</div>
		@endif
	@endforeach
@stop

@section('fait')
	@foreach ($tasks as $task)
			@if($task->done == 1)
			<div class="tache">
				<div class="col-xs-9">
					<div class="tache-text">
						{{ $task->text }}
					</div>
				</div>
				<div class="col-xs-3">
					<div class="tache-button">
						{{ Form::open(['class'=>'form', 'method' => 'delete','action' => ['TasksController@destroy', $task->id]]) }}
							<button type="submit" class="btn btn-danger square pull-rigth">
								 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
						{{ Form::close() }}	
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
			@endif
	@endforeach
@stop
