@extends('layout.dashboard')
@section('page_heading','Store Transfers')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storetransfersmenu')
    </header>

<div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Store Transfers Inquiry</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

                <form action="#" class="form-horizontal" method="post" role="form" style="display: block;">
         <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">From Store Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fstnumber" placeholder="From Store Number" name="fstnumber">
                 @if($errors->has('fstnumber'))
            {{ $errors->first('fstnumber')}}
            @endif
            </div>
        </div>        
        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">From Department</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fdept" placeholder="From Department" name="fdept">
                 @if($errors->has('fdept'))
            {{ $errors->first('fdept')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Acct to CREDIT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="acccredit" placeholder="Acct to CREDIT" name="acccredit">
                 @if($errors->has('acccredit'))
            {{ $errors->first('acccredit')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">To Store No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="storenum" placeholder="To Store No" name="storenum">
                 @if($errors->has('storenum'))
            {{ $errors->first('storenum')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">To Department</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="todept" placeholder="To Department" name="todept">
                 @if($errors->has('todept'))
            {{ $errors->first('todept')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Acct to CHARGE</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="acccharge" placeholder="Acct to CHARGE" name="acccharge">
                 @if($errors->has('acccharge'))
            {{ $errors->first('acccharge')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Transfer Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="transferdate" placeholder="Transfer Date" 
                       name="transferdate">
                 @if($errors->has('transferdate'))
            {{ $errors->first('transferdate')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Transfer Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="transfernumber" placeholder="Transfer Number" 
                       name="transfernumber">
                 @if($errors->has('transfernumber'))
            {{ $errors->first('transfernumber')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Transfer Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="transfertype" placeholder="Transfer Type" 
                       name="transfertype">
                 @if($errors->has('transfertype'))
            {{ $errors->first('transfertype')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Employee ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="employeeid" placeholder="Employee ID" 
                       name="employeeid">
                 @if($errors->has('employeeid'))
            {{ $errors->first('employeeid')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" placeholder="Status" 
                       name="status">
                 @if($errors->has('status'))
            {{ $errors->first('status')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Create Date / Time</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="datetime" placeholder="Create Date / Time" 
                       name="datetime">
                 @if($errors->has('datetime'))
            {{ $errors->first('datetime')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-8">Last Update</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastupdate" placeholder="Last Update" 
                       name="lastupdate">
                 @if($errors->has('lastupdate'))
            {{ $errors->first('lastupdate')}}
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
