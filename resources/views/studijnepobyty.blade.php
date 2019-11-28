
<?php
?>
@extends('layouts/master')
@section('title','Študijné pobyty')
@section('content')


<div class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://edu.uhk.cz/mobility/wp-content/uploads/2016/08/hp-1920x698.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Domov</h1>
            </div>
        </div>
</div>

<div class="container">
    
<div class="item-margin">
<div class="row">  

@forelse($posts as $post)
@if($post->tags)
@foreach($post->tags->where('name', 'Študijné pobyty') as $tags)
<div class="col-lg-4 col-sm-6 mb-4">
        <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{asset('assets/images/').'/'.$post->image->where('main', '1')->first()->imgPath}}" alt=""></a>
        <div class="card-body"> 
    <article id="post-{{ $post->id }}" class="posts">
          <header class="post-header" > 
              <h2 class="card-title">
                <a href="{{ url('post', $post->id) }}">{{$post->title}}</a>
                </h2>
                <em><small><a href="{{ url('user', $post->user->id) }}">Autor: {{$post->user->name}}</a></small></em>
                <p>{{str_limit($post->teaser)}}</p>
                <time>
                    <small>{{$post->created_at}}</small>
                </time>
              @if($post->tags)
              @foreach($post->tags as $tag)
              <h3>{{$tag->name}}</h3>
              @endforeach
              @endif
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
</div>
</div>
@endforeach
@endif

@empty
<p>nič, man</p>
@endforelse
</div>

</div>
</div>@endsection