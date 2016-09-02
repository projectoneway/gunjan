@extends('layout.dashboard')

@section('page_heading','Non Perishable Inventory Prep')
@section('content')
@section('section')

<header class="row">
       
    </header>

<div class="container" style="padding-top:10px;">
    <form action="{{URL::route('mktmgr-nonmoreinfoseldate')}}" class="form-horizontal" method="post" role="form" style="display: block;"> 
<table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Inv Date</th>
        <th>Inv Number</th>
        <th>Type</th>
        <th>Inv Area</th>
        <th>Select</th>
        <th>Emp ID</th>
        <th>Tot Lns</th>
        <th>Value at Cost</th>
        <th>Value at RT1</th>
        <th>CRV at RT1</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox"></td>
        <td ><a href="#" data-toggle="modal" data-target="#myModal">15/02/2016</a></td>
        <td>173771</td>
        <td>ED</td>
        <td>8001</td>
        <td>1</td>
        <td>676614</td>
        <td>1</td>
        <td>$199.40</td>
        <td>$240.00</td>
        <td>$0.00</td>
      </tr>
      
    </tbody>
  </table>

  <div class="form-group">
        <div class="row">
        <div class="col-sm-12" align="center">
            <input type="submit" name="addinfo" id="addinfo" tabindex="4" value="Get Addational Info" class="btn">
            <input type="submit" name="login-submit" id="submit" tabindex="4" value="Cancel" class="btn">
              {{ Form::token()}}
        </div>
        </div>
  </div>
 </form>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Non Perishable Inventory Prep</h4>
      </div>
      <div class="modal-body">
         

      <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
                 <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Inventory Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="invdate" placeholder="Inventory Date" name="invdate">
                 @if($errors->has('invdate'))
            {{ $errors->first('invdate')}}
            @endif
            </div>
        </div>

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
            <label for="inputPassword" class="control-label col-sm-8">Inventory Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="invtype" placeholder="Inventory Type" name="invtype">
                 @if($errors->has('invtype'))
            {{ $errors->first('invtype')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Inventory Area</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="invarea" placeholder="Inventory Area" name="invarea">
                 @if($errors->has('invarea'))
            {{ $errors->first('invarea')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Inventory Section</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="invsection" placeholder="Inventory Section" name="invsection">
                 @if($errors->has('invsection'))
            {{ $errors->first('invsection')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Employee ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empid" placeholder="Total Lines" name="empid">
                 @if($errors->has('empid'))
            {{ $errors->first('empid')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total Line Items</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totallineitems" placeholder="Total Line Items" 
                 name="totallineitems">
                 @if($errors->has('totallineitems'))
            {{ $errors->first('totallineitems')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total Value At Cost</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totvalcost" placeholder="Total Value At Cost" 
                       name="totvalcost">
                 @if($errors->has('totvalcost'))
            {{ $errors->first('totvalcost')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total Value At Retail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totvalretail" placeholder="Total Value At Retail" 
                       name="totvalretail">
                 @if($errors->has('totvalretail'))
            {{ $errors->first('totvalretail')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total CRV Value At Retail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totcrvvalretail" placeholder="Total CRV Value At Retail" 
                       name="totcrvvalretail">
                 @if($errors->has('totcrvvalretail'))
            {{ $errors->first('totcrvvalretail')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Current Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="currentstatus" placeholder="Current Status" 
                       name="currentstatus">
                 @if($errors->has('currentstatus'))
            {{ $errors->first('currentstatus')}}
            @endif
            </div>
        </div>
            
            <div class="modal-footer">
      <input type="submit" name="approved" id="approved" tabindex="4" value="Approved" class="btn">
      <input type="submit" name="void" id="void" tabindex="4" value="Void" class="btn">
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
