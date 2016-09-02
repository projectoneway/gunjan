@extends('layout.dashboard')
@section('page_heading','Store Orders')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.storeordersmenu')
    </header>
<hr></hr>
<div id="exTab2" class="container"> 


  <ul class="nav nav-tabs">
    <li class="active"><a href="#Grocery" data-toggle="tab">Grocery</a></li>
    <li><a href="#Liquor" data-toggle="tab">Liquor</a></li>
    <li><a href="#Meat" data-toggle="tab">Meat</a></li>
    <li><a href="#Deli" data-toggle="tab">Deli</a></li>
    <li><a href="#FSD" data-toggle="tab">FSD</a></li>
    <li><a href="#Bakery" data-toggle="tab">Bakery</a></li>
    <li><a href="#Produce" data-toggle="tab">Produce</a></li>
    <li><a href="#NatFds" data-toggle="tab">Nat Fds</a></li>
    <li><a href="#GM" data-toggle="tab">GM</a></li>
    <li><a href="#HotWok" data-toggle="tab">Hot Wok</a></li>
    <li><a href="#Floral" data-toggle="tab">Floral</a></li>
    <li><a href="#Coffshp" data-toggle="tab">Coffshp</a></li>
    <li><a href="#Seafood" data-toggle="tab">Seafood</a></li>
    <li><a href="#RX" data-toggle="tab">RX</a></li>
  </ul>   

 
      <div class="tab-content">

       <div class="tab-pane active" id="Grocery">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Grocery</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

        
           <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descgrocery" placeholder="Grocery" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="grocerycl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="grocerynl" placeholder="" name="dateofinfo">
              </div>
            </div>

         <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
        <input type="submit" name="login-submit" id="submit" tabindex="4" value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>
      </div>
      </div>
      </div>
      </div>


      <div class="tab-pane" id="Liquor">
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Liquor</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

      
           <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="liquormeat" placeholder="Liquor" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="liquorcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="liquornl" placeholder="" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitliquor"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="Meat">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Meat</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
           <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descmeat" placeholder="Meat" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="meatcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="meatnl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitmeat" tabindex="4" value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="Deli">
         <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Deli</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descdeli" placeholder="Deli" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="delicl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="delinl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitdeli" tabindex="4" value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>


            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="FSD">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >FSD</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descfsd" placeholder="FSD" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="fsdcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="fsdnl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitfsd" tabindex="4" value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="Bakery">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Bakery</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
           <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descbakery" placeholder="Bakery" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="bakerycl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="bakerynl" placeholder="" name="dateofinfo">
              </div>
            </div>

              <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitbakery" tabindex="4" value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>


            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="Produce">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Produce</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
           <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descproduce" placeholder="Produce" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="producecl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="producenl" placeholder="" name="dateofinfo">
              </div>
            </div>

               <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitproduce"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="NatFds">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Nat Fds</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descnatfds" placeholder="Nat Fds" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="natfdscl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="natfdsnl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitnatfds"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

            </div>
            </div>
            </div>
            </div>

        <div class="tab-pane" id="GM">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >GM</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descgm" placeholder="GM" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="gmcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="gmnl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitgm"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

        </div>
        </div>
        </div>
        </div>

        <div class="tab-pane" id="HotWok">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Hot Wok</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
          <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="deschotwok" placeholder="Hot Wok" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="hotwokcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="hotwoknl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submithotwok"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

        </div>
        </div>
        </div>
        </div>


         <div class="tab-pane" id="Floral">
         <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Floral</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descfloral" placeholder="Floral" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="floralcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="floralnl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitfloral"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

        </div>
        </div>
        </div>
        </div>

        <div class="tab-pane" id="Coffshp">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >Coffshp</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="desccoffshp" placeholder="Coffshp" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="coffshpcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="coffshpnl" placeholder="" name="dateofinfo">
              </div>
            </div>

             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitcoffshp"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

        </div>
        </div>
        </div>
        </div>

         <div class="tab-pane" id="Seafood">
         <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >See Food</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descseafood" placeholder="Seafood" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="seafoodcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="seafoodnl" placeholder="" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitseafood"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>

        </div>
        </div>
        </div>
        </div>

         <div class="tab-pane" id="RX">
         <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >RX</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Description</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="descrx" placeholder="RX" name="dateofinfo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">Current Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="rxcl" placeholder="12" name="dateofinfo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="control-label col-sm-6">New Limit</label>
              <div class="col-sm-10 spacingbwnrows">
                  <input type="text" class="form-control" id="rxnl" placeholder="" name="dateofinfo">
              </div>
            </div>


             <div class="form-group">
                 
                       <div class="col-sm-10 spacingbwnrows" align="center">
         <input type="submit" name="login-submit" id="submitrx"  value="Submit" class="btn">
             
                                                {{ Form::token()}}
                      </div>
               
                  </div>


        </div>
        </div>
        </div>
        </div>

      </div>
  </div>

@stop