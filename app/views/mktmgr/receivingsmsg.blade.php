@extends('layout.dashboard')
@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>

<form class="form-horizontal" role="form" method="post" action="{{URL::route('mktmgr-post-queryresult')}}">
  <div class="container" style="">
  <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> 
       <p class="alert alert-info">A Query must be performed prior to using this option : <a href="{{ URL::route('mktmgr-receivings-query')}}">Query</a>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a></p>
  </div>
 </form>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@stop

