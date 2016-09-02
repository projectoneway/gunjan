@extends('layout.dashboard')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.bookkepermenu')
    </header>

<div class="container">
<div id="loginbox" style="margin-top:-20px;" class="mainbox col-md-8 col-md-offset-2 col-sm-8">
   <div class="panel panel-info" >
   <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
         <div class="panel-title" >COMMENT LIST</div>
    </div>
    <div style="padding-top:10px" class="panel-body" > 
						
								<form action="{{URL::route('account-sign-post')}}" class="form-horizontal" method="post" role="form" style="display: block;">
								
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">Please enter the Date of the Information</label>
            <div class="col-sm-6">
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
<style type="text/css">
      .form-horizontal .control-label {
             text-align: right; 
            /* padding-left: 60px; */
        }
 </style>		
@stop
