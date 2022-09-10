@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Assets List</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="asset_datatable" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Asset No</th>
                    <th>Category</th>
                    <th>Brand and Model</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @php $i = 0 @endphp
                <tbody>
                  @foreach ($assets as $asset)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $asset->asset_no }}</td>
                    <td>{{ $asset->category }}</td>
                    <td>{{ $asset->brand_model }}</td>
                    <td>
                      <form action="{{ route('assets.destroy',$asset->id) }}" onclick="return confirm('Are you sure?')" method="POST">
                        <a class="btn btn-info" href="{{ route('assets.show',$asset->id) }}">Show</a>
                        @csrf
                        {!!Form::open(['action' => ['AssetController@destroy', $asset->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <center>
                <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="fas fa-print" aria-hidden="true"></span> Print</button>
                <a href="/dashboard" class="btn btn-primary">Back</a>
              </center>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop

@push('scripts')
<script type="text/javascript">
  $(document).ready( function () 
  {
    $('#asset_datatable').DataTable();
  });

  function myFunction() {
    window.print();
}
</script>
@endpush