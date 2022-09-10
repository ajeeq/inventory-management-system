@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Asset</h1>
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
            <h3 class="card-title">New Asset Entry Form</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <!-- form start -->
            <form action="{{ route('assets.store') }}" role="form" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Enter asset category">
                  </div>

                  <div class="form-group">
                    <label for="brand_model">Brand and Model</label>
                    <input type="text" name="brand_model" class="form-control" placeholder="Enter brand and model of asset">
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username">
                  </div>

                  <div class="form-group">
                    <label for="serial_no">Serial No</label>
                    <input type="text" name="serial_no" class="form-control" placeholder="Enter serial no">
                  </div>

                  <div class="form-group">
                    <label for="asset_no">Asset no</label>
                    <input type="text" name="asset_no" class="form-control" placeholder="Enter asset no">
                  </div>

                  <div class="form-group">
                    <label for="inv_no">Inventory no</label>
                    <input type="text" name="inv_no" class="form-control" placeholder="Enter inventory no">
                  </div>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="os">Operating System</label>
                    <input type="text" name="os" class="form-control" placeholder="Enter operating system">
                  </div>

                  <div class="form-group">
                    <label for="cpu">CPU</label>
                    <input type="text" name="cpu" class="form-control" placeholder="Enter cpu type/clockspeed">
                  </div>

                  <div class="form-group">
                    <label for="ram">RAM capacity</label>
                    <input type="text" name="ram" class="form-control" placeholder="Enter RAM capacity">
                  </div>

                  <div class="form-group">
                    <label for="appsys">Application System</label>
                    <input type="text" name="appsys" class="form-control" placeholder="Enter application system(antivirus, MS Office 20xx)">
                  </div>

                  <div class="form-group">
                    <label for="computer_name">Computer Name</label>
                    <input type="text" name="computer_name" class="form-control" placeholder="Enter computer name">
                  </div>

                  <div class="form-group">
                    <label for="supplier_name">Company name</label>
                    <input type="text" name="supplier_name" class="form-control" placeholder="Enter company name">
                  </div>

                  <div class="form-group">
                    <label for="supplier_purchased">Date of purchased</label>
                    <input type="date" name="supplier_purchased" class="form-control" placeholder="Enter computer name">
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <!-- /.form -->
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