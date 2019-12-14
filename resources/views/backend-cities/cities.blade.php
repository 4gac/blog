@extends('adminlte::page')
@section('content')
<table class="table table-hover table-responsive-sm">
   
    <thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Názov</th>
			<th scope="col">Krajina</th>
			{{--<th scope="col"><button type="button" class="btn btn-success"><a href="{{action("ContactController@getAddContactForm")}}">pridať</a></button></th>
			<th scope="col"></th>--}}
		</tr>
    </thead>
    <tbody>
		@foreach($cities as $city)
		<tr>
			<td>{{$city->id}}</td>
			<td>{{$city->nazov}}</td>
			<td>
			@foreach($countries as $c)
			@if($city->countries_id == $c->id){{$c->name}} @endif
			@endforeach
			</td>
			{{--<td><button type="button" class="btn btn-warning"><a href="{{action("ContactController@showContactAction",['id'=>$contact->id])}}">editovať</a></button></td>
			<td><button type="button" class="btn btn-danger"><a href="{{action("ContactController@deleteContactAction",['id'=>$contact->id])}}">zmazať</a></button></td>--}}
		</tr>
		@endforeach
    </tbody>
</table>




@endsection