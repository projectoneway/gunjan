@extends('layout.dashboard')

@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
<div class="container">

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Select Store</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

            
                <form  action="{{URL::route('mktmgr-report-costdiscrepancysearchreport')}}" class="form-horizontal" method="post" role="form" style="display: block;">

                <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Big Store</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="keydate" placeholder="Date" name="keydate">
                 @if($errors->has('dept'))
            {{ $errors->first('dept')}}
            @endif
            </div>
        </div> 

         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Fuel Store</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fromdate" placeholder="Fuel Store number" name="fromdate">
                 @if($errors->has('fromdate'))
            {{ $errors->first('fromdate')}}
            @endif
            </div>
        </div>   


        

       
                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-12" align="center">
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Select Option" class="btn">
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
