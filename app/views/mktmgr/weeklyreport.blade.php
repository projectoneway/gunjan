@extends('layout.dashboard')

@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
  <div class="container">
        <div id="loginbox" style="margin-top:-20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Weekly Report</div>
                       </div> 

                 <div class="panel-body" style="margin-top:10px" >

            
                <form action="{{URL::route('mktmgr-post-report-weeklyreport')}}" class="form-horizontal" method="post" role="form" style="display: block;">
                <input type="hidden" name="storeno" value="305">
                <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">Department</label>
            <div class="col-sm-8">
            <select class="form-control" id="department" name="department">
                <option value="">Select</option>
                @foreach ($dept_list as $key => $value) 
                      <option value="{{ $value->retail_dept }}">{{ $value->retail_dept }} : {{ $value->name }}</option>
                  @endforeach
                  </select>
                   @if($errors->has('department'))
                  {{ $errors->first('department')}}
                  @endif
                
            </div>
        </div> 

         <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">From Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="fromdate" placeholder="MM-DD-YY" name="fromdate">
                 @if($errors->has('fromdate'))
            {{ $errors->first('fromdate')}}
            @endif
            </div>
        </div>   

        <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">To Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="todate" placeholder="MM-DD-YY" name="todate">
                 @if($errors->has('todate'))
            {{ $errors->first('todate')}}
            @endif
            </div>
        </div>

       <!--  <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">Copies</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="copies" placeholder="Copies" name="copies">
                 @if($errors->has('copies'))
            {{ $errors->first('copies')}}
            @endif
            </div>
        </div> -->

       
                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-12 topspace" align="center">
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Submit" class="btn">
             <!--    <input type="submit" name="login-submit" id="submit" tabindex="4" value="Cancel" class="btn"> -->
                                                {{ Form::token()}}
                      </div>
                    </div>
                  </div>
                  
                </form>
                
              
          </div>
        </div>
      </div>
    </div>
<style type="text/css">
  .form-horizontal .control-label {
     text-align: right; 
    /* padding-left: 60px; */
}
</style>
@stop
