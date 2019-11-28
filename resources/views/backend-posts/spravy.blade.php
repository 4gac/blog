@extends('adminlte::page')
@section('content')
<table class="table table-hover table-responsive-sm">
   
    <tr>
            <thead class="thead-dark">
            <th scope="col">Index</th>
            <th scope="col">Titulok</th>
            <th scope="col">Slug</th>
            <th scope="col">Text</th>
            <th scope="col">User ID</th>
            {{--  <th scope="col"><button type="button" class="btn btn-success"><a href="{{action("UserController@getAddUserForm")}}">pridať</a></button></th>
            <th scope="col"></th>--}}
        </tr>
            </thead>
    <?php $i=1;?>
    @forelse($posts as $post)
    @if($post->tags)
    @foreach($post->tags->where('name', 'Účastnícke správy') as $tags)
    <tbody>
    <tr>
        <td>{{$i++}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->text}}</td>
        <td>{{$post->user_id}}</td>
           {{--<td><button type="button" class="btn btn-warning"><a href="{{action("UserController@showAction",['id'=>$user->id])}}">editovať</a></button></td>
        <td><button type="button" class="btn btn-danger"><a href="{{action("UserController@deleteAction",['id'=>$user->id])}}">zmazať</a></button></td>--}}
    </tr>

    @endforeach
    </tbody>
    @endif
    @empty
    <p>nič, man</p>
    @endforelse
</table>



@endsection