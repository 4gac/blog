<?php
?>
@extends('adminlte::page')
@section('content')
<form method="post" action="{{action('ContactController@updateContactAction', ['id'=>$contacts->id])}}">
	<div class="form-group">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="firstname-id">Meno</label>
				<input type ="text" class="form-control" id="firstname-id" name="firstname" value="{{ $contacts->meno_kontaktu }}"> <br>
			</div>
			<div class="form-group col-md-6">
				<label for="lastname-id">Priezvisko</label>
				<input type ="text"class="form-control" id="lastname-id" name="lastname" value="{{ $contacts->priezvisko_kontaktu }}"> <br>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email-id">E-mail</label>
				<input type ="text"class="form-control" id="email-id" name="email" value="{{ $contacts->email }}"> <br>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="heslo-id">Telefónne číslo</label>
				<input type ="text" class="form-control" id="number-id" name="number" value="{{ $contacts->tel_cislo }}"> <br>
			</div>
			<div class="form-group col-md-6">
				<label for="role-id">Typ kontaktu</label>
				<select class="form-control" id="role-id" name="role" value="{{$contacts->idtypKontaktu}}"> 
					@foreach($contactTypes as $contactType)
					@if($contacts->idtypKontaktu == $contactType->id)
					<option value="{{$contactType->id}}">{{$contactType->typ_kontaktu}}</option>
					@endif
					@endforeach
					@foreach($contactTypes as $contactType)
					@if($contacts->idtypKontaktu != $contactType->id)
					<option value="{{$contactType->id}}">{{$contactType->typ_kontaktu}}</option>
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