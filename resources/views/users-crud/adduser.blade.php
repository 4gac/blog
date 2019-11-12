<?php
?>
@extends('adminlte::page')
@section('content')
<form method="post" action="{{action('UserController@insertAction')}}">
<div class="form-group">

<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname-id">Meno</label>
<input type ="text" class="form-control" id="firstname-id" name="firstname" value=""> <br>
</div>
<div class="form-group col-md-6">
<label for="lastname-id">Priezvisko</label>
<input type ="text"class="form-control" id="lastname-id" name="lastname" value=""> <br>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="email-id">E-mail</label>
<input type="text" class="form-control" id="email-id" name="Email" value=""> <br>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="heslo-id">Heslo</label>
<input type ="password" class="form-control" id="heslo-id" name="pwd" value=""> <br>
</div>
<div class="form-group col-md-6">
<label for="role-id">Rola</label>
<select class="form-control" id="role-id" name="role" value=""> 
        <option value="admin">Admin</option>
        <option value="referent">Referent</option>
        <option value="ucastnik">Účastník</option>
        </select> <br>
</div>
</div>


<input type ="submit"class="btn btn-success" value="Odoslať">
<button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
    {{csrf_field()}}
</div>
</form>
@endsection