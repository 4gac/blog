<?php
?>
@extends('adminlte::page')
@section('content')
<div class="container">
<form method="post" action="{{action('PostController@insertPobytAction')}}">
<div class="form-group">

<div class="form-row">
<div class="form-group col-md-12">
<label for="title-id">Title</label>
<input type ="text" class="form-control" id="title-id" name="title" value=""> 
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="text-id">Text</label>
{{--<input type="text" class="form-control" id="text-id" name="text" value=""> <br>--}}

<textarea class="description" name="text"></textarea>
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        //width: 900,
         height: 400
    });
</script>
</div>
</div>
{{--<select name="tag_id[]" class="form-control" multiple="multiple">
    @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
    @endforeach
</select>
--}}

<input type ="submit"class="btn btn-success" value="Odoslať">
<button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
    {{csrf_field()}}
</div>
</form>
</div>
@endsection
