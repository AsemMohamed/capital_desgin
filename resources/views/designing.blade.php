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

    <div id="portfolio-grid" class="isotope-grid portfolio-container style-column-3 fitrows">
                @foreach($designs as $design)
        <div class="isotope-item portfolio-item branding">
            <div class="portfolio-media">
                <a href="{{asset('images')}}/{{ $design->image }}" class="thumb-overlay overlay-effect-1 text-light">
                    <img src="{{asset('images')}}/{{ $design->image }}" alt="SEO IMG NAME">
                    <div class="overlay-caption hidden-on-start">
                        <h6 class="caption-sub portfolio-category subtitle-2">{{ $design->type }}</h6>
                        <h4 class="caption-name portfolio-name uppercase">{{ $design->name }}</h4>
                        <h6 class="caption-sub portfolio-category subtitle-2">{{ $design->price }}</h6>
                    </div>
                </a>
            </div>
        </div>
                @endforeach
    </div> <!-- END #portfolio-grid .isotope-grid -->
    <div class="spacer-medium"></div>
</section>
<!-- PAGEBODY -->

@include('capital.layouts.footer')