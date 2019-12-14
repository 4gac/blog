<div class="container">
<table class="table table-hover table-responsive-sm">
    <tr>
            <thead class="thead-dark">
            <th scope="col">Index</th>
            <th scope="col">Titulok</th>
            <th scope="col">Text</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
            </thead>
    <?php $i=1;?>
    @forelse($posts as $post)
    @if($post->tags)
    @foreach($post->tags->where('name', 'Pracovné stáže') as $tags)
    <tbody>
    <tr>
        <td>{{$i++}}</td>
        <td>{{$post->title}}</td>
        <td>{!!$post->text!!}</td>
        <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@AdminshowStazAction",['id'=>$post->id])}}">Viac info</a></button></td>
        <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@ReferentshowStazAction",['id'=>$post->id])}}">Prihlásiť sa</a></button></td>
        
    </tr>

    @endforeach
    </tbody>
    @endif
    @empty
    <p>nič, man</p>
    @endforelse
</table>
</div>