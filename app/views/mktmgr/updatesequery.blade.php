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

            
                <form action="{{URL::route('mktmgr-post-receivings-sequery')}}" class="form-horizontal" method="post" role="form" style="display: block;">

                <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Store</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="store" placeholder="Store" name="store" value="{{ $rcv_data->store_number }}">
                 @if($errors->has('store'))
            {{ $errors->first('store')}}
            @endif
            </div>
        </div> 

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Vendor</label>
            <div class="col-sm-8">
                {{ $rcv_data->name }}
            </div>
        </div>  

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Vendor Number</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="vendornum" placeholder="Vendor Number" name="vendornum" value="{{ $rcv_data->vendor_number }}">
                 @if($errors->has('vendornum'))
            {{ $errors->first('vendornum')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Invoice Date</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="invdate" placeholder="Invoice Date" name="invdate" value="{{ $rcv_data->invoice_date }}">
                 @if($errors->has('invdate'))
            {{ $errors->first('invdate')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Invoice Number</label>
            <div class="col-sm-8">
                {{ $rcv_data->id }}
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Expense Type</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="expensetype" placeholder="Expense Type" name="expensetype" value="{{ $rcv_data->type_code }}">
                 @if($errors->has('expensetype'))
            {{ $errors->first('expensetype')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Amount</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount" value="{{ $rcv_data->tot_vend_cost }}">
                 @if($errors->has('amount'))
            {{ $errors->first('amount')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Status</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="status" placeholder="Status" name="status" value="{{ $rcv_data->status_code }}">
                 @if($errors->has('status'))
            {{ $errors->first('status')}}
            @endif
            </div>
        </div>        
                  
          <div class="form-group">
            <div class="row">
               <div class="col-sm-12" align="center">
    <input type="submit" name="login-submit" id="submit" tabindex="4" value="Submit" class="btn">
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Cancel" class="btn">
                                        {{ Form::token()}}
              </div>
            </div>
          </div>
          
        </form>
                
              
          </div>
        </div>
      </div>
</div>
@stop
