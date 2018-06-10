@extends('layout.app')

@section('content')
	<div class="wrapper">
		<h1 style="margin-bottom: 20px;">イベント検索</h1>
		<search-form title="{{ $title }}" tag="{{ $tag }}"></search-form>
	</div>
@endsection