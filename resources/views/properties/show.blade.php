@extends('layouts.app')

@section('content')

<div class='conteiner'>
    <div clas='row'>
        <div class='col-md-8 offset-md-2'>
        
            <h2>修繕一覧</h2>

            <table class='table table-bordered'>
                <tr>
                    <th>ステータス</th>
                    <th>修繕名</th>
                    <th>金額</th>
                    <th>承認</th>
                </tr>
                @foreach($repairs as $repair)
                <tr>
                    <td></td>
                    <td>{{ $repair -> construction_name }}</td>
                    <td>{{ $repair -> construction_price }}</td>
                    <td>@if(Auth::user()->depart == '代表取締役')
                        承認する
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