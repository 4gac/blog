
@extends('layouts/referent-master')

@section('content')

<div class="container">
    <table class="table table-hover table-responsive-sm">
        <tr>
                <thead class="thead-dark">
                <th scope="col">Index</th>
                <th scope="col">Meno</th>
                <th scope="col">Priezvisko</th>
                <th scope="col">Email</th>
                <th scope="col">Záujem o</th>
                <th scope="col">Status</th>
                <th scope="col">Zmeniť na</th>
                <th scope="col"></th>
      
            </tr>
                </thead>
        <?php $i=1;?>
        @forelse($zaujemca as $z)
        
        <tbody>
        <tr>
            <td>{{$i++}}</td>
         
            <td>{{$z->name}}</td>
            <td>{{$z->lastname}}</td>
            <td>{{$z->email}}</td>
            <td>{{$z->title}}</td>
            <td>{{$z->status}}</td>
           
           <form method="post" action="{{action('ZaujemController@updateAction', ['id'=>$z->id])}}">
           <td>      
                <div class="form-group col-md-6">
                     
                <select class="form-control" id="role-id" name="status" value="{{$z->status}}"> 
                <option value="schvaleny">Schválený</option>
                <option value="cakajuci">Čakajúci</option>
                <option value="neschvaleny">Neschválený</option>
                </select><br>
                </div>         
            </td>
           <td><input type ="submit"class="btn btn-success" value="Odoslať"></td>
            {{csrf_field()}}
        </form>
        </div>
        </tr>
    
        </tbody>
        
        @empty
        <p>nič, man</p>
        @endforelse
    </table>
    </div>
    
@endsection