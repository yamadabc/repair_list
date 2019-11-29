@extends('layouts.app')

@section('content')
<div class='container'>
    
        <h2>所有物件一覧</h2>
    <div class='row'>
        <table class='table table-bordered'>
            <tr>
                <th>物件名</th>
                <th>修繕</th>
            </tr>
            @foreach($properties as $property)
            <tr>
                <td>{{ $property -> property_name }}</td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection