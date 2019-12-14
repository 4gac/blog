
<?php
?>
@extends('layouts/master')
@section('title', isset($title)? $title :'Články používateľa')
@section('content')

<div class="carousel slide" data-ride="carousel">        
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('http://edu.uhk.cz/mobility/wp-content/uploads/2016/08/hp-1920x698.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1>Články autora: {{$title or "šicke články"}}</h1>
        </div>
    </div>
</div>
</div>
<div class="container">

@forelse($posts as $post)
<div class="user-article-wrapper">
<article id="post-{{ $post->id }}" class="posts">
<header class="post-header" > 
    <h2 class="user-post-title">
    <a href="{{ url('post', $post->id) }}">{{$post->title}}</a>
    </h2>
    <em><small><a href="{{ url('user', $post->user->id) }}">Autor: {{$post->user->name}}</a></small></em>
    <p>{{str_limit($post->teaser)}}</p>
    <time>
        <small>{{$post->created_at}}</small>
    </time>
</header>

<div class="post-content">
    <p>
        {{$post->excerpt}}
    </p>
</div>
<footer class="post-footer">
    <a href="{{ url('post', $post->id) }}" class="read-more">Čítať ďalej</a>
</footer>
</article>
</div>

@empty
<p>nič, man</p>
@endforelse

</section>
</div>
</div>
</div>
@endsection
