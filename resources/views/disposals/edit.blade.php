@extends('layouts.admin')

@section('content')
    <h1>Edit Asset</h1>

    <!-- FORM -->
    {!! Form::open(['action' => ['DisposalController@update', $disposal->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('disposal_date', 'Date:')}}
            {{Form::date('disposal_date', $disposal->disposal_date, ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('disposal_refno', 'Reference Number:')}}
            {{Form::text('disposal_refno', $disposal->disposal_refno, ['class' => 'form-control'])}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href="/disposals" class="btn btn-primary">Back</a>
    </div>

    {{Form::hidden('_method', 'PUT')}}

    {!! Form::close() !!}
@endsection