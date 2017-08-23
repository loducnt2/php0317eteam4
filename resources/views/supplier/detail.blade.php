@extends('layouts.app')

@section('title') Supplier  @endsection

@section('content')
    <table border="1px">
        <tr>
            <td>Name</td>
            <td>Address</td>
        </tr>
    @if(isset($supplier))
        @foreach($supplier as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
        </tr>
        @endforeach
        @endif
    </table>
@endsection