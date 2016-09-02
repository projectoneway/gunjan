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
                        <div class="panel-title" >Print Order Details</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

            
                <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Store Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="storenumber" placeholder="Store Number" name="storenumber">
                 @if($errors->has('storenumber'))
            {{ $errors->first('storenumber')}}
            @endif
            </div>
        </div>        
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Department Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="deptnumber" placeholder="Department Number" name="deptnumber">
                 @if($errors->has('deptnumber'))
            {{ $errors->first('deptnumber')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Order Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="orderdate" placeholder="Order Date" name="orderdate">
                 @if($errors->has('orderdate'))
            {{ $errors->first('orderdate')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="type" placeholder="Type" name="type">
                 @if($errors->has('type'))
            {{ $errors->first('type')}}
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
            <label for="inputPassword" class="control-label col-sm-8">Total Unites</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="totalunites" placeholder="Total Unites" 
                       name="totalunites">
                 @if($errors->has('totalunites'))
            {{ $errors->first('totalunites')}}
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