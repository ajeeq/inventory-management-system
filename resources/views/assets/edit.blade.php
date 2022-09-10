@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Asset Basic Details</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
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
            <h3 class="card-title"> Edit Asset Basic Details</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form action="{{ route('assets.update', $asset->id) }}" role="form" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                    <label for="category">Asset Category</label>
                    <input type="text" name="category" value="{{$asset->category}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="brand_model">Brand and Model</label>
                    <input type="text" name="brand_model" value="{{$asset->brand_model}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="{{$asset->username}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="serial_no">Serial No</label>
                    <input type="text" name="serial_no" value="{{$asset->serial_no}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="asset_no">Asset No</label>
                    <input type="text" name="asset_no" value="{{$asset->asset_no}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inv_no">Inventory No</label>
                    <input type="text" name="inv_no" value="{{$asset->inv_no}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="os">Operating System</label>
                    <input type="text" name="os" value="{{$asset->os}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="cpu">CPU</label>
                    <input type="text" name="cpu" value="{{$asset->cpu}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="ram">RAM Capacity</label>
                    <input type="text" name="ram" value="{{$asset->ram}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="appsys">Application System</label>
                    <input type="textarea" name="appsys" value="{{$asset->appsys}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="computer_name">Computer Name</label>
                    <input type="text" name="computer_name" value="{{$asset->computer_name}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="supplier_name">Supplier Company Name</label>
                    <input type="text" name="supplier_name" value="{{$asset->supplier_name}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="supplier_purchased">Date of Purchased</label>
                    <input type="date" name="supplier_purchased" value="{{$asset->supplier_purchased}}" placeholder="PC/Laptop/Printer" class="form-control">
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('assets.show',$asset->id) }}" class="btn btn-primary">Back</a>
              </div>
            </form>
            <!-- /.form -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card-body -->
      </div>
      <!--/.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection