<div class="container">
  <div class="menu_search_line">
    <ul class="navbar dib_float_left">
    <!-- <li id="main-home-link" class="menu_choice home_menu_choice active">
        Bookkeeper
    </li> -->
    <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">Reg<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Begin-Loans</a>
                <ul class="dropdown-menu">
                   <li><a href="{{URL::route('mktmgr-bookkeeperregister')}}">Register</a></li>
                   <li><a href="{{URL::route('mktmgr-bookkeeperregistertotal')}}">Totals</a></li>
                   <li><a href="{{URL::route('mktmgr-bookkeeperregistercmt')}}">Comments</a></li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Loans-to-Reg</a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::route('mktmgr-bookloanrregister')}}">Register</a></li>
                    <li><a href="{{URL::route('mktmgr-bookloanrregtotal')}}">Totals</a></li>
                    <li><a href="{{URL::route('mktmgr-bookloanrregcmt')}}">Comments</a></li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Reg-Check-Out</a>
                <ul class="dropdown-menu">
                  <li><a href="{{URL::route('mktmgr-bookregcheckoutitem')}}">Item</a></li>
                  <li><a href="{{URL::route('mktmgr-bookregcheckoutreg')}}">Register</a></li>
                  <li><a href="{{URL::route('mktmgr-bookregcheckouttotl')}}">Total</a></li>
                  <li><a href="{{URL::route('mktmgr-bookregcheckoutprnt')}}">Print</a></li>
                  <li><a href="{{URL::route('mktmgr-bookregcheckoutcmt')}}">Comment</a></li>
                </ul>
              </li>
                <li><a href="{{URL::route('mktmgr-bookregcmt')}}">Comment</a></li>
            </ul>
        </div>
        
        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Safe <span class="caret mainheadlink"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Total-Safe-Count</a>
                <ul class="dropdown-menu">
                   <li><a href="{{URL::route('mktmgr-booksafecnt')}}">Detail</a></li>
                   <li><a href="#">Print</a></li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Safe-Report</a>
                <ul class="dropdown-menu">
                 <li><a href="{{URL::route('mktmgr-booksafereport')}}">Safe-Report</a></li>
                 <li><a href="{{URL::route('mktmgr-booksafereportprnt')}}">Print</a></li>
                 <li><a href="{{URL::route('mktmgr-booksafereportcmt')}}">Comments</a></li>
                </ul>
               </li>
               
                 <li><a href="{{URL::route('mktmgr-booksafecmt')}}">Comment</a></li>
            </ul>
        </div>
         
        
        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Wkly-recap <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="{{URL::route('mktmgr-bookwklysales')}}">Sales</a></li>
              <li><a href="{{URL::route('mktmgr-bookwklysales')}}">Recap</a></li>
              <li><a href="{{URL::route('mktmgr-bookwklysales')}}">View</a></li>
              <li><a href="{{URL::route('mktmgr-bookwklysales')}}">Print</a></li>
              <li><a href="{{URL::route('mktmgr-bookwklyunlock')}}">Unlock</a></li>
              <li><a href="{{URL::route('mktmgr-bookwklysales')}}">Comments</a></li>
        </ul>
        </div>
     <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Inv <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Postage</a>
                <ul class="dropdown-menu">
                  <li><a href="{{URL::route('mktmgr-bookpostageadd')}}">Add</a></li>
                  <li><a href="{{URL::route('mktmgr-bookpostageprnt')}}">Print</a></li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Lottery</a>
                <ul class="dropdown-menu">
                 <li><a href="{{URL::route('mktmgr-booklotteryadd')}}">Add</a></li>
                 <li><a href="{{URL::route('mktmgr-booklotterytotl')}}">Totals</a></li>
                 <li><a href="{{URL::route('mktmgr-booklotteryprnt')}}">Print</a></li>
                 <li><a href="{{URL::route('mktmgr-booklotteryview')}}">View</a></li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Commuter</a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::route('mktmgr-bookcommuteradd')}}">Add</a></li>
                <li><a href="{{URL::route('mktmgr-bookcommuterprnt')}}">Print</a></li>
              </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Mthly-Commuter</a>
                <ul class="dropdown-menu">
                 <li><a href="{{URL::route('mktmgr-bookcommutermonthlyadd')}}">Add</a></li>
                 <li><a href="{{URL::route('mktmgr-bookcommutermonthlyprnt')}}">Print</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">pHone</a>
                <ul class="dropdown-menu">
                  <li><a href="{{URL::route('mktmgr-bookphonecardadd')}}">Add</a></li>
                  <li><a href="{{URL::route('mktmgr-bookphonecardprnt')}}">Print</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">epS</a>
                <ul class="dropdown-menu">
                   <li><a href="{{URL::route('mktmgr-bookepsadd')}}">Add</a></li>
                   <li><a href="{{URL::route('mktmgr-bookepsprnt')}}">Print</a></li>
                </ul>
              </li>
                <li><a href="#">Comment</a></li>
            </ul>
        </div>
    

    
       <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Fuel <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             <li><a href="#">N/A for store 305</a></li>
            </ul>
        </div>
        
     <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Mgmt <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             <li><a href="{{URL::route('mktmgr-bookmngmntdaily')}}">Daily</a></li>
          <li><a href="{{URL::route('mktmgr-bookmngmntweekly')}}">Weekly</a></li>
          <li><a href="{{URL::route('mktmgr-bookmngmntcmt')}}">Comments</a></li>
            </ul>
        </div>
    
    <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                cHg-regs <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#">Query</a></li>
          <li><a href="#">Browse</a></li>
          <li><a href="#">Next</a></li>
          <li><a href="#">Previous</a></li>
          <li><a href="#">Add</a></li>
          <li><a href="#">Update</a></li>
          <li><a href="#">Delete</a></li>
            </ul>
        </div>
        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Utility <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="{{URL::route('mktmgr-bookutilitypymntcnt')}}">Utility Payment Count</a></li>
            </ul>
        </div>
        
        <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Comments <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
               <li><a href="{{URL::route('mktmgr-bookcommentlist')}}">Comment List</a></li>
            </ul>
        </div>

    

 <div class="dropdown sub">
            <a id="dLabel" role="button" data-toggle="dropdown" class="menu_choice" data-target="#">
                Others <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
               <li><a href="#">N/A Supervisor only</a></li>
            </ul>
        </div>

  <div class="dropdown sub">
            <a id="dLabel" href="{{ URL::route('mktmgr-returnhome')}}" role="button" 
               class="menu_choice" data-target="#">
                Exit
            </a>
        <!-- <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#">Warning Limits</a></li>
        </ul> -->
        </div>

 </ul>
</div>
</div>  
