@extends('layout.dashboard')
@section('content')
@section('section')

<header class="row">
        @include('mktmgr.bookkepermenu')
    </header>
<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Rg/Chkr</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($results as $rcv)
      <tr>
        <td>{{ $rcv->reg_num }}</td>
        <td>{{ $rcv->total }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>          
 
</div>
@stop
