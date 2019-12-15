@extends('adminlte::page')
@section('content')
<table class="table table-hover table-responsive-sm">
 
    <thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Názov univerzity</th>
			<th scope="col">Výzva</th>
			<th scope="col">Študíjny odbor</th>
			<th scope="col">Počet miest</th>
			<th scope="col"><button type="button" class="btn btn-success"><a href="{{action("UniversityController@getAddUniPostForm")}}">priradiť</a></button></th>
			<th scope="col"></th>
		</tr>
    </thead>
    <tbody>
		@foreach($uniPosts as $uniPost)
		<tr>
			<td>{{$uniPost->id}}</td>
			<td>{{$uniPost->nazov}}</td>
			<td>{{$uniPost->title}}</td>
			<td>{{$uniPost->studijny_odbor}}</td>
			<td>{{$uniPost->pocet_miest}}</td>
			<td><button type="button" class="btn btn-warning"><a href="{{action("UniversityController@showUniPostAction",['id'=>$uniPost->id])}}">editovať</a></button></td>
			<td><button type="button" class="btn btn-danger"><a href="{{action("UniversityController@deleteUniPostAction",['id'=>$uniPost->id])}}">zmazať</a></button></td>
		</tr>
		@endforeach
    </tbody>
</table>


@endsection