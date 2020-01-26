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
        @foreach($st_chairs as $st_chair)
            <div class="isotope-item blog-item">
                <div class="blog-media">
                    <a href="{{url('gallery')}}" class="thumb-overlay">
                        <img src="{{asset('images')}}/{{ $st_chair->image }}" alt="{{ $st_chair->seo }}">
                    </a>
                </div>

                <div class="blog-desc align-center">
                    <div class="blog-headline">
                        <h6 class="post-category uppercase">{{ $st_chair->type }}</h6>
                        <h6>Height: {{ $st_chair->height }}<br>
                            Length: {{ $st_chair->length }}<br>
                            Width:  {{ $st_chair->width }}</h6>
                        <h5 class="post-name"><a href="blog-single-custom1.html"><strong>{{ $st_chair->name }}</strong></a></h5>
                        <h5 class="post-date"  style="color: green">{{ $st_chair->price }} L.E</h5>
                    </div>
                    <ul class="blog-meta">

                        <p align="center"><a href="#" class="sr-button button-1 button-medium circled">Buy Now</a></p>
                    </ul>
                </div>
            </div>
        @endforeach
    </div> <!-- END #portfolio-grid .isotope-grid -->
    <div class="spacer-medium"></div>
</section>
<!-- PAGEBODY -->

@include('capital.layouts.footer')