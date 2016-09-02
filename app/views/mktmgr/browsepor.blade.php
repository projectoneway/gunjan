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
            <th>Invoice Number</th>
            <th>Invoice Date</th>
            <th>Name</th>
            <th>Type</th>
            <th>Total Cost</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($results as $rs)
          <tr>
            <td>{{ $rs->id }}</td>
            <td>{{ $rs->invoice_date }}</td>
            <td>{{ $rs->name }}</td>
            <td>{{ $rs->type_code }}</td>
            <td>{{ $rs->tot_vend_cost }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php //echo $results->links(); ?>
</div>
@stop
