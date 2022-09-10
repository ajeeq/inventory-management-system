@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Disposals List</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <!-- /.card-header -->
        <div class="card-body">
          @if(count($disposals)>0)
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Date of Disposal</th>
                  <th>Reference No</th>
                  <th>Action</th>
                </tr>
              </thead>
              @php $i = 0 @endphp
              <tbody>
                @foreach ($disposals as $disposal)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $disposal->disposal_date }}</td>
                    <td>{{ $disposal->disposal_refno }}</td>
                    <td>
                      <form action="{{ route('disposals.destroy',$disposal->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('disposals.show',$disposal->id) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('disposals.edit',$disposal->id) }}">Edit</a>
    
                        @csrf
                        
                        {!!Form::open(['action' => ['DisposalController@destroy', $disposal->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <p>No disposals found!</p>
          @endif
            <div class="card-footer">
              <a href="/disposals/create" class="btn btn-primary">Add New Disposal Detail</a>
            </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection
