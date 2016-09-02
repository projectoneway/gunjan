<div class="container">
  <div class="menu_search_line">

    <ul class="navbar dib_float_left">
    <!-- <li id="main-home-link" class="menu_choice home_menu_choice active">
        Printer Selection Menu
    </li> -->
    <!-- <li class="menu_choice active">
        <a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-receivings-query')}}">Query</a>
    </li> -->
    <!-- <li class="menu_choice"><a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-receivings-browse')}}">Browse</a></li>
    <li class="menu_choice"><a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-receivings-update')}}">Update</a></li> --> 
  <!-- <li class="menu_choice"><a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-receivings-items')}}">Items</a></li> -->
    
   <!--  <li class="menu_choice"><a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-receivings-receivingsofflinereceiving')}}">Offline Receiving</a></li> -->

    <li class="dropdown menu_choice">
      <a class="dropdown-toggle" data-toggle="dropdown" 
          href="{{ URL::route('mktmgr-receivings-receivingsofflinereceiving')}}">Offline Receiving
          <span class="caret"></span></a>
        <ul id="menu4" class="dropdown-menu">
           <li><a href="{{ URL::route('mktmgr-receivings-receivingsofflinereceiving')}}">Insert</a></li>
           <li><a href="{{ URL::route('mktmgr-receivings-query')}}">Query</a></li>
          <li><a href="{{ URL::route('mktmgr-receivings-query')}}">Items</a></li>
         <!--  <li><a href="%">Exit</a></li> -->
        </ul>
    </li>
      
    <li class="dropdown menu_choice">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Store Expenses<span class="caret"></span></a>
        <ul id="menu4" class="dropdown-menu">
           <li><a href="{{ URL::route('mktmgr-receivings-sequery')}}">Query</a></li>
        <!--  <li><a href="{{ URL::route('mktmgr-receivings-sebrowse')}}">Browse</a></li> 
          <li><a href="{{ URL::route('mktmgr-receivings-receivingsseupdate')}}">Update</a></li> -->
          <li><a href="{{ URL::route('mktmgr-receivings-receivingslogexpense')}}">Log Expense</a></li>
          <li><a href="{{ URL::route('mktmgr-receivings-sereports')}}">Reports</a></li>
         <!--  <li><a href="%">Exit</a></li> -->
        </ul>
    </li>


    <li class="dropdown menu_choice">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<span class="caret"></span></a>
        <ul id="menu4" class="dropdown-menu">
          <li><a href="{{ URL::route('mktmgr-report-weeklyreport')}}">Weekly Receiving Report</a></li>
          <li><a href="{{ URL::route('mktmgr-report-offlinereport')}}">Offline Report</a></li>
          <li><a href="{{ URL::route('mktmgr-report-storeinvoice')}}">Store Invoice</a></li>
          <li><a href="{{ URL::route('mktmgr-report-costdiscrepancyreport')}}">Cost Discrepancy Report</a></li>
          <li><a href="{{ URL::route('mktmgr-report-transportlisting')}}">Transporter Listing</a></li>
        </ul>
    </li>


    <li class="dropdown menu_choice">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dex Log<span class="caret"></span></a>
        <ul id="menu4" class="dropdown-menu">
          <li><a href="{{ URL::route('mktmgr-DEX-invoicedate')}}">Invoice Date</a></li>
          <li><a href="{{ URL::route('mktmgr-browse-vendor')}}">Vendor</a></li>
          <!--<li><a href="#">Browse</a></li>
          <li><a href="{{ URL::route('mktmgr-returnhome')}}">Exit</a></li>-->
        </ul>
    </li>
    <li class="menu_choice"><a id="seShowEnrollmentModal" href="{{ URL::route('mktmgr-returnhome')}}" >Exit</a></li>
    </ul>
</div>
</div>  