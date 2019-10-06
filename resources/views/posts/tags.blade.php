@if($post->tags)
    <p class="tags">
        @foreach($post->tags as $tag)
    <a href="{{url('tag',$tag->id)}}">
    {{$tag->name}} 
    </a>           
     @endforeach
    </p>
    @endif