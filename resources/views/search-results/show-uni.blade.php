@extends('layouts/master')
@section('content')

{{$renderData->nazov}}
<br>

{{url()->current()}} <br>

<?php echo "http://" . $_SERVER['SERVER_NAME']?>

@endsection