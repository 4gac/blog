
<?php
?>
@extends('layouts/master')
@section('title', isset($title)? $title :'Domov')
@section('content')

<h1>{{$title or "šicke články"}}</h1>

@forelse($posts as $post)
<article id="post-{{ $post->id }}" class="posts">
<header class="post-header" > 
    <h2>
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


@empty
<p>nič, man</p>
@endforelse

</section>
</div>
</div>
@endsection
