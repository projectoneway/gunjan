@extends('layout.dashboard')
@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>

<form class="form-horizontal" role="form" method="post" action="{{URL::route('mktmgr-Offline-Receiving')}}">
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
                        <div class="panel-title" >Offline Receiving</div>
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
  <label for="#" class="col-sm-4 control-label">Department</label>
  <div class="col-sm-8">
  <select class="form-control" id="dept_name_number" name="dept_name_number" value="dept_name_number">
  <option value="">Select</option>
  @foreach ($dept_list as $key => $value) 
        <option value="{{ $value->retail_dept }}">{{ $value->retail_dept }} : {{ $value->name }}</option>
    @endforeach
    </select>
   <!--  <input type="hidden" class="form-control" id="departmentnum" placeholder="departmentnum" /> -->
  </div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Invoice Number</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="invoice_number"{{ (Input::old('invoice_number'))?' 
          value="'.Input::old('invoice_number').'"':''}} 
           id="invoice_number" placeholder="Invoice Number" />
     @if($errors->has('invoice_number'))
                  {{ $errors->first('invoice_number')}}
                  @endif 
  </div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Invoice Date</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="invoice_date" name="invoice_date"{{ (Input::old('invoice_date'))?'
          value="'.Input::old('invoice_date').'"':''}} placeholder="MM-DD-YY" />
     @if($errors->has('invoice_date'))
                  {{ $errors->first('invoice_date')}}
                  @endif       
  </div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Invoice Type</label>
  <div class="col-sm-8">
    <!-- <input type="text" class="form-control" id="invoice_type" name="invoice_type" placeholder="Invoice Type" /> -->
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
  <div class="ui-widget">
    <div id="placevendorlist">
      <input type="text" class="form-control" id="vendor" name="vendor"{{ (Input::old('vendor'))?' 
             value="'.Input::old('vendor').'"':''}} placeholder="Vendor Name"/>
    </div>
    @if($errors->has('vendor'))
                  {{ $errors->first('vendor')}}
                  @endif 
  </div>
</div>
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Number</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="vendornumber" name="vendornumber"{{ (Input::old('vendornumber'))?'
           value="'.Input::old('vendornumber').'"':''}}  placeholder="Number" readonly />
     @if($errors->has('vendornumber'))
                  {{ $errors->first('vendornumber')}}
                  @endif 
  </div>
</div>
<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Transporter</label>
  <div class="col-sm-8">
  <select class="form-control" id="transporter" name="transporter">
  <option value="">Select</option>
  @foreach ($transporter_list as $key => $valuedb) 
        <option value="{{ $valuedb->trns_number }}">{{ $valuedb->name }}</option>
    @endforeach
    </select>
   <!--  <input type="hidden" class="form-control" id="departmentnum" placeholder="departmentnum" /> -->
  </div>
  <!-- <div class="col-sm-8">
    <input type="text" class="form-control" id="transporter" name="transporter"{{ (Input::old('transporter'))?'
           value="'.Input::old('transporter').'"':''}}  placeholder="Transporter" />
    @if($errors->has('transporter'))
                  {{ $errors->first('transporter')}}
                  @endif 
  </div> -->
</div>

<div class="form-group">
  <label for="#" class="col-sm-4 control-label">Number</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="number_2" name="number_2"{{ (Input::old('number_2'))?' 
          value="'.Input::old('number_2').'"':''}}   placeholder="Number" readonly="readonly" />
    @if($errors->has('number_2'))
                  {{ $errors->first('number_2')}}
                  @endif 
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



</div></div>
 
 <!-- <div class="col-lg-12"> -->
 <div class="col-xs-6"><div class="form-horizontal">
  
  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Method Received</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="method_received" name="method_received" value="O"  readonly="readonly" />
  </div>
  </div>

   <div class="form-group">
  <label for="#" class="col-sm-4 control-label"></label>
  <label for="#" class="col-sm-6 control-label" style="text-align: center;">Vendor</label>
  <!-- <label for="#" class="col-sm-4 control-label" style="text-align: center;">Store</label> -->
  </div>
  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Qty</label>
  <div class="col-sm-8">
    <input type="number" class="form-control" id="qty_vendor" name="qty_vendor"{{ (Input::old('qty_vendor'))?'  
            value="'.Input::old('qty_vendor').'"':''}} placeholder="0.00" />
    @if($errors->has('qty_vendor'))
                  {{ $errors->first('qty_vendor')}}
                  @endif 
  </div>
  <!-- <div class="col-sm-4">
    <input type="text" class="form-control" id="qty_store" 
           name="qty_store"{{ (Input::old('qty_store'))?' value="'.Input::old('qty_store').'"':''}}  placeholder="0.00" readonly/>
    @if($errors->has('qty_store'))
                  {{ $errors->first('qty_store')}}
                  @endif 
  </div> -->
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Store Inventory</label>
  <div class="col-sm-8">
    <input type="number" step=".01" class="form-control" id="store_inventory_vendor" 
           name="store_inventory_vendor"{{ (Input::old('store_inventory_vendor'))?'   
           value="'.Input::old('store_inventory_vendor').'"':''}}  placeholder="$0.00" />
    @if($errors->has('store_inventory_vendor'))
                  {{ $errors->first('store_inventory_vendor')}}
                  @endif 
  </div>
 <!--  <div class="col-sm-4">
    <input type="text" class="form-control" id="store_inventory_store" 
           name="store_inventory_store"{{ (Input::old('store_inventory_store'))?' 
           value="'.Input::old('store_inventory_store').'"':''}}   placeholder="$0.00" readonly/>
    @if($errors->has('store_inventory_store'))
                  {{ $errors->first('store_inventory_store')}}
                  @endif 
  </div> -->
  </div>

 <!--  <div class="form-group">
  <label for="#" class="col-sm-4 control-label"></label>
  <div class="col-sm-4">
    <input type="hidden" class="form-control" id="store_inventory_vendor1"  value="0"  readonly="readonly"/>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="store_inventory_store1" 
          name="store_inventory_store1"{{ (Input::old('store_inventory_store1'))?' 
          value="'.Input::old('store_inventory_store1').'"':''}} placeholder="$0.00 (CRV) " readonly/>
    @if($errors->has('store_inventory_store1'))
                  {{ $errors->first('store_inventory_store1')}}
                  @endif 
  </div>
  </div>  -->

 <!--  <div class="form-group">
  <label for="#" class="col-sm-4 control-label"></label>
  <div class="col-sm-8">
    <input type="hidden" class="form-control" id="store_inventory_vendor2" 
          name="store_inventory_vendor2" value="0"  readonly="readonly"/>
  </div>
  <div class="col-sm-4">
    <input type="text" class="form-control" id="store_inventory_store2" 
           name="store_inventory_store2"{{ (Input::old('store_inventory_store2'))?' 
           value="'.Input::old('store_inventory_store2').'"':''}} placeholder="$0.00 (Allowances) " readonly/>
    @if($errors->has('store_inventory_store2'))
                  {{ $errors->first('store_inventory_store2')}}
                  @endif 
  </div>
  </div>  -->

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Selling Supplies</label>
  <div class="col-sm-8">
    <input type="number" step=".01" class="form-control" id="selling_supplies_vendor" 
           name="selling_supplies_vendor"{{ (Input::old('selling_supplies_vendor'))?' 
           value="'.Input::old('selling_supplies_vendor').'"':''}} placeholder="$0.00 +" />
    @if($errors->has('selling_supplies_vendor'))
                  {{ $errors->first('selling_supplies_vendor')}}
                  @endif 
  </div>
  <!-- <div class="col-sm-4">
    <input type="number" class="form-control" id="selling_supplies_store" 
           name="selling_supplies_store"{{ (Input::old('selling_supplies_store'))?' 
           value="'.Input::old('selling_supplies_store').'"':''}} placeholder="$0.00" readonly/>
    @if($errors->has('selling_supplies_store'))
                  {{ $errors->first('selling_supplies_store')}}
                  @endif 
  </div> -->
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Store Supplies</label>
  <div class="col-sm-8">
    <input type="number" step=".01" class="form-control" id="store_supplies_vendor" 
          name="store_supplies_vendor"{{ (Input::old('store_supplies_vendor'))?' 
          value="'.Input::old('store_supplies_vendor').'"':''}} placeholder="$0.00 +" />
    @if($errors->has('store_supplies_vendor'))
                  {{ $errors->first('store_supplies_vendor')}}
                  @endif 
  </div>
  <!-- <div class="col-sm-4">
    <input type="text" class="form-control" id="store_supplies_store" 
           name="store_supplies_store"{{ (Input::old('store_supplies_store'))?' 
           value="'.Input::old('store_supplies_store').'"':''}} placeholder="$0.00" readonly/>
    @if($errors->has('store_supplies_store'))
                  {{ $errors->first('store_supplies_store')}}
                  @endif 
  </div> -->
  </div>

  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Net</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="net_vendor" name="net_vendor"{{ (Input::old('net_vendor'))?'
            value="'.Input::old('net_vendor').'"':''}} placeholder="$0.00" readonly/>
    @if($errors->has('net_vendor'))
                  {{ $errors->first('net_vendor')}}
                  @endif 
  </div>
  <!-- <div class="col-sm-4">
    <input type="text" class="form-control" id="net_store" name="net_store"{{ (Input::old('net_store'))?'
           value="'.Input::old('net_store').'"':''}}  placeholder="$0.00" readonly/>
    @if($errors->has('net_store'))
                  {{ $errors->first('net_store')}}
                  @endif 
  </div> -->
  </div>


  <div class="form-group">
  <label for="#" class="col-sm-4 control-label">Created Date</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="created_date" name="created_date" placeholder="Created Date" 
           value="<?php echo date('d-m-Y G:i:s'); ?>" readonly/>
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
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Submit" class="btn">
              
                                                {{ Form::token()}}
                      </div>
                    </div>
                  </div>

</div>

 </div>
        </div>  </div>
      </div>
  </form>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">
  
  /*.form-horizontal .control-label {
     text-align: right; 
     padding-left: 60px; 
}*/

</style>

    <script type="text/javascript">
  
$(document).ready(function(){

  $("#vendor").autocomplete({
    source: "mktmgr/vendorlist",
    minLength: 3,
    select: function(event, ui) {
      $('#vendor').val(ui.item.value); alert(ui);
    }
  });

/*$("#dept_name_number").change(function (e) {
   e.preventDefault(); deptNumber = $("#dept_name_number").val(); //alert(deptNumber);
   if(deptNumber != '')
   {
   $.post("vendorlist", {deptnumber: deptNumber}, function(result){ //alert(deptNumber);
                var arrayvendorlist = result.split(',');
              $makedropdown ='<select class="form-control" id="vendorname" name="vendorname"><option value="">Select Vendor Name</option>';
              $.each(arrayvendorlist, function (index, value) {
                   var vendor = value.split('_');
                  $makedropdown +='<option value='+vendor[1]+'_'+vendor[0]+'>'+vendor[0]+'</option>';
                });
              
              $makedropdown +='</select>';

              $("#placevendorlist").html($makedropdown);
            });
  }

});*/

$("#transporter").change(function (e){
e.preventDefault(); transporter_number = $("#transporter").val(); //alert(deptNumber);
   if(transporter_number != '')
   {
      $("#number_2").val(transporter_number); return true;
   }
});

$("#placevendorlist").change(function(e){ 
  e.preventDefault(); vendorname_number = $("#vendorname").val(); //alert(vendorname_number);
  var vendo0r_numname = vendorname_number.split('_');
   $("#vendornumber").val(vendo0r_numname[0]);
});

$("#qty_vendor").blur(function(){
     qty_vendor=$("#qty_vendor").val();
     $("#qty_store").val(qty_vendor); return true;
  });

  $("#store_inventory_vendor").blur(function(){
      store_inventory_vendor=parseFloat($("#store_inventory_vendor").val(),10).toFixed(2);
    $("#store_inventory_vendor").val(store_inventory_vendor); calnet(); return true;
  });

  $("#store_inventory_vendor1").blur(function(){
    
     store_inventory_vendor1=$("#store_inventory_vendor1").val(); calnet(); return true;
  });

  $("#store_inventory_vendor2").blur(function(){
     store_inventory_vendor2=$("#store_inventory_vendor2").val(); calnet(); return true;
  });


  $("#selling_supplies_vendor").blur(function(){
    selling_supplies_vendor=parseFloat($("#selling_supplies_vendor").val(),10).toFixed(2);
      $("#selling_supplies_vendor").val(selling_supplies_vendor); calnet(); return true;
  });

  $("#store_supplies_vendor").blur(function(){
  store_supplies_vendor=parseFloat($("#store_supplies_vendor").val(),10).toFixed(2);
  $("#store_supplies_vendor").val(store_supplies_vendor); calnet(); return true;
  });

});



function calnet() {
     store_inventory_vendor=$("#store_inventory_vendor").val();
     selling_supplies_vendor=$("#selling_supplies_vendor").val();
     store_supplies_vendor=$("#store_supplies_vendor").val();
     if(store_inventory_vendor == ''){store_inventory_vendor  = 0.00; }
     if(selling_supplies_vendor == ''){selling_supplies_vendor  = 0.00; }
     if(store_supplies_vendor == ''){store_supplies_vendor  = 0.00; }
     tot=parseFloat(store_inventory_vendor)+parseFloat(selling_supplies_vendor)+parseFloat(store_supplies_vendor);
     $("#net_vendor").val(tot.toFixed(2));
     return 1;
    }

</script>

@stop

