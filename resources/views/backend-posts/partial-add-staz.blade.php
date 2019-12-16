@yield('content')
@section('css')
    <link rel="stylesheet" href="{{asset('css/image-picker.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@stop


@section('js')
    <script src="{{asset('js/image-picker.js')}}"></script>script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://jcuenod.github.io/imgCheckbox/assets/js/jquery.imgcheckbox.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@stop
@section('content')
<div class="container">
@if(Auth::user()->role=='admin')
<form method="post" action="{{action('PostController@AdmininsertStazAction')}}">
@endif
@if(Auth::user()->role=='referent')
<form method="post" action="{{action('PostController@ReferentinsertStazAction')}}">
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
    <div class="container page-top">
        <div class="row" id="inputPictures" style="margin-bottom: 5px">

        </div>
    </div>
    <div class="md-12 float-lg-right" >
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pridať z galérie</button>
    </div>
{{--<select name="tag_id[]" class="form-control" multiple="multiple">
    @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
    @endforeach
</select>
--}}

<input type ="submit"class="btn btn-success" value="Odoslať">
<button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
    {{csrf_field()}}
</div>
</form>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Galéria</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div class="container page-top">
                        <div class="row">


                            @forelse($images as $image)

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <div class="custom-control custom-checkbox image-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{$image->id}}" name="selectedPictures[]" onclick="pridaj('{{asset('assets/images/').'/'.$image->imgPath}}','{{$image ->alt}}','{{$image->id}}',this.checked)">
                                    <label class="custom-control-label" for="{{$image->id}}" >
                                        <img src="{{asset('assets/images/').'/'.$image->imgPath}}" alt="#" class="img-fluid" >
                                    </label>
                                </div>  
                                </div>
                            @empty
                                <p>Galéria je prázdna</p>
                            @endforelse



                        </div>

                    </div>



                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
