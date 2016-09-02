@extends('layout.dashboard')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.bookkepermenu')
    </header>

<div class="container">
    	  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >LOAN TO REGISTER</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

						
								<form action="{{URL::route('account-sign-post')}}" class="form-horizontal" method="post" role="form" style="display: block;">
				 <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Register Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dateofinfo" placeholder="" name="regnumber">
                 @if($errors->has('regnumber'))
            {{ $errors->first('regnumber')}}
            @endif
            </div>
        </div>				
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8"> Date of the Information</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dateofinfo" placeholder="" name="dateofinfo">
                 @if($errors->has('dateofinfo'))
            {{ $errors->first('dateofinfo')}}
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
