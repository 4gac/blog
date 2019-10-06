@extends('master')
@section('title',$post->title)


@section('content')

<section class="box">
<article class="post full post">
<header class="post-header">
<h1 class="box-heading"><a href="URL::current()">{{$post->title}}</a></h1>
<time>
    <small>{{$post->created_at}}</small>
</time>
</header>
<div class="post-content">
    <p>{{$post->text}}</p>
    <small> --written by
    <a href="{{url('user',$post->user->id)}}">
    {{$post->user->name}}</a>
    </small>
</div>

<footer class="post-footer">


</footer>
@include('partials.tags')
</article>
</section>

@endsection