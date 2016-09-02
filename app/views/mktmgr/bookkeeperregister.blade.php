@extends('layout.dashboard')


@section('content')
@section('section')

<header class="row">
        @include('mktmgr.bookkepermenu')
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
         <div class="panel-title" >BEGINING LOAN REGISTER</div>
    </div>
    <div style="padding-top:10px" class="panel-body" >                 
<form action="{{URL::route('mktmgr-beginloanreg')}}" class="form-horizontal" method="post" role="form" style="display: block;">
								<div class="form-group">
            <label for="inputEmail" class="control-label col-sm-6">Register Number</label>
            <div class="col-sm-6">
                <select id="reg_number" name="reg_number" class="form-control" value="reg_number">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">Date of the Information</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="dateofreg" placeholder="" name="dateofreg">
                 @if($errors->has('dateofreg'))
            {{ $errors->first('dateofreg')}}
            @endif
            </div>
        </div>
									
									<div class="form-group">
										<div class="row">
											 <div class="col-sm-12" align="center">
				<input type="submit" name="login-submit" id="submit" tabindex="4" value="Submit" class="btn">
                <!-- <input type="submit" name="login-submit" id="submit" tabindex="4" value="Cancel" class="btn"> -->
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
