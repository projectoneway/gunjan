@extends('layout.dashboard')

@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
<div class="container">
  <!-- <p id="menulist">
      <a href="{{ URL::route('mktmgr-receivings')}}" >Receivings</a> >> Store Expenses >>
      <a href="{{ URL::route('mktmgr-receivings-sequery')}}" >Query</a>
  </p> -->
        <div id="loginbox" style="margin-top:-20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Store Expenses </div>
                       </div> 
                 <div style="padding-top:5px" class="panel-body" >

				 <form class="form-horizontal">
                <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Store</label>
            <div class="col-sm-13">
                {{ $rcv_data->store_number }}
            </div>
        </div> 

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Vendor</label>
            <div class="col-sm-13">
                {{ $rcv_data->name }}
            </div>
        </div>  

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Vendor Number</label>
            <div class="col-sm-13">
                {{ $rcv_data->vendor_number }}
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Invoice Date</label>
            <div class="col-sm-13">
                {{ $rcv_data->invoice_date }}
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Invoice Number</label>
            <div class="col-sm-13">
                {{ $rcv_data->id }}
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Expense Type</label>
            <div class="col-sm-13">
                {{ $rcv_data->type_code }}
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Amount</label>
            <div class="col-sm-13">
                {{ $rcv_data->tot_vend_cost }}
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Status</label>
            <div class="col-sm-13">
                {{ $rcv_data->status_code }}
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Created</label>
            <div class="col-sm-13">
                {{ $rcv_data->create_datetime }}
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Last Updated</label>
            <div class="col-sm-13">
                {{ $rcv_data->last_update }}
            </div>
        </div>
        

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">By</label>
            <div class="col-sm-13">
                {{ $rcv_data->last_updated_by }}
            </div>
        </div>
        
                  
                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-12" align="center">
                       {{ HTML::link(URL::route('mktmgr-update-receivings-sequery',['id' => $rcv_data->seq_number]), 'Update', array('class'=>'btn')) }}
                      </div>
                    </div>
                  </div>
                
</form>				
              
          </div>
        </div>
      </div>
</div>
@stop
