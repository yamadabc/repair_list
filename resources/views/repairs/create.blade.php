@extends('layouts.app')

@section('content')

@section('title')修繕新規申請@endsection
<div class='container'>
    <div class='row'>
        <div class='col-md-8 offset-2'>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 class='col-md-4 text-center'>修繕新規申請</h2>
                 
                    {!! Form::open(['route'=>['repairs.store',$property -> id],'files'=>true,'enctype'=>'multipart/form-data','method' => 'POST']) !!}
                    
                    @csrf
                <div class='form-group row'>
                    {!! Form::label('property_name','物件名',['class'=>'col-md-4 col-form-label text-center']) !!}
                    {!! Form::text('property_name',$property-> property_name ,['class'=>'col-md-8 form-control']) !!}
                    
                </div>
                <div class='form-group row'>
                    {!! Form::label('construction_name','修繕名',['class'=>'col-md-4 col-form-label text-center']) !!}
                    {!! Form::text('construction_name',old('construction_name'),['class'=>'col-md-8 form-control']) !!}
                    
                </div>
                <div class='form-gourp row input-group mb-3'>
                    {!! Form::label('construction_price','金額',['class'=>'col-md-4 col-form-label text-center']) !!}
                    <div class='input-group-prepend'>
                    {!! Form::text('construction_price',old('construction_price'),['class'=>'col-md-8 form-control']) !!}
                    <div class='input-group-append'>
                        <span class='input-group-text' id='basic-addon'>万</span>
                    </div>

                    
                    </div>
                </div>
                <div class='form-group row'>
                    {!! Form::label('file','PDF',['class'=>'col-md-4 col-form-label text-center']) !!}
                    {!! Form::file('file',['class'=>'col-md-8']) !!}
                    
                </div>

                {!! Form::submit('申請する',['class'=>'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection