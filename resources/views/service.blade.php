@extends('master')
@section('title',"Inf-channel")

@section('content')

@foreach($students as $row)
<p>{{$row['name']}}</p>
<p>{{$row['age']}}</p>
@endforeach

@endsection