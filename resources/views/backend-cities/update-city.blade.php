<?php
?>
@extends('adminlte::page')
@section('content')
<form method="post" action="{{action('UniversityController@updateMestoAction', ['id'=>$city->id])}}">
	<div class="form-group">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="nazov-id">Názov mesta</label>
				<input type ="text" class="form-control" id="nazov-id" name="nazov" value="{{$city->nazov}}"> <br>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="krajina-id">Krajina</label>
				<select class="form-control" id="krajina-id" name="krajina" value=""> 
					@foreach($countries as $c)
					@if($city->countries_id == $c->id)
					<option value="{{$c->id}}">{{$c->name}}</option>
					@endif
					@endforeach

					@foreach($countries as $c)
					@if($city->countries_id != $c->id)
					<option value="{{$c->id}}">{{$c->name}}</option>
					@endif
					@endforeach
				</select> 
				<br>
			</div>
		</div>
		<input type ="submit"class="btn btn-success" value="Odoslať">
		<button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
			{{csrf_field()}}
	</div>
</form>
@endsection