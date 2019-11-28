@extends('adminlte::page')
@section('content')

<form method="post" action="{{action('PostController@updatePobytAction', ['id'=>$posts->id])}}">
                <div class="form-group">
                
                <div class="form-row">
                <div class="form-group col-md-12">
                <label for="title-id">Title</label>
				<input type ="text" class="form-control" id="title-id" name="title" value="{{ $posts->title }}"> 
				</div>
				</div>

				<div class="form-row">
				<div class="form-group col-md-12">
				<label for="text-id">Text</label>
				{{--<input type="text" class="form-control" id="text-id" name="text" value="{{ $posts->text }}"> <br>--}}

				<textarea class="description" name="text" value="{{ $posts->text }}"></textarea>
				<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
				<script>
					tinymce.init({
						selector:'textarea.description',
						//width: 900,
						height: 400,
						init_instance_callback: "insert_contents"
					});
					function insert_contents(inst){
						inst.setContent( "{{ $posts->text }}" );  
					}
				</script>
				</div>
				</div>
                
                
                <input type ="submit"class="btn btn-success" value="Odoslať">
                <button type="button" class="btn btn-secondary"><a href="{{ URL::previous() }}">Späť</a></button>
                
                    {{csrf_field()}}
                </div>
                </form>
@endsection