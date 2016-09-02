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
                        <div class="panel-title" >COMMENT LIST</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

						
								<form action="{{URL::route('mktmgr-post-bookcomment')}}" class="form-horizontal" method="post" role="form" style="display: block;">
								
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Please enter the Date of the Information</label>
            <div class="col-sm-10">
            
            @if($cmt_data->exists)            
                <input type="text" class="form-control" id="dateofinfo" placeholder="Enter date" name="dateofinfo" value="{{ $cmt_data->date_stamp }}" readonly>
            @else
                <input type="text" class="form-control" id="dateofinfo" placeholder="Enter date" name="dateofinfo" value="{{ $cmt_data->date_stamp }}">
            @endif
                 @if($errors->has('dateofinfo'))
            {{ $errors->first('dateofinfo')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Comment</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="commenttext" placeholder="Enter comment" name="commenttext" rows="9">{{ $cmt_data->comment_line1.$cmt_data->comment_line2.$cmt_data->comment_line3.$cmt_data->comment_line4.$cmt_data->comment_line5.$cmt_data->comment_line6.$cmt_data->comment_line7.$cmt_data->comment_line8.$cmt_data->comment_line9 }}</textarea>
                 @if($errors->has('commenttext'))
            {{ $errors->first('commenttext')}}
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
