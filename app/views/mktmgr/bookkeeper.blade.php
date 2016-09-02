@extends('layout.dashboard')

@section('page_heading','Bookkeeper')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.bookkepermenu')
    </header>

<div class="container">
  <!-- <p id="menulist">
      <a href="{{ URL::route('mktmgr-bookkeeper')}}" >Bookkeeper</a>
  </p> -->
 
 
</div>
@stop
