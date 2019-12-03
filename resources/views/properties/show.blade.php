@extends('layouts.app')

@section('content')

@section('title')修繕一覧@endsection

<div class='conteiner'>
    <div clas='row'>
        <div class='col-md-8 offset-md-2'>
        
            <h2>修繕一覧</h2>

            <table class='table table-bordered'>
                <tr>
                    <th>ステータス</th>
                    <th>修繕名</th>
                    <th>金額</th>
                    <th>PDFファイル</th>
                    <th>承認</th>
                </tr>
                @foreach($repairs as $repair)
                <tr>
                    <td>
                        @if($repair -> is_approved == false)
                            <div style="background:red;">
                            <div style="color:white;">
                            未承認</div></div>

                        @else
                            <div style="background:blue;">
                            <div style="color:white;">
                            承認済</div></div>
                        @endif
                    </td>
                    <td>{{ $repair -> construction_name }}</td>
                    <td>{{ $repair -> construction_price }}</td>
                    <td>@if($repair -> pdf_filename)
                            {!! link_to_route('get_download',$repair -> pdf_filename ,['id' => $repair ->id ]) !!}</td>
                        @endif
                    <td>@if(Auth::user()->depart == '代表取締役')
                            @if($repair -> is_approved == false)
                                {!! Form::open(['route'=>['approval.store',$repair->id]]) !!}
                                    {!! Form::submit('承認する',['class'=>'btn btn-success']) !!}
                                {!! Form::close() !!}
                            @endif
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
            {!! link_to_route('repairs.create','新規修繕申請',['id'=> $property -> id],['class'=>'btn btn-primary']) !!}
        </div>
       
    </div>
</div>

@endsection