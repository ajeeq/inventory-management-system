@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Maintenance & Services Details</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- column -->
      <div class="col-md">
        <!-- form elements -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Edit Maintenance & Services Details</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form action="{{ route('assets.services.update', [$service->assets_id, $service->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Service date:</strong>
                  <input type="date" name="service_date" value="{{ $service->service_date }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Service notes:</strong>
                  <input type="text" name="service_notes" value="{{ $service->service_notes }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Service cost:</strong>
                  <input type="text" name="service_cost" value="{{ $service->service_cost }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Service location:</strong>
                  <input type="text" name="service_location" value="{{ $service->service_location }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('assets.services.index',$assets_id) }}" class="btn btn-primary">Back</a>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection