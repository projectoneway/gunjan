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
<!-- <a class="dt-button buttons-print" tabindex="0" aria-controls="example" href="#"><span>
        Print</span></a> -->
        <div class="col-md-12 text-right">
            <a href="#" onclick="printPage()"><i class="fa fa-print fa-fw iconsize"></i> </a>
             <i class="fa fa-file-pdf-o fa-fw iconsize"></i>
        </div>
    <table class="table table-striped" id="example">
        <thead>
          <tr>
            <th>Vendor Number</th>
            <th>Vendor Name</th>
            <th>City</th>
            <th>Rep</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($vendors as $vnd)
          <tr>
            <td>{{ $vnd->vendor_number }}</td>
            <td>{{ $vnd->name }}</td>
            <td>{{ $vnd->city }}</td>
            <td>{{ $vnd->rep }}</td>
            <td>{{ $vnd->type_code }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>          
    <?php echo $vendors->links(); ?>
</div>

@stop
