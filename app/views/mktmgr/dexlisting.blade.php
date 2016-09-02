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
            <th>Type</th>
            <th>Comm ID</th>
            <th>Message</th>
            <th>Status</th>
            <th>Created Date/Time</th>
          </tr>
        </thead>
        <tbody>
        <?php if(count($dexact) > 0) { ?>
        @foreach ($dexact as $dex)
          <tr>
            <td>{{ $dex->invoice_number }}</td>
            <td>{{ $dex->type_code }}</td>
            <td>{{ $dex->commid }}</td>
            <td>{{ $dex->message }}</td>
            <td>{{ $dex->status_code }}</td>
            <td>{{ $dex->create_datetime }}</td>
          </tr>
        @endforeach
        <?php }
        else { ?>
          <tr><td colspan="6" align="center">No records found!</td></tr>  
        <?php } ?>
        </tbody>
    </table>          
    <?php echo $dexact->links(); ?>
</div>
@stop
