@extends('layouts/referent-master')
@section('content')
<div class="container">
<form method="post" action="{{action('ZaujemController@updateAction', ['id'=>$zaujemca->id])}}">
                <div class="form-row">
               
                <div class="form-group col-md-6">
                        <label for="vek-id">Status</label>
                       
                        <select class="form-control" id="role-id" name="status" value="{{$zaujemca->status}}"> 
                        <option value="schvaleny">Schválený</option>
                        <option value="cakajuci">Čakajúci</option>
                        <option value="ucastnik">Neschválený</option>
                        </select><br>
                        </div>
                </div>
                
                
                <input type ="submit"class="btn btn-success" value="Odoslať">
                
                <button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
                
                    {{csrf_field()}}
                </div>
                </form>
            </div>
@endsection