@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Preventive Maintenance Details</h1>
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
            <h3 class="card-title">Edit Preventive Maintenance Details</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form action="{{ route('assets.prevs.update', [$prev->assets_id, $prev->id]) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="card-body">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Date:</strong>
                  <input type="date" name="pm_date" value="{{ $prev->pm_date }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Notes:</strong>
                  <input type="textarea" name="pm_notes" value="{{ $prev->pm_notes }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route("assets.prevs.index", $assets_id) }}" class="btn btn-primary">Back</a>
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