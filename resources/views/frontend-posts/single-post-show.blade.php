@extends('layouts/master')
@section('title',$posts->title)

@section('content')

<section>
    <article>
        <header>
{{--            FIRST Carousel image--}}
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('{{asset('assets/images/').'/'.$posts->image->where('main', '1')->first()->imgPath}}')">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>{{$posts->title}}</h1>
                        </div>
                    </div>
                </div>

            <h1>
            <a href="{{URL::current()}}">{{$posts->title}}</a>
            </h1>
            <time>
                <small>{{$posts->created_at}}</small>
            </time>
            <p>{!!$posts->text!!}</p>
        </header>
{{--        BOTTOM GALLERY--}}
        <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2>Galéria</h2>
                </div>
                <div class="row">
                    @forelse($posts->image->where('main', '0') as $image)
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{asset('assets/images/').'/'.$image->imgPath}}">
                            <img class="img-fluid image scale-on-hover" src="{{asset('assets/images/').'/'.$image->imgPath}}">
                        </a>
                    </div>
                    @empty
                        <p>Galéria je prázdna</p>
                    @endforelse


                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>
    </article>
</section>
{{--    END OF GALLERY--}}
@endsection