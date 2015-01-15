@extends('layout')

@section('faire')
	@foreach ($tasks as $task)
	<p>
		{{ $task->text }}
		  <input type="checkbox"/>
		  <input type="checkbox"/>
	</p>
	@endforeach
@stop

@section('fait')
	@foreach ($tasks as $task)
	<p>
		{{ $task->text }}
		  <input type="checkbox"/>
		  <input type="checkbox"/>
	</p>
	@endforeach
@stop
