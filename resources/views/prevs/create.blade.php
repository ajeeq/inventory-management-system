@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Preventive Maintenance Details</h1>
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
        <!-- Asset form elements -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">New Preventive Maintenance Details Entry Form</h3>
          </div>
          <!-- /.card-header -->
    
          <div class="card-body">
            <!-- form start -->
            {!! Form::open(['action' => ['PrevController@store', $assets_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="form-group">
                {{Form::label('pm_date', 'Date:')}}
                {{Form::date('pm_date', '', ['class' => 'form-control'])}}
              </div>

              <div class="form-group">
                {{Form::label('pm_notes', 'Notes:')}}
                {{Form::text('pm_notes', '', ['class' => 'form-control'])}}
              </div>

              {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
              <a href="{{ route('assets.prevs.index', $assets_id) }}" class="btn btn-primary">Back</a>
            </div>
            {!! Form::close() !!}
          </div>
          <!-- /.card-body -->
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