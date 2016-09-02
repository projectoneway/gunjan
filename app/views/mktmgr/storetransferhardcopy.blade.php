@extends('layout.dashboard')
@section('page_heading','Store Transfers')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storetransfersmenu')
    </header>

<div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Store Transfer Hardcopy</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

                <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">From Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fromdate" placeholder="From Date" name="fromdate">
                 @if($errors->has('fromdate'))
            {{ $errors->first('fromdate')}}
            @endif
            </div>
        </div>        
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">To Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="todate" placeholder="To Date" name="todate">
                 @if($errors->has('todate'))
            {{ $errors->first('todate')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Copy</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="numcopy" placeholder="Numebr of copys" name="numcopy">
                 @if($errors->has('numcopy'))
            {{ $errors->first('numcopy')}}
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
