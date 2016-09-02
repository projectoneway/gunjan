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
  <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >DEX Activity</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

            
                <form action="{{URL::route('account-sign-post')}}" class="form-horizontal" method="post" role="form" style="display: block;">

               <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Invoice Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="invoicetype" placeholder="Invoice Type" name="invoicetype">
                 @if($errors->has('invoicetype'))
            {{ $errors->first('invoicetype')}}
            @endif
            </div>
        </div> 

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vnumber" placeholder="Number" name="vnumber">
                 @if($errors->has('vnumber'))
            {{ $errors->first('vnumber')}}
            @endif
            </div>
        </div> 


                <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Vendor Commid</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vendorcommid" placeholder="Vendor Commid" name="vendorcommid">
                 @if($errors->has('vendorcommid'))
            {{ $errors->first('vendorcommid')}}
            @endif
            </div>
        </div> 

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vname" placeholder="Name" name="vname">
                 @if($errors->has('vname'))
            {{ $errors->first('vname')}}
            @endif
            </div>
        </div>   

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Message</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="message" placeholder="Message" name="message">
                 @if($errors->has('message'))
            {{ $errors->first('message')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Date/Time</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="datetime" placeholder="Date/Time" name="datetime">
                 @if($errors->has('datetime'))
            {{ $errors->first('datetime')}}
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
