@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DISPOSAL</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/assets">Home</a></li>
            <li class="breadcrumb-item active">Disposal Details</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
              <div class="card shadow-lg card-info">
                <div class="card-header">
                  <h3 class="card-title">Disposal Details</h3>
                </div>

                <table class="table table-bordered table-hover">
                    <tr>
                      <td><b>Date:</b></td>
                      <td>{{ $disposal->disposal_date }}</td>
                    </tr>
                    <tr>
                      <td><b>Reference Number</b></td>
                      <td>{{ $disposal->disposal_refno }}</td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
          <div><a href="/disposals" class="btn btn-primary">Back</a></div>
        </div>
    </div>
  </section>
@endsection