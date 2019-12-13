<?php
?>
@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('css/GalleryView.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@stop


@section('js')
    <script src="{{asset('js/GalleryView.js')}}"></script>script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@stop
@section('content')
<div style="align:right">
    <input type="checkbox" data-toggle="toggle" data-on="Úpravy<br>zapnuté" data-off="Úpravy<br>vypnuté" onchange="myFunction()">
</div>

{{--Upload Image--}}
<form method="post" action="{{action ('GalleryImageController@insertGalleryImage') }}" enctype="multipart/form-data">
<br><div class="container" style="display:none" name="uploadImageZone">
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
    <div class="float-lg-right mt-3">
        <button type="submit" class="btn btn-primary btn-lg" name="saveButton" style="display: none">Uložiť</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
{{--End upload image--}}

<div class="container page-top">
        <div class="row">


            @forelse($images as $image)

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">


                    {{--                        <a name="removeButton" type="button" style="display:none"class="close" aria-label="Close" href="{{ action('GalleryImageController@removeFromDB',['id'=> $image->id]) }}">--}}
                    {{--                            <span aria-hidden="true">&times;</span>--}}
                    {{--                        </a> --}}
                    <a name="removeButton" type="button" style="display:none"class="close" id="{{$image->id}}"aria-label="Close" href="javascript:deleteReport({{$image->id}});">
                        <span aria-hidden="true">&times;</span>
                    </a>

                    <a href="{{asset('assets/images/').'/'.$image->imgPath}}" class="fancybox" rel="ligthbox">
                        <img src="{{asset('assets/images/').'/'.$image->imgPath}}" class="zoom img-fluid"  alt="{{$image->alt}}">

                    </a>
                </div>




            @empty
                <p>Galéria je prázdna</p>
            @endforelse

        </div>
    </div>


@endsection