@extends('layout.dashboard')

@section('page_heading','Non Perishable Inventory Prep')
@section('content')
@section('section')

<header class="row">
       
    </header>
<div class="container">
  <div class="menu_search_line">    
<div class="dropdown sub">
            <a  href="{{ URL::route('mktmgr-returnhome')}}" >
                Exit
            </a>
        </div>
</div></div>
<div class="container" style="padding-top:10px;">
  <form action="#" class="form-horizontal" method="post" role="form" style="display: block;"> 
<table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th>Total</th>
        <th>Total</th>
        <th>Total</th>
        <th colspan="4">Current Inventories with a STATUS of</th>
        <th></th>
      </tr>
      <tr>
        <th>Dept Number</th>
        <th>Dept Desc</th>
        <th>Value at cost</th>
        <th>Value at RT1</th>
        <th>CRV at RT1</th>
        <th>O</th>
        <th>C</th>
        <th>V</th>
        <th>A</th>
        <th>R</th>
        <th>S</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="{{ URL::route('mktmgr-noninvdeptinfo') }}">1</a></td>
        <td>Grocery</td>
        <td>$0.00</td>
        <td>$0.00</td>
        <td>$0.00</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>41</td>
      </tr>
      
    </tbody>
  </table>

   <div class="form-group">
        <div class="row">
        <div class="col-sm-12" align="center">
            <input type="submit" name="addinfo" id="addinfo" tabindex="4" value="Query" class="btn">
              {{ Form::token()}}
        </div>
        </div>
  </div>
 </form>
</div>
@stop
