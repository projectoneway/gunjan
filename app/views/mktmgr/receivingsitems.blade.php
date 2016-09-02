@extends('layout.dashboard')

@section('page_heading','Receivings >> Printer Selection Menu')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>

<div class="container">
          <div class="row">
            <div class="col-md-6"><h3>Items</h3></div>
            <div class="col-md-6">
                <span class="pull-right">
                    <a href="#" onclick="printPage()"><i class="fa fa-print fa-fw iconsize"></i> </a>
                    <i class="fa fa-file-pdf-o fa-fw iconsize"></i>
                </span>
            </div>
          </div>
        </div>

<div class="container">
 
    <table class="table table-striped" id="example">
        <thead>
          <tr>
            <th>Qty</th>
            <th>UPC Number</th>
            <th>Store Unit</th>
            <th>Store Cost</th>
            <th>Store ALlowance</th>
            <th>Vendor Cost</th>
            <th>Vendor Allowance<th>
          </tr>
        </thead>
        <tbody>
        @foreach ($vendors as $vnd)
          <tr>
            <td>{{ $vnd->store_qty }}</td>
            <td>{{ $vnd->upc_number }}</td>
            <td>{{ $vnd->delvry_unt_ovrd }}</td>
            <td>{{ $vnd->store_cost }}</td>
            <td>{{ $vnd->store_allow }}</td>
            <td>{{ $vnd->vendor_cost }}</td>
            <td>{{ $vnd->vendor_allow }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php echo $vendors->links(); ?>
</div>
@stop
