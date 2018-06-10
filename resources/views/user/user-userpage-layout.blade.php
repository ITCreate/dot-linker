@extends('layout.app')

@section('content')
  <div class="wrapper">
    <div class="row my-page">
      <div class="col my-info">
        @include('components/user-profile', [ 'user' => $user ])
        @include('components/user-tag-list', [ 'tags' => $user->tags ])
      </div>
      <div class="col my-event">
      @yield("event-tab")
        <div class="col event-list box">
          @foreach( $events as $event)
            @include('components.event',['event' => $event])
          @endforeach
          <div class="">
            {{$events->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection