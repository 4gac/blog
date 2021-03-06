@extends('layouts/master')
@section('title',$posts->title)

@section('content')

<div class="container news-post">
<section>
    <article>
        <header>
{{--            FIRST Carousel image--}}
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
 @if(!is_null($posts->tags->whereIn('name',['Pracovné stáže','Študijné pobyty'])->first()))
                    @if(is_null($posts->galleryImages->first()))
                        <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/650C/O')">

                    @else
                        <div class="carousel-item active" style="background-image: url('{{asset('assets/images/').'/'.$posts->galleryImages->first()->imgPath}}')">
                    @endif
@else
                                @if(is_null(asset('assets/images/').'/'.$posts->image->where('main', '1')->first()))
                                    <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/650C/O')">

                                        @else
                                            <div class="carousel-item active" style="background-image: url('{{asset('assets/images/').'/'.$posts->image->where('main', '1')->first()->imgPath}}')">
                                                @endif

                            @endif

                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>

            <h1 class="single-post-heading">
            <a href="{{URL::current()}}">{{$posts->title}}</a>
            
            </h1>
            <time>
                <small>{{$posts->created_at}}</small>
            </time>
            {!!$posts->text!!}
          
        </header>
        <div class="unitab">
        <h2>Partnerské univerzity</h2>
        @forelse($universities as $uni)
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Univerzita</th>
                <th scope="col">Krajina</th>
                <th scope="col">Mesto</th>
                <th scope="col">Študijný odbor</th>
                <th scope="col">Počet miest</th>
                <th scope="col">Kontaktná osoba</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$uni->uninazov}}</td>
                <td>{{$uni->name}}</td>
                <td>{{$uni->nazov}}</td>
                <td>{{$uni->studijny_odbor}}</td>
                <td>{{$uni->pocet_miest}}</td>
                <td>{{$uni->kontaktna_osoba}}</td>
              </tr>
            </tbody>
          </table>
        </div>
    @empty
            <p>nič, man</p>
            @endforelse
        @if (is_null($posts->filepath))
        @else
            <a href="{{ url('download', $posts->id) }}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Stiahnuť prílohu </a>

        @endif
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
{{--                        @forelse($posts->galleryImages as $image)--}}
{{--                    <div class="col-md-6 col-lg-4 item">--}}
{{--                        <a class="lightbox" href="{{asset('assets/images/').'/'.$image->imgPath}}">--}}
{{--                            <img class="img-fluid image scale-on-hover" src="{{asset('assets/images/').'/'.$image->imgPath}}">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @empty--}}
{{--                        <p>Galéria je prázdna</p>--}}
{{--                    @endforelse--}}


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
</div>

<div class="zaujem">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3 class="zaujem-o-staz">Máš aj ty záujem o pobyt alebo stáž?
                 <br>Prihlás sa a možno vyberieme práve teba
                </h3>
            </div>
            <div class="col-sm-4">
                @if (!Auth::check())                       
                <button type="button" class="btn-login"><a href="{{route("ucastnik")}}">Prihlásiť sa</a></button>
             
                @else
    
                    @if(Auth::user()->role='ucastnik')
                        @if($posts->tag='Študijné pobyty')
                            <form method="post" action="{{action('ZaujemController@PrihlasitNaPobytAction',['id'=>$posts->id])}}">
                            <input type ="submit"class="btn-login" onclick="myFunction()" value="Mám záujem" >
                            <script>
                            function myFunction() {
                            alert("Vaša žiadosť bola odoslaná, čoskoro sa vám ozveme.");
                            }
                            </script>
                            {{csrf_field()}}
                            </form>
                            @elseif($posts->tag='Pracovné stáže')
                            <form method="post" action="{{action('ZaujemController@PrihlasitNaStazAction',['id'=>$posts->id])}}">
                                <input type ="submit"class="btn-login" onclick="myFunction()" value="Mám záujem" >
                                <script>
                                function myFunction() {
                                alert("Vaša žiadosť bola odoslaná, čoskoro sa vám ozveme.");
                                }
                                </script>
                                {{csrf_field()}}
                                </form>
                            @else<button type="button" class="btn-login"><a href="{{route("ucastnik")}}">Prihlásiť sa</a></button>   
                            @endif
                     @endif      
                     @endif                                     
            

               
            
            </div>
          </div> 
    </div>
</div>


@endsection