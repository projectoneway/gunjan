<div class="container">
  <div class="menu_search_line">
    <ul class="navbar dib_float_left">
    <!-- <li id="main-home-link" class="menu_choice home_menu_choice active">
        Bookkeeper
    </li> -->
    <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">Ad Item Ordering<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             
              <li><a href="{{ URL::route('mktmgr-aditemordering')}}">Order</a></li>
                    <li><a href="{{ URL::route('mktmgr-aditemrelease')}}">Release</a></li>
                    <li><a href="{{ URL::route('mktmgr-aditemdsd')}}">Dsd</a></li>
                    <li><a href="#">Print</a></li>
            </ul>
        </div>
        
        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Coded Items <span class="caret mainheadlink"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li><a href="{{ URL::route('mktmgr-codeditemquery')}}">Query</a></li>
                    <li><a href="{{ URL::route('mktmgr-codeditembrowser')}}">Browse</a></li>
                    <li><a href="#">Print</a></li>
                
            </ul>
        </div>
         
        
        <div class="dropdown sub">
            <a id="dLabel" href="{{ URL::route('mktmgr-editwarninglimits')}}" role="button" 
               class="menu_choice" data-target="#">
                Edit Warning Limits
            </a>
        <!-- <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#">Warning Limits</a></li>
        </ul> -->
        </div>
     <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Holiday Orders <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             <li><a href="{{ URL::route('mktmgr-storeholidayorders')}}">Order</a></li>
             <li><a href="#">Print</a></li>
            </ul>
        </div>
    

    
       <div class="dropdown sub">
            <a id="dLabel" href="{{ URL::route('mktmgr-editwarninglimits')}}" role="button" class="menu_choice" data-target="#">
             Order Transmission History
            </a>
        </div>
        
     <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Out Of Stocks <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li><a href="{{ URL::route('mktmgr-outofstockquery')}}">Query</a></li>
                    <li><a href="{{ URL::route('mktmgr-outofstockbrowse')}}">Browse</a></li>
                    <li><a href="#">Print</a></li>
            </ul>
        </div>

        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Plus Outs <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li><a href="{{ URL::route('mktmgr-plusoutbrowse')}}">Browse</a></li>
                    <li><a href="{{ URL::route('mktmgr-plusoutitem')}}">Item</a></li>
                    <li><a href="#">Print</a></li>
            </ul>
        </div>
        
        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Print Order <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
               <li><a href="{{ URL::route('mktmgr-printorderquery')}}">Query</a></li>
                    <li><a href="{{ URL::route('mktmgr-printorderbrowser')}}">Browse</a></li>
                    <li><a href="{{ URL::route('mktmgr-printorderdetails')}}">Detail</a></li>
                    <li><a href="#">Print</a></li>
            </ul>
        </div>

         <div class="dropdown sub">
            <a id="dLabel" href="{{ URL::route('mktmgr-returnhome')}}" role="button" 
               class="menu_choice" data-target="#">
                Exit
            </a>
        </div>
    </ul>
</div>
</div>  
