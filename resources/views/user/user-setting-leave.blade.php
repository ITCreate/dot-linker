@extends('layout.app')

@section('content')
  <div class="wrapper">
    @include('components/user-setting-menu', [ 'current' => 'leave' ])
    <h2 class="user-setting-sub-title">退会</h2>
    <div class="box">
      <p>
        今まで.Linkerをご利用いただきありがとうございました。またあなたに会えることを楽しみにしています。
      </p>
      <div>
        現在、この機能は利用できません。
      </div>      
    </div>
  </div>
@endsection

