@yield('vsetky-pobyty')
<table class="table table-hover table-responsive-sm">
   
    <tr>
            <thead class="thead-dark">
            <th scope="col">Index</th>
            <th scope="col">Titulok</th>
            <th scope="col">Slug</th>
            <th scope="col">Text</th>
            <th scope="col">User ID</th>
            @if(Auth::user()->role=='admin')
            <th scope="col"><button type="button" class="btn btn-success"><a href="{{action("PostController@AdmingetAddPobytForm")}}">pridať</a></button></th>
            @endif
            @if(Auth::user()->role=='referent')
            <th scope="col"><button type="button" class="btn btn-success"><a href="{{action("PostController@ReferentgetAddPobytForm")}}">pridať</a></button></th>
            @endif
            <th scope="col"></th>
        </tr>
            </thead>
    <?php $i=1;?>
    @forelse($posts as $post)
    @if($post->tags)
    @foreach($post->tags->where('name', 'Študijné pobyty') as $tags)
    <tbody>
    <tr>
        <td>{{$i++}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->slug}}</td>
        <td>{!!$post->excerpt!!}</td>
        <td>{{$post->user_id}}</td>
        @if(Auth::user()->role=='admin')
        <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@AdminshowPobytAction",['id'=>$post->id])}}">editovať</a></button></td>
        @endif
        @if(Auth::user()->role=='referent')
        <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@ReferentshowPobytAction",['id'=>$post->id])}}">editovať</a></button></td>
        @endif
        <td><button type="button" class="btn btn-danger"><a href="{{action("PostController@deletePobytAction",['id'=>$post->id])}}">zmazať</a></button></td>
    </tr>

    @endforeach
    </tbody>
    @endif
    @empty
    <p>nič, man</p>
    @endforelse
</table>
