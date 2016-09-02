@extends('layout.dashboard')
@section('page_heading','Store Orders')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storeordersmenu')
    </header>
<div class="container" style="padding-top:10px;">
 <div class="col-lg-6">
<div class="form-group">
  <label for="inputEmail3" class="col-sm-4 control-label">Date</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="seldate" placeholder="Selected Date" />
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-sm-4 control-label">Sorted by</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="producttype" placeholder="PRODUCT TYPE" />
  </div>
</div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Description</th>
        <th>Ad Retail</th>
        <th>Retail</th>
        <th>Retail</th>
        <th>Sold</th>
        <th>Cases</th>
        <th>PO Qty</th>
        <th>Order Qty</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
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
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
      </tr>
    </tbody>
  </table>
</div>
@stop
