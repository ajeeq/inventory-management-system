@extends('layouts.admin')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Staff Details</h1>
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
          <h3 class="card-title">Staff Details</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-bordered table-hover">
            <tr>
              <td><strong>Staff Name:</strong></td>
              <td>{{ $staff->staff_name }}</td>
            </tr>
            <tr>
              <td><strong>Staff Section:</strong></td>
              <td>{{ $staff->staff_section }}</td>
            </tr>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card-info -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div>
    <a href="{{ route('assets.staffs.index',$assets_id) }}" class="btn btn-primary">Back</a>
  </div>
</section>
<!-- /.content -->
@endsection