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
    	  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#CCC; color:#FFF; text-align:center; font-weight:bold;">
                        <div class="panel-title" >BEGINING LOAN REGISTER</div>
                       </div> 

                 <div style="padding-top:30px" class="panel-body" >

						
<form action="{{URL::route('mktmgr-postbeginloanreg')}}" class="form-horizontal" method="post" role="form" style="display: block;">
	       <div class="form-group">
            <label for="inputEmail" class="control-label col-sm-6">Register Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control alltotal" id="reg_number"  name="reg_number" value="{{{ $data['reg_number'] }}}" readonly="readonly">
            </div>
        </div>	

        <div class="form-group">
            <label for="inputEmail" class="control-label col-sm-6">Date</label>
        <div class="col-sm-10">
            <input type="text" class="form-control alltotal" id="reg_date"  name="reg_date" value="{{{ $data['reg_date'] }}}" readonly="readonly">
            </div>
        </div>  						    

                                <div class="form-group">
            <label for="inputEmail" class="control-label col-sm-6">Food Stamps</label>
        <div class="col-sm-10">
            <input type="text" class="form-control alltotal" id="foodstamps" placeholder="Food Stamps" name="foodstamps">
                 @if($errors->has('foodstamps'))
            {{ $errors->first('foodstamps')}}
            @endif
            </div>
        </div>

        

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">Ones</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="ones" placeholder="00.00" name="ones">
                 @if($errors->has('ones'))
            {{ $errors->first('ones')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">fives</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="fives" placeholder="00.00" name="fives">
                 @if($errors->has('fives'))
            {{ $errors->first('fives')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">tens</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="tens" placeholder="00.00" name="tens">
                 @if($errors->has('tens'))
            {{ $errors->first('tens')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">twenties</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="twenties" placeholder="00.00" name="twenties">
                 @if($errors->has('twenties'))
            {{ $errors->first('twenties')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">quarters</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="quarters" placeholder="00.00" name="quarters">
                 @if($errors->has('quarters'))
            {{ $errors->first('quarters')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">dimes</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="dimes" placeholder="00.00" name="dimes">
                 @if($errors->has('dimes'))
            {{ $errors->first('dimes')}}
            @endif
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">nickles</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="nickles" placeholder="00.00" name="nickles">
                 @if($errors->has('nickles'))
            {{ $errors->first('nickles')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">pennies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control alltotal" id="pennies" placeholder="00.00" name="pennies">
                 @if($errors->has('pennies'))
            {{ $errors->first('pennies')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">misc</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="misc" placeholder="00.00" name="misc">
                 @if($errors->has('misc'))
            {{ $errors->first('misc')}}
            @endif
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label col-sm-6">total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="total" placeholder="00.00" name="total" readonly="readonly">
                 @if($errors->has('total'))
            {{ $errors->first('total')}}
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
 <script type="text/javascript">

    $("#misc").blur(function(){
        tot=calnet();
        $("#total").val(tot);
    });

    $(".alltotal").blur(function(){
        tot=calnet();
        $("#total").val(tot);
    });
     
     function calnet() {
        
     misc=$("#misc").val();
     pennies=$("#pennies").val();
     nickles=$("#nickles").val();
     dimes=$("#dimes").val();
     quarters=$("#quarters").val();
     twenties=$("#twenties").val();
     tens=$("#tens").val();
     fives=$("#fives").val();
     ones=$("#ones").val();

     if(misc == ''){misc  = 0; }
     if(pennies == ''){pennies  = 0; }
     if(nickles == ''){nickles  = 0; }
     if(dimes == ''){dimes  = 0; }
     if(quarters == ''){quarters  = 0; }
     if(twenties == ''){twenties  = 0; }
     if(tens == ''){tens  = 0; }
     if(fives == ''){fives  = 0; }
     if(ones == ''){ones  = 0; }
     

     return tot=parseInt(misc)+parseInt(pennies)+parseInt(nickles)+parseInt(dimes)+parseInt(quarters)+parseInt(twenties)
         +parseInt(tens)+parseInt(fives)+parseInt(ones);

     //$("#total").val(tot);
    }
 </script>       
@stop