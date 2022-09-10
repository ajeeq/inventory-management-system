@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Entry Button</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content-header">
    <header class="masthead">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col">
            <div class="masthead-cards">

              <div class="d-flex">
                <a href="#" class="w-50 pr-3 pb-4">
                  <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                    <div class="card-body text-center">
                      <div class="text-center">
                        <i class="fas fa-edit fa-4x my-2"></i>
                      </div>
                      Assets
                    </div>
                  </div>
                </a>

                <a href="#" class="w-50 pl-3 pb-4">
                  <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                    <div class="card-body text-center">
                      <div class="text-center">
                        <i class="fas fa-4x fa-user-plus my-2"></i>
                      </div>
                      Staffs
                    </div>
                  </div>
                </a>
              </div>
              
              <div class="d-flex">
                <a href="#" class="w-50 pr-3">
                  <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                    <div class="card-body text-center">
                      <div class="text-center">
                        <i class="fas fa-4x fa-tools my-2"></i>
                      </div>
                      Maintenance & Services
                    </div>
                  </div>
                </a>

                <a href="#" class="w-50 pl-3">
                  <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                    <div class="card-body text-center">
                      <div class="text-center">
                        <i class="fas fa-4x fa-tasks my-2"></i>
                      </div>
                      Preventive Maintenance
                    </div>
                  </div>
                </a>
              </div>
                        {{-- <div class="shape"></div> --}}
            </div>
          </div>
        </div>
      </div>
    </header>
   </section>
  <!-- /.content -->
@endsection