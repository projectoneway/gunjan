@extends('layout.dashboard')

@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
<div class="container">

        <div id="loginbox" style="margin-top:-20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Cost Discrepancy Report</div>
                       </div> 

                 <div class="panel-body"  style="margin-top:10px" >

            
                <form action="{{URL::route('mktmgr-post-report-costdiscrepancyreport')}}" class="form-horizontal" method="post" role="form" style="display: block;">

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-6 control-label">Please key date of report</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="keydate" placeholder="MM-DD-YY" name="keydate" />
                         @if($errors->has('keydate'))
                    {{ $errors->first('keydate')}}
                    @endif
                    </div>
                </div> 

                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-12" align="center">
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Submit" class="btn">
               <!--  <input type="submit" name="login-submit" id="submit" tabindex="4" value="Cancel" class="btn"> -->
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
<style> .form-horizontal .control-label {
        text-align: right;
       /* padding-left: 60px; */
}</style>
@stop
