@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Staff Details</h1>
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
            <h3 class="card-title">Edit Staff Details</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form action="{{ route('assets.staffs.update', [$staff->assets_id, $staff->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Staff Name:</strong>
                  <input type="text" name="staff_name" value="{{ $staff->staff_name }}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Staff Section:</strong>
                  <input type="text" name="staff_section" value="{{ $staff->staff_section }}" class="form-control">
                </div>
              </div>
            
              <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('assets.staffs.index',$assets_id) }}" class="btn btn-primary">Back</a>
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