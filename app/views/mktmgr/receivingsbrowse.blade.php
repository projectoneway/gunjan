@extends('layout.dashboard')

@section('page_heading','Receivings >> Printer Selection Menu')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
<div class="container">
 <!--  <p id="menulist">
      <a href="{{ URL::route('mktmgr-receivings')}}" >Receivings</a> >> 
      <a href="{{ URL::route('mktmgr-receivings-browse')}}" >Browse</a>
  </p> -->
  <p>
    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
  <div class="row">
    <label for="name">Your name:</label>
    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
  </div>
  <div class="row">
    <label for="email">Your email:</label>
    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
  </div>
  <div class="row">
    <label for="message">Your message:</label>
    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
  </div>
  <input id="submit_button" type="submit" value="Send email" />
</form>           
  </p>
 
</div>
@stop
