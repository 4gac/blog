@extends('adminlte::page')
@section('content')
<table class="table table-hover table-responsive-sm">
   
    <tr>
            <thead class="thead-dark">
            <th scope="col">Index</th>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Email</th>
            <th scope="col">Heslo</th>
            <th scope="col">Rola</th>
            <th scope="col"><button type="button" class="btn btn-success"><a href="{{action("UserController@getAddUserForm")}}">pridať</a></button></th>
            <th scope="col"></th>
        </tr>
            </thead>
    <?php $i=1;?>
    @foreach($users as $user)
    <tbody>
    <tr>
        <td>{{$i++}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role}}</td>
        <td><button type="button" class="btn btn-warning"><a href="{{action("UserController@showAction",['id'=>$user->id])}}">editovať</a></button></td>
        <td><button type="button" class="btn btn-danger"><a href="{{action("UserController@deleteAction",['id'=>$user->id])}}">zmazať</a></button></td>
    </tr>
    @endforeach
    </tbody>
</table>

{!! $users->render("pagination::bootstrap-4") !!}

@endsection