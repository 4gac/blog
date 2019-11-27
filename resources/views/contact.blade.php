@extends('layouts/master')
@section('title','Kontakty')
@section('content')
<?php
         echo Form::open(array('route' => 'kontakt'));

            echo Form::label('Zadajte vase meno:');
            echo Form::text('username');
            echo '<br/>';

            echo Form::label('Zadajte vas email:');
            echo Form::text('email', 'example@gmail.com');
            echo '<br/>';

            echo Form::label('Predmet spravy:');
            echo Form::text('subject');
            echo '<br/>';

            echo Form::label('Vasa sprava:');   
            echo Form::text('message');
            echo '<br/>';
            
            
            echo Form::submit('Odoslat');
         echo Form::close();
      ?>

</section>
@endsection