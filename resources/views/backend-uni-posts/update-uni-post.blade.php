﻿<?php
?>
@extends('adminlte::page')
@section('content')
<form method="post" action="{{action('UniversityController@updateUniPostAction', ['id'=>$uniPosts->id])}}">
	<div class="form-group">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="university-id">Univerzita</label>
				<select class="form-control" id="university-id" name="university" value="">
					<option value="{{$uniPosts->university_id}}">{{$uniPosts->nazov}}</option>
					@foreach($universities as $c)
					@if($uniPosts->university_id != $c->id)<option value="{{$c->id}}">{{$c->nazov}}</option>@endif
					@endforeach
				</select> 
				<br>
			</div>
			<div class="form-group col-md-6">
				<label for="post-id">Výzva</label>
				<select class="form-control" id="post-id" name="post" value=""> 
					<option value="{{$uniPosts->post_id}}">{{$uniPosts->title}}</option>
					@foreach($posts as $c)
					@if($uniPosts->post_id != $c->id)<option value="{{$c->id}}">{{$c->title}}</option>@endif
					@endforeach
				</select>
				<br>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="studijny_odbor-id">Študíjny odbor</label>
				<input type ="text" class="form-control" id="studijny_odbor-id" name="studijny_odbor" value="{{$uniPosts->studijny_odbor}}"> <br>
			</div>
			<div class="form-group col-md-6">
				<label for="pocet_miest-id">Počet miest</label>
				<input type ="text" class="form-control" id="pocet_miest-id" name="pocet_miest" value="{{$uniPosts->pocet_miest}}"> <br>
			</div>
		</div>
		<input type ="submit"class="btn btn-success" value="Odoslať">
		<button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
			{{csrf_field()}}
	</div>
</form>
@endsection