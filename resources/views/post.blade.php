
<?php
?>
@extends('layouts/master')
@section('content')
<table class="table">
  <thead class="thead-dark">
@foreach($post as $post)
<tr>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->text}}</p>
    <a href="#" class="btn btn-primary">Ukáž výzvu</a>
  </div>
</div>
</td>
</tr>
@endforeach
</table>
@endsection
