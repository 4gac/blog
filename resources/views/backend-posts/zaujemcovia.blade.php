
@extends('layouts/referent-master')

@section('content')

<div class="container">
    <table id="demo" class="table table-hover table-responsive-sm dataframe">
        <tr>
                <thead class="thead-dark">
                <th width="5%">Index</th>
                <th width="5%">Meno</th>
                <th width="10%">Priezvisko</th>
                <th width="10%">Email</th>
                <th width="20%">Záujem o</th>
                <th width="5%">Status</th>
                <th width="40%">Zmeniť na</th>
                <th width="5%"></th>
      
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