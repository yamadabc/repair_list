@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8 offset-2'>
            <h2>修繕新規申請</h2>
                 
                    {!! Form::open(['route'=>['repairs.store',$property -> id],'method' => 'POST']) !!}
                    
                    @csrf
                <div class='form-group'>
                    {!! Form::label('property_name','物件名') !!}
                    {!! Form::text('property_name',$property-> property_name ,['class'=>'form-control']) !!}
                    @error('property_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='form-group'>
                    {!! Form::label('construction_name','修繕名') !!}
                    {!! Form::text('construction_name',old('construction_name'),['class'=>'form-control']) !!}
                    @error('construction_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='form-gourp input-group mb-3'>
                    {!! Form::label('construction_price','金額') !!}
                    <div class='input-group-prepend'>
                    {!! Form::text('construction_price',old('construction_price'),['class'=>'form-control']) !!}
                    <div class='input-group-append'>
                        <span class='input-group-text' id='basic-addon'>万</span>
                    </div>

                    @error('construction_price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                {!! Form::submit('申請する',['class'=>'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection