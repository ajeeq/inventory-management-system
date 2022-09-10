@extends('layouts.admin')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Preventive Maintenance Details</h1>
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
              <td><strong>Date:</strong></td>
              <td>{{ $prev->pm_date }}</td>
            </tr>
            <tr>
              <td><strong>Notes:</strong></td>
              <td>{{ $prev->pm_notes }}</td>
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
    <a href="{{ route('assets.prevs.index',$assets_id) }}" class="btn btn-primary">Back</a>
  </div>
</section>
<!-- /.content -->
@endsection