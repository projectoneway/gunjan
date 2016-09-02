@extends('layout.dashboard')

@section('page_heading','Receivings')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>
  <div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>UPC No</th>
            <th>Case Pack</th>
            <th>Vendor Qty</th>
            <th>Vendor Cost</th>
            <th>Vendor Allowance</th>
            <th>Vendor CRV</th>
            <th>Store Qty</th>
            <th>Store Cost</th>
            <th>Store Allowance</th>
            <th>Store CRV</th>
            <th>Free Qty</th>
            <th>Delivery Unit</th>
            <th>Note</th>
            <th>Active</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($storeinv as $sir)
          <tr>
            <td>{{ $sir->upc_number }}</td>
            <td>{{ $sir->case_pack }}</td>
            <td>{{ $sir->vendor_qty }}</td>
            <td>{{ $sir->vendor_cost }}</td>
            <td>{{ $sir->vendor_allow }}</td>
            <td>{{ $sir->vendor_crv }}</td>
            <td>{{ $sir->store_qty }}</td>
            <td>{{ $sir->store_cost }}</td>
            <td>{{ $sir->store_allow }}</td>
            <td>{{ $sir->store_crv }}</td>
            <td>{{ $sir->free_qty }}</td>
            <td>{{ $sir->delvry_unt_ovrd }}</td>
            <td>{{ $sir->spec_note_cd }}</td>
            <td>{{ $sir->active_sw }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php //echo $cdreports->links(); ?>
</div>
@stop
