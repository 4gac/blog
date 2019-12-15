<?php
?>
@extends('adminlte::page')
@section('content')
<form method="post" action="{{action('UniversityController@updateUniverzitaAction', ['id'=>$universities->id])}}">
	<div class="form-group">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="nazov-id">Názov univerzity</label>
				<input type ="text" class="form-control" id="nazov-id" name="nazov" value="{{$universities->nazov}}"> <br>
			</div>
			<div class="form-group col-md-3">
				<label for="zmluva_od-id">Zmluva od</label>
				<input type="date"class="form-control" id="zmluva_od-id" name="zmluva_od" value="{{$universities->zmluva_od}}"> <br>
			</div>
			<div class="form-group col-md-3">
				<label for="zmluva_do-id">Zmluva do</label>
				<input type="date"class="form-control" id="zmluva_do-id" name="zmluva_do" value="{{$universities->zmluva_do}}"> <br>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="krajina-id">Krajina</label>
				<select class="form-control" id="krajina-id" name="krajina" value=""> 
					@foreach($countries as $c)
					@if($universities->countries_id == $c->id)
					<option value="{{$c->id}}">{{$c->name}}</option>
					@endif
					@endforeach

					@foreach($countries as $c)
					@if($universities->countries_id != $c->id)
					<option value="{{$c->id}}">{{$c->name}}</option>
					@endif
					@endforeach
				</select> 
				<br>
			</div>
			<div class="form-group col-md-6">
				<label for="mesto-id">Mesto</label>
				<select class="form-control" id="mesto-id" name="mesto" value=""> 
					@foreach($cities as $c)
					@if($universities->mesto_id == $c->id)
					<option value="{{$c->id}}">{{$c->nazov}}</option>
					@endif
					@endforeach
					@foreach($cities as $c)
					@if($universities->mesto_id != $c->id)
					<option value="{{$c->id}}">{{$c->nazov}}</option>
					@endif
					@endforeach
				</select> 
				<br>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="kontaktna_osoba-id">kontaktná osoba</label>
				<input type ="text" class="form-control" id="kontaktna_osoba-id" name="kontaktna_osoba" value="{{$universities->kontaktna_osoba}}"> <br>
			</div>
		</div>
		<input type ="submit"class="btn btn-success" value="Odoslať">
		<button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
			{{csrf_field()}}
	</div>
</form>
@endsection