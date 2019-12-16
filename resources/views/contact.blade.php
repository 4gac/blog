<?php
?>
@extends('layouts/master')
@section('title','Kontakty')
@section('content')
<!-- Kontaktny formular -->
<div class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://edu.uhk.cz/mobility/wp-content/uploads/2016/08/hp-1920x698.jpg')">
            <div class="carousel-caption d-none d-md-block">
            <h1>{{$title or "Kontakt"}}</h1>
            </div>
        </div>
</div>
</div>

<div class="container">
   
  <h2 class="kontakty-heading">Kontaktujte nás</h2>
   <div class="row">   
      @forelse($kontakt as $k)  
      <div class="card" style="width: 18rem; margin-left: 5rem;">
         <img src="{{asset('assets/images/unknownwoman.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
         <h4 class="card-title">{{$k->meno_kontaktu." ".$k->priezvisko_kontaktu}}</h4>
         <h5 class="card-job">{{$k->typ_kontaktu}}</h5>
         <h6 class="card-mail"><a href="mailto:{{$k->email}}">{{$k->email}}</a></h6>
         <h6 class="card-telcislo"><a href="tel:{{$k->tel_cislo}}">{{$k->tel_cislo}}</a></h6>
         </div>
      </div>
      @empty
<p>nič, man</p>
@endforelse
</div>
</div>


<br>
<br>
<br>
<br>



<div class="container">
   <div class="row">
      <div class="col">
      {!! Form::open(array('route' => 'fetchForm')) !!} 
      <fieldset>
      <!-- UserName -->
      <div class="form-group">
         {!! Form::label('username', 'Vaše meno:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col">
            {!! Form::text('username', $value = null, ['class' => 'form-control', 'placeholder'=>'meno', 'rows' => 1]) !!}
         </div>
      </div>
 
      <!-- Email -->
      <div class="form-group">
         {!! Form::label('email', 'Váš email:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col">
            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
         </div>
       </div>

      <!-- Text Area -->
      <div class="form-group">
         {!! Form::label('textarea', 'Vaša správa:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="co">
            {!! Form::textarea('textarea', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
         </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group">
         <div class="col>
            {!! Form::submit('Odoslať', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
         </div>
      </div>
      </fieldset>
   {!! Form::close() !!} 
</div>

</section>
<div class="col">

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.712739805666!2d18.089252315655024!3d48.30837597923741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3ee43b2f6763%3A0x75a567f979f5bed3!2sUniverzita%20Kon%C5%A1tant%C3%ADna%20Filozofa!5e0!3m2!1ssk!2ssk!4v1576501676255!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>
</div>
</div>
</div>
@endsection
