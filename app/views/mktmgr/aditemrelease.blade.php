@extends('layout.dashboard')
@section('page_heading','Store Orders')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storeordersmenu')
    </header>
<div class="container" style="padding-top:10px;">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Description</th>
        <th>Ad Retail</th>
        <th>Retail</th>
        <th>Sold</th>
        <th>Cases</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
      </tr>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
      </tr>
      <tr>
         <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
      </tr>
    </tbody>
  </table>
</div>
@stop
