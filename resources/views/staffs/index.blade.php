@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Staffs</h1>
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
          @if(count($staffs) > 0)
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Section</th>
                  <th width="280px">Action</th>
                </tr>
              </thead>
              @php $i = 0 @endphp
              <tbody>
                @foreach ($staffs as $staff)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $staff->staff_name }}</td>
                    <td>{{ $staff->staff_section }}</td>
                    <td>
                      @csrf
                      <form action="{{ route('assets.staffs.destroy', [$staff->assets_id, $staff->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <a class="btn btn-info" href="{{ route('assets.staffs.show',[$staff->assets_id, $staff->id]) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('assets.staffs.edit',[$staff->assets_id, $staff->id]) }}">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Delete">
                     </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <p><b>No Staffs found!</b></p>
          @endif
            <div class="card-footer">
              <a href="{{ route("assets.staffs.create", $assets_id) }}" class="btn btn-primary">Add New Staff</a>
              <a href="{{ route('assets.show',$assets_id) }}" class="btn btn-primary">Back</a>
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