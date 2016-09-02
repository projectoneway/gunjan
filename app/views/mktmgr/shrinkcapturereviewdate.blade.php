@extends('layout.dashboard')
@section('page_heading','Shrink Capture Review')
@section('content')
@section('section')
<div class="container">
<form action="{{URL::route('mktmgr-shrink-capture-review-date')}}" method="post" class="form-horizontal" role="form"> 
<!--  <div class="col-sm-6"> -->
<table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

</form>
 
</div>
@stop
