@extends('layouts.admin')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>New Maintenance & Service</h1>
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
            <h3 class="card-title">New Maintenance & Service</h3>
          </div>
          <!-- /.card-header -->
    
          <div class="card-body">
            <!-- form start -->
            {!! Form::open(['action' => ['ServiceController@store', $assets_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="form-group">
                {{Form::label('service_date', 'Service Date:')}}
                {{Form::date('service_date', '', ['class' => 'form-control'])}}
              </div>

              <div class="form-group">
                {{Form::label('service_notes', 'Service Notes:')}}
                {{Form::text('service_notes', '', ['class' => 'form-control'])}}
              </div>

              <div class="form-group">
                {{Form::label('service_cost', 'Service Cost:')}}
                {{Form::number('service_cost', '', ['class' => 'form-control', 'step' => '0.01'])}}
              </div>

              <div class="form-group">
                {{Form::label('service_location', 'Service Location:')}}
                {{Form::text('service_location', '', ['class' => 'form-control'])}}
              </div>

              {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
              <a href="{{ route('assets.services.index', $assets_id) }}" class="btn btn-primary">Back</a>
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