
<?php
?>
@extends('layouts/master')
@section('content')
<table class="table">
  <thead class="thead-dark">
@foreach($tag as $tag)
<tr>
<td>
{{$tag->name}}
</td>
</tr>
@endforeach
</table>
@endsection