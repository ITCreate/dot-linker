@extends('layout.app')

@section('content')
	<div class="wrapper">
		<h1 class="title">イベント管理</h1>
		<div class="box">
			@foreach($organize_event as $event)
				@include('components.control-eventitem', [ 'event' => $event ])
			@endforeach
			{{ $organize_event->links() }}
		</div>
	</div>
@endsection