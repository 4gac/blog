@extends('layouts/master')
@section('title',$posts->title)

@section('content')
<section>
    <article>
        <header>
            <h1>
            <a href="{{URL::current()}}">{{$posts->title}}</a>
            </h1>
            <time>
                <small>{{$posts->created_at}}</small>
            </time>
            <p>{!!$posts->text!!}</p>
        </header>
    </article>
</section>
@endsection