@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Staff</h1>
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
            <h3 class="card-title">New Staff Entry Form</h3>
          </div>
          <!-- /.card-header -->
  
          <div class="card-body">
            <!-- form start -->
            {!! Form::open(['action' => ['StaffController@store', $assets_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="form-group">
                {{Form::label('staff_name', 'Staff Name:')}}
                {{Form::text('staff_name', '', ['class' => 'form-control'])}}
              </div>

              <div class="form-group">
                {{Form::label('staff_section', 'Staff Section:')}}
                {{Form::text('staff_section', '', ['class' => 'form-control'])}}
              </div>
              
              {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
              <a href="{{ route('assets.staffs.index', $assets_id) }}" class="btn btn-primary">Back</a>
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