@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8 offset-md-2'>
            <h2>物件入力</h2>
            {!! Form::open(['route'=>'owned_properties.store']) !!}
            @csrf
            <div class='form-group'>
            
                {!! Form::label('property_name','物件名') !!}
                {!! Form::text('property_name',old('name'),['class'=>'form-control']) !!}
                @error('property_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {!! Form::submit('登録',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection