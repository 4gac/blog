@extends('layouts/master')
@section('content')

<script type="text/javascript" src="{{ URL::asset('js/uniredirect.js') }}"></script>
<div class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://edu.uhk.cz/mobility/wp-content/uploads/2016/08/hp-1920x698.jpg')">
            <div class="carousel-caption d-none d-md-block">
            <h1>{{$title or "Kontakt"}}</h1>
            </div>
        </div>
</div>

<div class="container news-post">
<h2>{{$country->name}}</h2>
<h4>{{$country->continent}}</h4>
<hr align="left" width="20%">
<div class="unitab">
        <h2>Univerzity</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Mesto</th>
                <th scope="col">Názov výzvy</th>
                <th scope="col">Zmluva od</th>
                <th scope="col">Zmluva do</th>
              </tr>
            </thead>
			
        @foreach($renderData as $uni)
            <tbody>
              <tr>
                <td>{{$uni->nazovmesto}}</td>
                <td><a onclick="redirectToUni({{$uni->id}})" style="color: DodgerBlue; cursor: pointer">{{$uni->nazov}}</a></td>
                <td>{{$uni->zmluva_od}}</td>
                <td>{{$uni->zmluva_do}}</td
              </tr>
            </tbody>
			
            @endforeach
          </table>
        </div>
</div>
</div>
<script> 
	function redirectToUni(id){
		var getUrl = window.location;
		var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
		window.location.replace(baseUrl +"/public/searchresults/university/"+id);
	}
</script>





@endsection