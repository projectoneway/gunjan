<div class="container">
  <div class="menu_search_line">
    <ul class="navbar dib_float_left">
    
    <li class="menu_choice active">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-storetransfersquery')}}">Query</a>
    </li>

    <li class="menu_choice">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-storetransfersbrowse')}}">Browse</a>
    </li>
    
    <li class="menu_choice">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-storetransfersupdate')}}">Update</a>
    </li>

    <li class="menu_choice">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-storetransfersitems')}}">Items</a>
    </li>

    <li class="menu_choice">
        <a id="seShowEnrollmentModal" href="#">Print</a>
    </li>

    <li class="dropdown menu_choice">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<span class="caret"></span></a>
        <ul id="menu4" class="dropdown-menu">
        <li><a href="{{ URL::route('mktmgr-storetransferweeklyreport')}}">Weekly Transfers Accounting Recap Report</a></li>
        <li><a href="{{ URL::route('mktmgr-storetransferhardcopy')}}">Store Transfer Hardcopy</a></li>
        <li><a href="{{ URL::route('mktmgr-storetransfersweeklystatus')}}">Weekly Transfers Status Report</a></li>
        </ul>
    </li>

    <li class="menu_choice">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-storetransfersoperators')}}">Operators</a>
    </li>

    <li class="menu_choice">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-returnhome')}}" >Exit</a>
    </li>
    </ul>
</div>
</div>  