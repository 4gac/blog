@extends('layouts/master')
@section('title','Kontakty')
@section('content')
<!-- Kontaktny formular -->
<div class="container">
   
   <div class="row">
      <div class="card" style="width: 22rem;">
         <img src="{{asset('assets/images/unknownwoman.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
            <h4 class="card-title">Mgr. Andrea Slovakova</h5>
            <h5 class="card-mail">aslovakova@ukf.sk</p>
            <p class="card-telcislo">+42 85 31 54</p>
         </div>
      </div>

      <div class="card" style="width: 22rem;">
         <img src="{{asset('assets/images/referentka1.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
            <h4 class="card-title">Mgr. Blazena Ticha</h5>
            <h5 class="card-mail">bticha@ukf.sk</p>
            <p class="card-telcislo">+42 49 21 87</p>
         </div>
      </div>



      <div class="card" style="width: 22rem;">
         <img src="{{asset('assets/images/referentka2.jpeg')}}" class="card-img-top" alt="referentka">
         <div class="card-body">
            <h4 class="card-title">Ing. Mariana Lesicka</h5>
            <h5 class="card-mail">mlesicka@ukf.sk</p>
            <p class="card-telcislo">+42 36 25 19</p>
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