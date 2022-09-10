@extends('layouts.admin')

@section('content')
    <h1>Add New Disposal Detail</h1>

    <!-- FORM -->
    {!! Form::open(['action' => 'DisposalController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('disposal_date', 'Date:')}}
            {{Form::date('disposal_date', '', ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('disposal_refno', 'Reference Number:')}}
            {{Form::text('disposal_refno', '', ['class' => 'form-control'])}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href="/disposals" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@endsection