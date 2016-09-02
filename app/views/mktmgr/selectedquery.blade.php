@extends('layout.dashboard')

@section('page_heading','Receivings >> Printer Selection Menu')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
    @foreach ($receivings as $rcv)
      <form class="form-horizontal" role="form" method="post" action="{{URL::route('mktmgr-post-updatequeryresult')}}">
  <div class="container" style="">
  <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> 
        <div id="loginbox" style="margin-top:-20px; margin-left: 10px;" class="mainbox col-xs-12 col-sm-12 col-sm-offset-1">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Query</div>
                       </div> 

                 <div style="padding-top:15px" class="panel-body" >
                  
<div class="row vertical-divider">
  <div class="col-xs-6">    
  
  <div class="form-horizontal">
  
  <div class="form-group">
  <label for="inputEmail3" class="col-sm-4 control-label">Store</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="storeid" name="storeid" placeholder="Store ID" value="{{{ Session::get('storeid') }}}" readonly />
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-sm-4 control-label">Department Name</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="DepartmentNumber" name="DepartmentNumber" 
           placeholder="Department Number" value="{{  $rcv->name }}" readonly />
  </div>
</div>
<!--- dept list -->

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Invoice Number</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="invoice_number"{{ (Input::old('invoice_number'))?' 
          value="'.Input::old('invoice_number').'"':''}} 
           id="invoice_number" placeholder="Invoice Number" value="{{  $rcv->id }}" readonly/>
     @if($errors->has('invoice_number'))
                  {{ $errors->first('invoice_number')}}
                  @endif 
  </div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Invoice Date</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="invoice_date" name="invoice_date" 
           value="{{  $rcv->invoice_date }}" placeholder="MM-DD-YY" />
  </div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Invoice Type</label>
  <div class="col-sm-8">
    
    <select class="form-control" id="invoice_type" name="invoice_type">
      <option value="D">D</option> <option value="R">R</option> <option value="S">S - Store Supplies</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Status</label>
  <div class="col-sm-8">
   <!--  <input type="text" class="form-control" id="status" name="status" /> -->
   <select class="form-control" id="status" name="status" placeholder="Status" >
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="I">I</option>
                    <option value="O" selected="">O - Open</option>
                    <option value="P">P</option>
                    <option value="R">R</option>
                    <option value="U">U</option>
                    <option value="V">V</option>
                </select>
  </div>
</div>
</div>

<div class="form-horizontal">
<!-- <div class="col-lg-6"> -->
       
<div class="form-group">
  <label for="inputEmail3" class="col-sm-4 control-label">Vendor</label>
  <div class="col-sm-8">
    <div id="placevendorlist">
      <input type="text" class="form-control" id="vendor" name="vendor" 
             value="{{  $rcv->vname }}" placeholder="Vendor Name" readonly />
    </div>
   
  </div>
</div>

<!-- Transporter -->

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Number</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="number_2" name="number_2" value="{{  $rcv->trns_number }}"  
           placeholder="Number" readonly="readonly" />
  </div>
</div>
     <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Cost Discrepancies</label>
  <div class="col-sm-8">
    <select class="form-control" id="cost_discrepancies" name="cost_discrepancies" 
    value="'.Input::old('cost_discrepancies').'"':''}}   placeholder="Cost Discrepancies" >
                    <option value="N">N</option>
                    <option value="Y">Y</option>
                </select>
  </div>
</div>

 <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Method Received</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="method_received" name="method_received" value="O"  readonly="readonly" />
  </div>
 </div>

</div></div>
 
 <!-- <div class="col-lg-12"> -->
 <div class="col-xs-6"><div class="form-horizontal">
  <div class="form-group">
  <label for="#" class="col-sm-4 control-label"></label>
  <label for="#" class="col-sm-6 control-label" style="text-align: center;">Vendor</label>
  <!-- <label for="#" class="col-sm-4 control-label" style="text-align: center;">Store</label> -->
  </div>
  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Qty</label>
  <div class="col-sm-8">
    <input type="number" class="form-control" id="qty_vendor" name="qty_vendor" value="{{  $rcv->tot_vend_qty }}"/>
  </div>
  
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Store Inventory</label>
  <div class="col-sm-8">
    <input type="number" class="form-control" id="store_inventory_vendor" 
           name="store_inventory_vendor"{{ (Input::old('store_inventory_vendor'))?'   
           value="'.Input::old('store_inventory_vendor').'"':''}}  placeholder="$0.00" />
    @if($errors->has('store_inventory_vendor'))
                  {{ $errors->first('store_inventory_vendor')}}
                  @endif 
  </div>
  
  </div>


  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Selling Supplies</label>
  <div class="col-sm-8">
    <input type="number" class="form-control" id="selling_supplies_vendor" 
           name="selling_supplies_vendor" value="{{  $rcv->tot_sell_supply }}" />
  </div>
 
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Store Supplies</label>
  <div class="col-sm-8">
    <input type="number" class="form-control" id="store_supplies_vendor" 
           name="store_supplies_vendor" value="{{  $rcv->tot_store_supply }}" />
    
  </div>
  
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Net</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="net_vendor" name="net_vendor"
            value="{{  $rcv->tot_vend_cost }}" readonly/>
      </div>

  </div>


  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Created Date</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="created_date" name="created_date" placeholder="Created Date" 
           value="{{  $rcv->create_datetime }}"  readonly/>
  </div>
  <label for="#" class="col-sm-4 control-label">Updated Date</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="updated_date" name="updated_date" placeholder="Updated Date" 
          value="<?php echo date('d-m-Y G:i:s'); ?>" readonly/>
  </div>
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">By</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="by" name="by" value="DSD" readonly="readonly" />
  </div>

  </div>
  
 </div>
</div>
          <div class="form-group">
                    <div class="row">
                       <div class="col-sm-12 topspace" align="center">
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Update" class="btn">
              
                                                {{ Form::token()}}
                      </div>
                    </div>
                  </div>

</div>

 </div>
        </div>  </div>
      </div>
  </form>  
    @endforeach
    
@stop
