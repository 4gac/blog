@extends('adminlte::page')
@section('content')
<table class="table table-hover table-responsive-sm">
   
    <thead class="thead-dark">
		<tr>
			<th scope="col">Index</th>
			<th scope="col">Email</th>
			<th scope="col">Tel_cislo</th>
			<th scope="col">Meno</th>
			<th scope="col">Priezvisko</th>
			<th scope="col">Typ kontaktu</th>
			<th scope="col"><button type="button" class="btn btn-success"><a href="{{action("ContactController@getAddContactForm")}}">pridať</a></button></th>
			<th scope="col"></th>
		</tr>
    </thead>
	<?php $i=1;?>
    <tbody>
		@foreach($contacts as $contact)
		<tr>
			<td>{{$contact->id}}</td>
			<td>{{$contact->email}}</td>
			<td>{{$contact->tel_cislo}}</td>
			<td>{{$contact->meno_kontaktu}}</td>
			<td>{{$contact->priezvisko_kontaktu}}</td>
			<td>
			@foreach($contactTypes as $c)
				@if($c->id === $contact->idtypKontaktu){{$c->typ_kontaktu}} @endif
			@endforeach
			</td>
			<td><button type="button" class="btn btn-warning"><a href="{{action("ContactController@showContactAction",['id'=>$contact->id])}}">editovať</a></button></td>
			<td><button type="button" class="btn btn-danger"><a href="{{action("ContactController@deleteContactAction",['id'=>$contact->id])}}">zmazať</a></button></td>
		</tr>
		@endforeach
    </tbody>
</table>




@endsection