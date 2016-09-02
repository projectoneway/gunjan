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
                        <div class="panel-title" >Code Item Query</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

            
                <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Code Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="codedate" placeholder="Code Date" name="codedate">
                 @if($errors->has('codedate'))
            {{ $errors->first('codedate')}}
            @endif
            </div>
        </div>        
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">UPC Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="upcnumber" placeholder="UPC Number" name="upcnumber">
                 @if($errors->has('upcnumber'))
            {{ $errors->first('upcnumber')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">GL Department Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="gldeptnumber" placeholder="GL Department Number" name="gldeptnumber">
                 @if($errors->has('gldeptnumber'))
            {{ $errors->first('gldeptnumber')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">SUK Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="suknumber" placeholder="SUK Number" name="suknumber">
                 @if($errors->has('suknumber'))
            {{ $errors->first('suknumber')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" placeholder="Description" name="description">
                 @if($errors->has('description'))
            {{ $errors->first('description')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Pack Size</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="packsize" placeholder="Pack Size" name="packsize">
                 @if($errors->has('packsize'))
            {{ $errors->first('packsize')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Date/Time Noted</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="datetimenoted" placeholder="Date/Time Noted" 
                       name="datetimenoted">
                 @if($errors->has('datetimenoted'))
            {{ $errors->first('datetimenoted')}}
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