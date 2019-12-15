@extends('layouts/ucastnik-master')
@section('content')

	<link href="{{ asset('css/grid-gallery.css') }}" rel="stylesheet">
<div class="container news-post">
    <form method="post" action="{{action('ZaujemController@PrihlasitNaStazAction',['id'=>$posts->id])}}">
    <section>
    <article>
        <header>

            <h1 class="single-post-heading">
            <a href="{{URL::current()}}">{{$posts->title}}</a>            
            </h1>
            <time>
                <small>{{$posts->created_at}}</small>
            </time>
            {!!$posts->text!!}
        </header>
{{--        BOTTOM GALLERY--}}
        <section class="gallery-block grid-gallery">
            
                <div class="heading">
                    <h2>Galéria</h2>
                </div>
                <div class="row">
                        @forelse($posts->galleryImages as $image)
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{asset('assets/images/').'/'.$image->imgPath}}">
                            <img class="img-fluid image scale-on-hover" src="{{asset('assets/images/').'/'.$image->imgPath}}">
                        </a>
                    </div>
                    @empty
                        <p>Galéria je prázdna</p>
                    @endforelse

             
            </div>
    </article>
</section>
{{--    END OF GALLERY--}}  
<input type ="submit"class="btn btn-success" onclick="myFunction()" value="Mám záujem" >

<script>
    function myFunction() {
    alert("Vaša žiadosť bola odoslaná, čoskoro sa vám ozveme.");
}
</script>
{{csrf_field()}}
</form>
</div>
@endsection
            

