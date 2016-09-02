@extends('layout.dashboard')

@section('page_heading','Receivings >> Printer Selection Menu')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.recivermenu')
    </header>

<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Invoice Date</th>
        <th>Invoice Number</th>
        <th>Vendor Name</th>
        <th>Type</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($receivings as $rcv)
      <tr>
        <td>{{ $rcv->invoice_date }}</td>
        <td>{{ $rcv->id }}</td>
        <td>{{ HTML::link(URL::route('mktmgr-view-receivings-sequery',['id' => $rcv->seq_number]), $rcv->name) }}</td>
        <td>{{ $rcv->type_code }}</td>
        <td>{{ $rcv->status_code }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>          
 
</div>
@stop
