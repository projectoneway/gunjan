@extends('layout.dashboard')
@section('page_heading','Shrink Capture Review')
@section('content')
@section('section')
<div class="container">
  <div class="menu_search_line">    
<div class="dropdown sub">
            <a  href="{{ URL::route('mktmgr-returnhome')}}" >
                Exit
            </a>
        </div>
</div></div>
<div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title">Shrink Date</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

            
                <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Shrink Date</label>
            <div class="col-sm-10">
                 <input type="date" min="2016-01-01" max="2016-12-01" class="form-control" name="shrinkdate" placeholder="Shrink Date" />
                 @if($errors->has('shrinkdate'))
            {{ $errors->first('shrinkdate')}}
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
