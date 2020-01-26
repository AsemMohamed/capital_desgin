@include('capital.layouts.header')

        <!-- HERO  -->
<section id="hero" class="hero-auto parallax-section text-light" data-parallax-image="{{url('')}}//design/user/files/uploads/1680x1050-dark.jpg">

    <div id="page-title" class="wrapper align-center">
        <h2><strong>Classic Grid Layout</strong></h2>
    </div> <!-- END #page-title -->

</section>
<!-- HERO -->


<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

    <div class="spacer-medium"></div>

    <div id="portfolio-grid" class="isotope-grid blog-container style-column-3 fitrows isotope-spaced">
                @foreach($sofas as $sofa)
            <div class="isotope-item blog-item">
                <div class="blog-media">
                    <a href="{{url('gallery')}}" class="thumb-overlay">
                        <img src="{{asset('images')}}/{{ $sofa->image }}" alt="{{ $sofa->seo }}">
                    </a>
                </div>

                <div class="blog-desc align-center">
                    <div class="blog-headline">
                        <h6 class="post-category uppercase">{{ $sofa->type }}</h6>
                        <h6>Height: {{ $sofa->height }}<br>
                            Length: {{ $sofa->length }}<br>
                            Width:  {{ $sofa->width }}</h6>
                        <h5 class="post-name"><a href="blog-single-custom1.html"><strong>{{ $sofa->name }}</strong></a></h5>
                        <h5 class="post-date"  style="color: green">{{ $sofa->price }} L.E</h5>
                    </div>
                    <ul class="blog-meta">

                        <p align="center"><a href="#" class="sr-button button-1 button-medium circled">Buy Now</a></p>
                    </ul>
                </div>
            </div>
       {{-- <div class="isotope-item portfolio-item branding">
            <div class="portfolio-media">
                <a href="{{url('gallery')}}" class="thumb-overlay overlay-effect-1 text-light">

                    <img src="{{asset('images')}}/{{ $sofa->image }}" alt="SEO IMG NAME">

                    <div class="overlay-caption hidden-on-start">
                        <h6 class="caption-sub portfolio-category subtitle-2">{{ $sofa->type }}</h6>
                        <h4 class="caption-name portfolio-name uppercase"> {{ $sofa->name }}</h4>
                        <h6 class="caption-sub portfolio-category subtitle-2">{{ $sofa->price }} L.E</h6>
                    </div>
                </a>
                <p align="center"><a href="#" class="sr-button button-1 button-medium circled">Buy Now</a></p>

            </div>
        </div>--}}
            @endforeach
    </div> <!-- END #portfolio-grid .isotope-grid -->
    <div class="spacer-medium"></div>
</section>
<!-- PAGEBODY -->

@include('capital.layouts.footer')