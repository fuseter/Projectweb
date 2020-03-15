@extends('layouts.app')
@section('title','UBUeSport Console')
@section('content')


<h1> Controller จ้า</h1>


@foreach($games as $row)
    {{ $row->Team_name }}
@endforeach


@endsection