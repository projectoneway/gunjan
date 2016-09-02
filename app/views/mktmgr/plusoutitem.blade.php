@extends('layout.dashboard')
@section('page_heading','Store Orders')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storeordersmenu')
    </header>
    
<div class="container">
    	  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Plus Outs Items</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

						
								<form action="{{URL::route('account-sign-post')}}" class="form-horizontal" method="post" role="form" style="display: block;">
				 <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Ship Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="shipdate" placeholder="Ship Date" name="shipdate">
                 @if($errors->has('shipdate'))
            {{ $errors->first('shipdate')}}
            @endif
            </div>
        </div>				
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8"> Order Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ordertype" placeholder="Order Type" name="ordertype">
                 @if($errors->has('ordertype'))
            {{ $errors->first('ordertype')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" placeholder="Status" name="status">
                 @if($errors->has('status'))
            {{ $errors->first('status')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total Lines</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totallines" placeholder="Total Lines" name="totallines">
                 @if($errors->has('totallines'))
            {{ $errors->first('totallines')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total Lines</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totallines" placeholder="Total Lines" name="totallines">
                 @if($errors->has('totallines'))
            {{ $errors->first('totallines')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Total Units</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totalunits" placeholder="Total Units" name="totalunits">
                 @if($errors->has('totalunits'))
            {{ $errors->first('totalunits')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Last Update</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastupdate" placeholder="Last Update" name="lastupdate">
                 @if($errors->has('totalunits'))
            {{ $errors->first('totalunits')}}
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