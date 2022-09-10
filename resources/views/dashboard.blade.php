@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
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
              <h3 class="card-title">Asset Statistic</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
              </div>
            </div>
            
            <div class="card-body p-0">
              <div class="row">
                <div class="col-md-6">
                  <div class="chart-responsive">
                    <canvas id="asset" height="400"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <div class="col-md-6 align-self-center">
                  <ul class="chart-legend clearfix">
                    <li><i class="far fa-circle text-danger"></i> PC: {{$get_pc}}</li>
                    <li><i class="far fa-circle text-success"></i> Laptop: {{$get_laptop}}</li>
                    <li><i class="far fa-circle text-warning"></i> Printer: {{$get_printer}}</li>
                    <br>
                    <li>Total Asset available in this system: <br><h3>{{$asset_total}}</h3></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card-info -->
        </div>
        <!--/.col (left) -->

        <!-- right column -->
        <div class="col-md-6">
          <!-- Operating System Statistic elements -->
          <div class="card shadow-lg card-info">
            <div class="card-header">
              <h3 class="card-title">Operating System Statistic</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body p-0">
              <div class="row">
                <div class="col-md-6">
                  <div class="chart-responsive">
                    <canvas id="os" height="400"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <div class="col-md-6 align-self-center">
                  <ul class="chart-legend clearfix">
                    <li><i class="far fa-circle text-danger"></i> Windows XP SP3: {{$winxp}}</li>
                    <li><i class="far fa-circle text-success"></i> Windows 7 SP1: {{$win7}}</li>
                    <li><i class="far fa-circle text-warning"></i> Windows 10: {{$win10}}</li>
                    <br>
                    <li>Total PC and Laptop available in this system: <br><h3>{{$pclaptop_total}}</h3></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card-info -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@stop

@push('scripts')
<script>
  //-------------
    //- PIE CHART(asset) -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#asset').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'PC', 
          'Laptop',
          'Printer', 
      ],
      datasets: [
        {
          data: [{{$get_pc}},{{$get_laptop}},{{$get_printer}}],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var pieOptions     = {
      legend: {
        display: false
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and doughnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions      
    })
  
    //-----------------
    //- END PIE CHART -
    //-----------------

    //-------------
    //- PIE CHART(os) -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#os').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Windows XP SP3', 
          'Windows 7 SP1',
          'Windows 10', 
      ],
      datasets: [
        {
          data: [{{$winxp}},{{$win7}},{{$win10}}],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var pieOptions     = {
      legend: {
        display: false
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and doughnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions      
    })
  
    //-----------------
    //- END PIE CHART -
    //-----------------
  </script>
@endpush
