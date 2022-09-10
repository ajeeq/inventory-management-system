@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Maintenance & Services</h1>
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
          @if(count($services) > 0)
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Service Date</th>
                  <th>Service Notes</th>
                  <th>Service Cost</th>
                  <th>Service Location</th>
                  <th width="280px">Action</th>
                </tr>
              </thead>
              @php $i = 0 @endphp
              <tbody>
                @foreach ($services as $service) 
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $service->service_date }}</td>
                    <td>{{ $service->service_notes }}</td>
                    <td>RM{{ $service->service_cost }}</td>
                    <td>{{ $service->service_location }}</td>
                    
                    <td>
                      @csrf
                      <form action="{{ route('assets.services.destroy', [$service->assets_id, $service->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <a class="btn btn-info" href="{{ route('assets.services.show',[$service->assets_id, $service->id]) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('assets.services.edit',[$service->assets_id, $service->id]) }}">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                    </td>
                  </tr>
                @endforeach
              <tbody>
            </table>
          @else
            <p><b>No Maintenance & Services for this asset!</b></p>
          @endif
            <div class="card-footer">
              <a href="{{ route("assets.services.create", $assets_id) }}" class="btn btn-primary">Add Service</a>
              <a href="{{ route('assets.show',$assets_id) }}" class="btn btn-primary">Back</a>
            </div>

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
@endsection