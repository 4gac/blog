@yield('content')
    <table class="table table-hover table-responsive-sm">

        <tr>
            <thead class="thead-dark">
            <th scope="col">Index</th>
            <th scope="col">Titulok</th>
            <th scope="col">Slug</th>
            <th scope="col">Text</th>
            <th scope="col">User ID</th>
            <th scope="col"></th>
            <th scope="col"></th>
            {{--  <th scope="col"><button type="button" class="btn btn-success"><a href="{{action("UserController@getAddUserForm")}}">pridať</a></button></th>
            <th scope="col"></th>--}}
            </tr>
            </thead>
            <?php $i=1;?>
            @forelse($posts as $post)
                @if($post->tags)
                    @foreach($post->tags->where('name', 'Účastnícke správy') as $tags)
                        <tbody>
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <td>{{$post->text}}</td>
                            <td>{{$post->user_id}}</td>
                            @if(Auth::user()->role=='admin')
{{--                                <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@AdminshowHodnotenieAction",['id'=>$post->id])}}">editovať</a></button></td>--}}
                            @endif
                            @if(Auth::user()->role=='referent')
{{--                                <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@ReferentshowHodnotenieAction",['id'=>$post->id])}}">editovať</a></button></td>--}}

                            @endif
                            @if(Auth::user()->role=='pouzivatel')
                                <td><button type="button" class="btn btn-warning"><a href="{{action("PostController@PouzivatelshowHodnotenieAction",['id'=>$post->id])}}">editovať</a></button></td>
                            @endif
                            <td><button type="button" class="btn btn-danger"><a href="{{action("PostController@deleteSpravaAction",['id'=>$post->id])}}">zmazať</a></button></td>
                            {{--<td><button type="button" class="btn btn-warning"><a href="{{action("UserController@showAction",['id'=>$user->id])}}">editovať</a></button></td>
                         <td><button type="button" class="btn btn-danger"><a href="{{action("UserController@deleteAction",['id'=>$user->id])}}">zmazať</a></button></td>--}}
                        </tr>

                        @endforeach
                        </tbody>
                        @endif
                        @empty
                            <p>nič, man</p>
        @endforelse
    </table>


