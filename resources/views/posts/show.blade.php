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
<<<<<<< HEAD
    <a href="{{'user',$post->user->id}}">
=======
    <a href="{{url('user',$post->user->id)}}">
>>>>>>> 70c644168440866cb510558c2e8b5a0e1dfa93c7
    {{$post->user->name}}</a>
    </small>
</div>
</article>

</section>

@endsection