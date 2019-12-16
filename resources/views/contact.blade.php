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
   
   <div class="row">
      <div class="card" style="width: 18rem; margin-left: 5rem;">
         <img src="{{asset('assets/images/unknownwoman.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
            <h4 class="card-title">Ing. Anita Garajová, PhD.</h5>
            <h5 class="card-mail">agarajova@ukf.sk</p>
            <p class="card-telcislo">tel/fax: +421 37 6408 031</p>
         </div>
      </div>

      <div class="card" style="width: 18rem; margin-left: 1rem;" >
         <img src="{{asset('assets/images/unknownwoman.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
            <h4 class="card-title">Ing. Silvia Hrozenská, PhD.</h5>
            <h5 class="card-mail">shrozenska@ukf.sk</p>
            <p class="card-telcislo">+421 37 6408 035</p>
         </div>
      </div>



      <div class="card" style="width: 18rem; margin-left: 1rem;">
         <img src="{{asset('assets/images/unknownwoman.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
            <h4 class="card-title">Ing. Katarína Butorová, PhD.</h5>
            <h5 class="card-mail">kbutorova@ukf.sk</p>
            <p class="card-telcislo">tel/fax: +421 37 6408 031</p>
         </div>
      </div>
</div>

<br>
<br>
<br>
<br>

<div class="container">
      {!! Form::open(array('route' => 'fetchForm')) !!} 
      <fieldset>
      <!-- UserName -->
      <div class="form-group">
         {!! Form::label('username', 'Vaše meno:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-3">
            {!! Form::text('username', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
         </div>
      </div>
 
      <!-- Email -->
      <div class="form-group">
         {!! Form::label('email', 'Váš email:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-3">
            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
         </div>
       </div>

      <!-- Text Area -->
      <div class="form-group">
         {!! Form::label('textarea', 'Vaša správa:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-10">
            {!! Form::textarea('textarea', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
         </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group">
         <div class="col-lg-10 col-lg-offset-2">
            {!! Form::submit('Odoslať', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
         </div>
      </div>
      </fieldset>
   {!! Form::close() !!} 
</div>

</section>
</div>
@endsection
