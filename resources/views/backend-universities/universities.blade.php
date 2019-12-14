﻿@extends('adminlte::page')
@section('content')
<table class="table table-hover table-responsive-sm">
   
    <thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Názov</th>
			<th scope="col">Zmluva od</th>
			<th scope="col">Zmluva do</th>
			<th scope="col">Krajina</th>
			<th scope="col">Mesto</th>
			<th scope="col">Kontaktna osoba</th>
			{{--<th scope="col"><button type="button" class="btn btn-success"><a href="{{action("ContactController@getAddContactForm")}}">pridať</a></button></th>
			<th scope="col"></th>--}}
		</tr>
    </thead>
    <tbody>
		@foreach($universities as $university)
		<tr>
			<td>{{$university->id}}</td>
			<td>{{$university->nazov}}</td>
			<td>{{$university->zmluva_od}}</td>
			<td>{{$university->zmluva_do}}</td>
			<td>
			@foreach($countries as $c)
			@if($university->countries_id == $c->id){{$c->name}} @endif
			@endforeach
			</td>
			@foreach($cities as $c)
			<td>@if($c->id == $university->id){{$c->nazov}} @endif</td>
			@endforeach
			<td>{{$university->kontaktna_osoba}}</td>
			{{--<td><button type="button" class="btn btn-warning"><a href="{{action("ContactController@showContactAction",['id'=>$contact->id])}}">editovať</a></button></td>
			<td><button type="button" class="btn btn-danger"><a href="{{action("ContactController@deleteContactAction",['id'=>$contact->id])}}">zmazať</a></button></td>--}}
		</tr>
		@endforeach
    </tbody>
</table>




@endsection