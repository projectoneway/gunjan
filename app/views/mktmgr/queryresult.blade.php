@extends('layout.dashboard')

@section('page_heading','Receivings >> Printer Selection Menu')
@section('content')
@section('section')
<header class="row">
        @include('mktmgr.recivermenu')
    </header>
<style>
 
  @media print {
  a[href]:after {
    content: none !important;
  }
}
</style>
<div class="container">
          <div class="row">
            <div class="col-md-6"><h3>Browse</h3></div>
            <div class="col-md-6">
                <span class="pull-right">
                    <a href="#" onclick="printPage()"><i class="fa fa-print fa-fw iconsize"></i> </a>
                    <i class="fa fa-file-pdf-o fa-fw iconsize"></i>
                </span>
            </div>
          </div>
        </div>

<div class="container">
<!-- <a class="dt-button buttons-print" tabindex="0" aria-controls="example" href="#"><span>
        Print</span></a> -->
       
    <table class="table table-striped" id="example">
        <thead>
          <tr>
            <th>Invoice Created Date/Time</th>
            <th>Invoice Number</th>
            <th>Vendor Name</th>
            <th>Invoice Type</th>
            <th>Status</th>
            <th>Method Received</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($receivings as $vnd)
          <tr>
            <td>{{ $vnd->create_datetime }}</td>
            <td>{{ HTML::link(URL::route('mktmgr-view-seletedrow',['seq_number' => $vnd->seq_number]), $vnd->id) }}</td>
            <td>{{ $vnd->vname }}</td>
            <td>{{ $vnd->type_code }}</td>
            <td>{{ $vnd->status_code }}</td>
            <td>{{ $vnd->type_code }}</td>
            <td>{{ HTML::link(URL::route('mktmgr-get-itemsbyid',['seq_number' => $vnd->seq_number]), 'Items List') }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php //echo $receivings->links(); ?>
</div>

@stop
