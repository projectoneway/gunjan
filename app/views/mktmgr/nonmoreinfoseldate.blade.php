@extends('layout.dashboard')

@section('page_heading','Non Perishable Inventory Prep')
@section('content')
@section('section')

<header class="row">
       
    </header>

<div class="container" style="padding-top:10px;">
    <form action="#" class="form-horizontal" method="post" role="form" style="display: block;"> 
<table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Scn Number</th>
        <th>Description</th>
        <th>Itm Cst</th>
        <th>Itm Rt1</th>
        <th>Qty</th>
        <th>Ext Cost</th>
        <th>Ext Rt1</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox"></td>
        <td><a href="#" data-toggle="modal" data-target="#myModal">1</a></td>
        <td>COORS LIGHT ALUMINUM PINT</td>
        <td>$8.10</td>
        <td>$12.59</td>
        <td>1</td>
        <td>$810</td>
        <td>$12.59</td>
      </tr>
      
    </tbody>
  </table>

  <div class="form-group">
        <div class="row">
        <div class="col-sm-12" align="center">
            <input type="submit" name="addinfo" id="addinfo" tabindex="4" value="Print" class="btn">
              {{ Form::token()}}
        </div>
        </div>
  </div>
 </form>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Non Perishable Inventory Item Scan 2 Details</h4>
      </div>
      <div class="modal-body">
         

      <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
                

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Inventory Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="invnum" placeholder="Inventory Number" name="invnum">
                 @if($errors->has('invnum'))
            {{ $errors->first('invnum')}}
            @endif
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Scan Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="scannum" placeholder="Scan Number" name="scannum">
                 @if($errors->has('scannum'))
            {{ $errors->first('scannum')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">UPC Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="upcnum" placeholder="UPC Number" name="upcnum">
                 @if($errors->has('upcnum'))
            {{ $errors->first('upcnum')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">SKU Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="skunum" placeholder="SKU Number" name="skunum">
                 @if($errors->has('skunum'))
            {{ $errors->first('skunum')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Item In GL Dept</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="itemgldept" placeholder="Item In GL Dept" name="itemgldept">
                 @if($errors->has('itemgldept'))
            {{ $errors->first('itemgldept')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Cost</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cost" placeholder=Cost" 
                 name="cost">
                 @if($errors->has('cost'))
            {{ $errors->first('cost')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Retail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="retail" placeholder="Retail" 
                       name="retail">
                 @if($errors->has('retail'))
            {{ $errors->first('retail')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Scale ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="scaleid" placeholder="Scale ID" 
                       name="scaleid">
                 @if($errors->has('scaleid'))
            {{ $errors->first('scaleid')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Case Pack</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="casepack" placeholder="Case Pack" 
                       name="casepack">
                 @if($errors->has('casepack'))
            {{ $errors->first('casepack')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Container Size</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="consize" placeholder="Container Size" 
                       name="consize">
                 @if($errors->has('consize'))
            {{ $errors->first('consize')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Item Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="itemdesc" placeholder="Item Description" 
                       name="itemdesc">
                 @if($errors->has('itemdesc'))
            {{ $errors->first('itemdesc')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Quantity</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="quantity" placeholder="Quantity" 
                       name="quantity">
                 @if($errors->has('quantity'))
            {{ $errors->first('quantity')}}
            @endif
            </div>
        </div>
            
            <div class="modal-footer">
      <!-- <input type="submit" name="approved" id="approved" tabindex="4" value="Approved" class="btn">
      <input type="submit" name="void" id="void" tabindex="4" value="Void" class="btn"> -->
      <input type="submit" tabindex="4" value="Close" class="btn" data-dismiss="modal">
       <!-- <button type="button" class="btn btn-secondary"></button>
       <button type="button" class="btn btn-secondary">Void</button> -->
       <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
                                    
                                </form>
                                



      </div>
      
    </div>
  </div>
</div>
@stop
