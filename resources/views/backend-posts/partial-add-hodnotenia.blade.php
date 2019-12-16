@yield('content')
@section('css')

    <link rel="stylesheet" href="{{asset('css/GalleryView.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="{{ asset('css/grid-gallery.css') }}" rel="stylesheet">

@stop


@section('js')

    <script src="{{asset('js/GalleryView.js')}}"></script>script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://jcuenod.github.io/imgCheckbox/assets/js/jquery.imgcheckbox.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <link href="{{ asset('js/grid-gallery.js') }}" rel="stylesheet">
@stop
@section('content')
    <div class="container">
        @if(Auth::user()->role=='admin')
            <form method="post" action="{{action('PostController@insertSpravaAction')}}" enctype="multipart/form-data">
                @endif
                @if(Auth::user()->role=='referent')
                    <form method="post" action="{{action('PostController@insertSpravaAction')}}" enctype="multipart/form-data">
                        @endif
                        @if(Auth::user()->role=='ucastnik')
                            <form method="post" action="{{action('PostController@insertSpravaAction')}}" enctype="multipart/form-data">
                                @endif
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="title-id">Title</label>
                                    <input type ="text" class="form-control" id="title-id" name="title" value="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="text-id">Text</label>
                                    {{--<input type="text" class="form-control" id="text-id" name="text" value=""> <br>--}}

                                    <textarea class="description" name="text"></textarea>
                                    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                                    <script>
                                        tinymce.init({
                                            selector:'textarea.description',
                                            //width: 900,
                                            height: 400
                                        });
                                    </script>
                                </div>
                            </div>

                            {{--<select name="tag_id[]" class="form-control" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            --}}
                            <br><div class="container" name="uploadImageZone">
                                <div class="row">
                                    <div class="card mr-1" margin="10px">
                                        <div class="col-sm-20 imgUp">
                                            <div class="imagePreview"></div>
                                            <label class="btn btn-primary">
                                                Upload<input type="file" class="uploadFile img" name="picture[]" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                            </label>
                                        </div><!-- col-2 -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Názov</label>
                                                <input type="text" class="form-control" name="nazov[]" placeholder="Názov" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">Popis</label>
                                                <input type="text" class="form-control"  name="popis[]" placeholder="Popis" required>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="fa fa-plus imgAdd"></i>
                                </div><!-- row -->
                            </div><!-- container -->
                            <input type ="submit"class="btn btn-success" value="Odoslať">
                            <button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
                            {{csrf_field()}}
                        </div>
                    </form>


    </div>
