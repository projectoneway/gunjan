@extends('layout.dashboard')

@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
<div class="container">

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
        <div id="loginbox" style="margin-top:-20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Store Expenses </div>
                       </div> 

                 <div style="padding-top:10px" class="panel-body" >

            
                <form action="{{URL::route('mktmgr-search-receivings-sequery')}}" class="form-horizontal" method="post" role="form" style="display: block;">

                <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Store</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="store" placeholder="Store" name="store" value="305">
                 @if($errors->has('store'))
            {{ $errors->first('store')}}
            @endif
            </div>
        </div> 

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Vendor</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="vendor" placeholder="Vendor" name="Vendor">
                 @if($errors->has('vendor'))
            {{ $errors->first('vendor')}}
            @endif
            </div>
        </div>  

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Vendor Number</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="vendornum" placeholder="Vendor Number" name="vendornum">
                 @if($errors->has('vendornum'))
            {{ $errors->first('vendornum')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Invoice Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="invdate" placeholder="MM-DD-YY" name="invdate">
                 @if($errors->has('invdate'))
            {{ $errors->first('invdate')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Invoice Number</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="invnum" placeholder="Invoice Number" name="invnum">
                 @if($errors->has('invnum'))
            {{ $errors->first('invnum')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Expense Type</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="expensetype" placeholder="Expense Type" name="expensetype">
                 @if($errors->has('expensetype'))
            {{ $errors->first('expensetype')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Amount</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount">
                 @if($errors->has('amount'))
            {{ $errors->first('amount')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Status</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="status" placeholder="Status" name="status">
                 @if($errors->has('status'))
            {{ $errors->first('status')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Created</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="created" placeholder="Created" name="created">
                 @if($errors->has('created'))
            {{ $errors->first('created')}}
            @endif
            </div>
        </div>

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">Last Updated</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="lastupdated" placeholder="Last Updated" name="lastupdated">
                 @if($errors->has('lastupdated'))
            {{ $errors->first('lastupdated')}}
            @endif
            </div>
        </div>
        

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-4">By</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="by" placeholder="by" name="by">
                 @if($errors->has('by'))
            {{ $errors->first('by')}}
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
</div>
@stop
