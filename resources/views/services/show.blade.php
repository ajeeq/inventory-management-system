@extends('layouts.admin')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Maintenance & Services Details</h1>
      </div>
    </div>
  </div>
<!-- /.container-fluid -->
</section>
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card shadow-lg card-info">
        <div class="card-header">
          <h3 class="card-title">Maintenance & Services Details</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-bordered table-hover">
            <tr>
              <td><strong>Service Date:</strong></td>
              <td>{{ $service->service_date }}</td>
            </tr>
            <tr>
              <td><strong>Service Notes:</strong></td>
              <td>{{ $service->service_notes }}</td>
            </tr>
            <tr>
              <td><strong>Service Cost:</strong></td>
              <td>RM{{ $service->service_cost }}</td>
            </tr>
            <tr>
              <td><strong>Service Location:</strong></td>
              <td>{{ $service->service_location }}</td>
            </tr>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div>
    <a href="{{ route('assets.services.index',$assets_id) }}" class="btn btn-primary">Back</a>
  </div>
</section>
<!-- /.content -->
@endsection