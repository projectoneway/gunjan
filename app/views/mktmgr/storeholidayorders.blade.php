@extends('layout.dashboard')
@section('page_heading','Store Orders')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storeordersmenu')
    </header>
<hr></hr>
<div id="exTab2" class="container"> 


  <ul>
    <li class="active"><a href="#1" data-toggle="tab">Holiday Order 2015 - SSI Dry Grocery </a></li>
    <li><a href="#2" data-toggle="tab">Holiday Order 2015 - SSI Frozen Grocery</a></li>
    <li><a href="#3" data-toggle="tab">Holiday Order 2015 - Natomas</a></li>
    <li><a href="#4" data-toggle="tab">Holiday Order 2015 - UNFI</a></li>
    <li><a href="#5" data-toggle="tab">Holiday Order 2015 - Mkt Ctr IO</a></li>
    <li><a href="#6" data-toggle="tab">Holiday Order 2015 - Mkt Ctr</a></li>
  </ul>   

      <div class="tab-content">
        <div class="tab-pane active" id="1">
           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Description</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>615074</td>
        <td>SHPR FRENCH'S FRENCH FRIED ON</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>615071</td>
        <td>FRENCH FRIED ONIONS ORIGINAL</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
         <td>615111</td>
        <td>SHPR RALEY'S GOURMET FRENCH FR</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr>
         <td>615110</td>
        <td>RALEY'S GOURMET FRENCH FRIED O</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

       <tr>
         <td>616430</td>
        <td>LIBBY SOLID PACK PUMPKIN</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
<hr> </hr>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Lines</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
          
            
      </div>

      <div class="tab-pane" id="2">
            <table class="table table-striped">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Description</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>615074</td>
        <td>SHPR FRENCH'S FRENCH FRIED ON</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>615071</td>
        <td>FRENCH FRIED ONIONS ORIGINAL</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
         <td>615111</td>
        <td>SHPR RALEY'S GOURMET FRENCH FR</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr>
         <td>615110</td>
        <td>RALEY'S GOURMET FRENCH FRIED O</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

       <tr>
         <td>616430</td>
        <td>LIBBY SOLID PACK PUMPKIN</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
<hr> </hr>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Lines</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
    
      </div>

        <div class="tab-pane" id="3">
            <table class="table table-striped">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Description</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>615074</td>
        <td>SHPR FRENCH'S FRENCH FRIED ON</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>615071</td>
        <td>FRENCH FRIED ONIONS ORIGINAL</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
         <td>615111</td>
        <td>SHPR RALEY'S GOURMET FRENCH FR</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr>
         <td>615110</td>
        <td>RALEY'S GOURMET FRENCH FRIED O</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

       <tr>
         <td>616430</td>
        <td>LIBBY SOLID PACK PUMPKIN</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
<hr> </hr>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Lines</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
    
        </div>

        <div class="tab-pane" id="4">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Description</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>615074</td>
        <td>SHPR FRENCH'S FRENCH FRIED ON</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>615071</td>
        <td>FRENCH FRIED ONIONS ORIGINAL</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
         <td>615111</td>
        <td>SHPR RALEY'S GOURMET FRENCH FR</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr>
         <td>615110</td>
        <td>RALEY'S GOURMET FRENCH FRIED O</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

       <tr>
         <td>616430</td>
        <td>LIBBY SOLID PACK PUMPKIN</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
<hr> </hr>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Lines</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
    
        </div>

        <div class="tab-pane" id="5">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Description</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>615074</td>
        <td>SHPR FRENCH'S FRENCH FRIED ON</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>615071</td>
        <td>FRENCH FRIED ONIONS ORIGINAL</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
         <td>615111</td>
        <td>SHPR RALEY'S GOURMET FRENCH FR</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr>
         <td>615110</td>
        <td>RALEY'S GOURMET FRENCH FRIED O</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

       <tr>
         <td>616430</td>
        <td>LIBBY SOLID PACK PUMPKIN</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
<hr> </hr>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Lines</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
    
        </div>

        <div class="tab-pane" id="6">
            <table class="table table-striped">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Description</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>615074</td>
        <td>SHPR FRENCH'S FRENCH FRIED ON</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>615071</td>
        <td>FRENCH FRIED ONIONS ORIGINAL</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
         <td>615111</td>
        <td>SHPR RALEY'S GOURMET FRENCH FR</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr>
         <td>615110</td>
        <td>RALEY'S GOURMET FRENCH FRIED O</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

       <tr>
         <td>616430</td>
        <td>LIBBY SOLID PACK PUMPKIN</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
<hr> </hr>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Shipment 1</th>
        <th>Shipment 2</th>
        <th>Shipment 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Lines</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
    
        </div>

  </div>

@stop