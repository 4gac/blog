@extends('layouts/master')
@section('content')

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
<h2>{{$renderData->nazov}}</h2>
<h4>{{$renderData->nazovmesto}} - {{$renderData->nazovcountry}}</h4>
<p> Zmluva s univerzitou {{$renderData->nazov}} od: <b>{{$renderData->zmluva_od}}</b> - <b>{{$renderData->zmluva_do}}</b> </p>
<p>Kontaktná osoba: {{$renderData->kontaktna_osoba}}</p>

<hr align="left" width="20%">
<div class="unitab">
        <h2>Výzvy v ponuke</h2>
        @forelse($universities as $uni)
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Typ výzvy</th>
                <th scope="col">Názov výzvy</th>
                <th scope="col">Študijný odbor</th>
                <th scope="col">Počet miest</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
				@foreach($postTags as $postTag) @if($postTag->title == $uni->title) {{$postTag->name}} @endif @endforeach
				</td>
                <td>{{$uni->title}}</td>
                <td>{{$uni->studijny_odbor}}</td>
                <td>{{$uni->pocet_miest}}</td
              </tr>
            </tbody>
          </table>
        </div>
    @empty
            <p>nič, man</p>
            @endforelse
</div>
</div>



@endsection