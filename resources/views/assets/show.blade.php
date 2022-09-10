@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Asset Details</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">

              <!-- Asset Basic Details elements -->
              <div class="card shadow-lg card-info">
                <div class="card-header">
                  <h3 class="card-title">ASSET BASIC DETAILS</h3>

                  <div class="card-tools">
                      <ul class="pagination pagination-sm float-right">
                        <a class="btn-sm btn-warning text-dark" href="{{ route('assets.edit',$asset->id) }}">EDIT</a>
                      </ul>

                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  @if(count($view_assets) > 0)
                    @foreach ($view_assets as $view_asset)
                      <table class="table table-bordered table-hover">
                        <tr>
                          <td><b>Category</b></td>
                          <td>{{ $view_asset->category }}</td>
                        </tr>
                        <tr>
                          <td><b>Brand and Model</b></td>
                          <td>{{ $view_asset->brand_model }}</td>
                        </tr>
                        <tr>
                          <td><b>Username</b></td>
                          <td>{{ $view_asset->username }}</td>
                        </tr>
                        <tr>
                          <td><b>Serial No</b></td>
                          <td>{{ $view_asset->serial_no }}</td>
                        </tr>
                        <tr>
                          <td><b>Asset No</b></td>
                          <td>{{ $view_asset->asset_no }}</td>
                        </tr>
                        <tr>
                          <td><b>Inventory No</b></td>
                          <td>{{ $view_asset->inv_no }}</td>
                        </tr>
                        <tr>
                          <td><b>Operating System</b></td>
                          <td>{{ $view_asset->os }}</td>
                        </tr>
                        <tr>
                          <td><b>CPU</b></td>
                          <td>{{ $view_asset->cpu }}</td>
                        </tr>
                        <tr>
                          <td><b>RAM Capacity</b></td>
                          <td>{{ $view_asset->ram }}</td>
                        </tr>
                        <tr>
                          <td><b>Application System</b></td>
                          <td>{{ $view_asset->appsys }}</td>
                        </tr>
                        <tr>
                          <td><b>Computer Name</b></td>
                          <td>{{ $view_asset->computer_name }}</td>
                        </tr>
                        <tr>
                          <td><b>Supplier Company Name</b></td>
                          <td>{{ $view_asset->supplier_name }}</td>
                        </tr>
                        <tr>
                          <td><b>Date of purchased</b></td>
                          <td>{{ $view_asset->supplier_purchased}}</td>
                        </tr>
                      @endforeach
                    @else
                    <table class="table table-bordered table-hover">
                      <tr><td><b>No data available at this moment.</b></td></tr>
                  @endif
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!--/.col (left) -->

            <!-- left column -->
            <div class="col-md-6">
              <!-- Staff Details elements -->
              <div class="card shadow-lg card-info">
                <div class="card-header">
                  <h3 class="card-title">STAFF</h3>

                  <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                      <a class="btn-sm btn-warning text-dark" href="{{ route('assets.staffs.index',$asset->id) }}">EDIT</a>
                    </ul>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  @if(count($view_staffs) > 0)
                    @foreach ($view_staffs as $view_staff)
                    <table class="table table-bordered table-hover">
                      <tr>
                        <td><b>Name</b></td>
                        <td>{{ $view_staff->staff_name }}</td>
                      </tr>
                        <td><b>Section</b></td>
                        <td>{{ $view_staff->staff_section }}</td>
                      </tr>
                    @endforeach
                  @else
                    <table class="table table-bordered table-hover">
                      <tr><td><b>No data available at this moment.</b></td></tr>
                  @endif
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card-info -->

              <!-- Service Details elements -->
              <div class="card shadow-lg card-info">
                <div class="card-header">
                  <h3 class="card-title">MAINTENANCE & SERVICES</h3>

                  <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                      <a class="btn-sm btn-warning text-dark" href="{{ route('assets.services.index',$asset->id) }}">EDIT</a>
                    </ul>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  @if(count($view_services) > 0)
                    @foreach ($view_services as $view_service)
                    <table class="table table-bordered table-hover">
                      <tr>
                        <td><b>Date</b></td>
                        <td>{{ $view_service->service_date }}</td>
                      </tr>
                      <tr>
                        <td><b>Notes</b></td>
                        <td>{{ $view_service->service_notes}}</td>
                      <tr>
                        <td><b>Cost</b></td>
                        <td>{{ $view_service->service_cost }}</td>
                      </tr>
                      <tr>
                        <td><b>Location</b></td>
                        <td>{{ $view_service->service_location }}</td>
                      </tr>
                    @endforeach
                  @else
                    <table class="table table-bordered table-hover">
                      <tr><td><b>No data available at this moment.</b></td></tr>
                  @endif
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card-info -->

              <!-- Prev Details elements -->
              <div class="card shadow-lg card-info">
                <div class="card-header">
                  <h3 class="card-title">PREVENTIVE MAINTENANCE</h3>

                  <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                      <a class="btn-sm btn-warning text-dark" href="{{ route('assets.prevs.index',$asset->id) }}">EDIT</a>
                    </ul>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  @if(count($view_prevs) > 0)
                    @foreach ($view_prevs as $view_prev)
                    <table class="table table-bordered table-hover">
                      <tr>
                        <td><b>Date</b></td>
                        <td>{{ $view_prev->pm_date }}</td>
                      </tr>
                      <tr>
                        <td><b>Notes</b></td>
                        <td>{{ $view_prev->pm_notes}}</td>
                      <tr>
                    @endforeach
                  @else
                    <table class="table table-bordered table-hover">
                      <tr><td><b>No data available at this moment.</b></td></tr>
                  @endif
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card-info -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
          <center>
            <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="fas fa-print" aria-hidden="true"></span> Print</button>
            <a href="/assets" class="btn btn-primary">Back</a>
          </center>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@stop

@push('scripts')
<script type="text/javascript">
  function myFunction() {
    window.print();
}
</script>
@endpush