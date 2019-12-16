@extends('layouts/master')
@section('content')

@foreach ($renderData as $data)
    <p>{{$data->name}}</p>
@endforeach




@endsection