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
            <th>Invoice No</th>
            <th>Invoice Date</th>
            <th>Store Number</th>
            <th>Method</th>
            <th>Type</th>
            <th>Department</th>
            <th>Delivery Unit</th>
            <th>Vendor Number</th>
            <th>Cost Discrepency</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($cdreports as $cdr)
          <tr>
            <td>{{ $cdr->id }}</td>
            <td>{{ $cdr->invoice_date }}</td>
            <td>{{ $cdr->store_number }}</td>
            <td>{{ $cdr->method_rcvd }}</td>
            <td>{{ $cdr->type_code }}</td>
            <td>{{ $cdr->dept_number }}</td>
            <td>{{ $cdr->delivery_unit }}</td>
            <td>{{ $cdr->vendor_number }}</td>
            <td>{{ $cdr->cost_discrep_sw }}</td>
            <td>{{ $cdr->status_code }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php //echo $cdreports->links(); ?>
</div>
@stop
