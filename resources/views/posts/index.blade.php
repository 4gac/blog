@extends('master')



@section('title','Vsetky posty')
@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
<section class="box post-list">
<h1 class="box-heading text-muted"></h1>
{{$title or "erasmus"}}
<h1>šicke články</h1>

@forelse($posts as $post)
<article id="post-{{ $post->id }}" class="posts">
<header class="post-header" > 
    <h2>
    <a href="{{ url('post', $post->id) }}">{{$post->title}}</a>
    <time>
        <small>{{$post->created_at}}</small>
    </time>
    </h2>

    @if($post->tags)
    <p class="tags">
        @foreach ($post->tags as $tag)
    <a href="{{url('tag',$tag->id)}}">
    {{$tag->name}}
    </a>
            
        @endforeach
    </p>
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


@empty
<p>nič, man</p>
@endforelse

</section>
</div>
</div>
@endsection