@extends('layouts/master')
@section('title','Kontakty')
@section('content')
<!-- Kontaktny formular -->
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
@endsection