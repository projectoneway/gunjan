@extends('layout.dashboard')

@section('page_heading','Receivings')
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
    <div class="col-md-12 text-right">
     <a href="#" onclick="printPage()"><i class="fa fa-print fa-fw iconsize"></i> </a>
             <i class="fa fa-file-pdf-o fa-fw iconsize"></i>
        </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Transporter Number</th>
            <th>Transporter Name</th>
            <th>City</th>
            <th>State</th>
            <th>Zipcode</th>
            <th>Phone</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($transports as $trns)
          <tr>
            <td>{{ $trns->trns_number }}</td>
            <td>{{ $trns->name }}</td>
            <td>{{ $trns->city }}</td>
            <td>{{ $trns->state }}</td>
            <td>{{ $trns->zip_code }}</td>
            <td>{{ $trns->phone }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php echo $transports->links(); ?>
</div>
@stop
