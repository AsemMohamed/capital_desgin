@include('capital.layouts.header')
        <!-- HERO  -->
<section id="hero" class="hero-auto">

    <div class="revolution-slider-wrapper">
        <div id="revolutionslider1" class="revolution-slider"  data-version="5.0">
            <ul>
                    @foreach($slides as $slide)

                <li href="" class="hero-big parallax-section" data-parallax-image="{{asset('images')}}/{{ $slide->image }}">
                    <a href="{{ $slide->url}}">
                    <div href="" id="page-title" class="wrapper-small align-right">
                        <h1 class="colored"><strong>{{ $slide->title }}</strong></h1>
                        <h3><strong>{{ $slide->description }}</strong></h3>
                    </div> <!-- END #page-title -->
                    <a href="#" id="scroll-down" class="text-light"></a>
                    </a>
                </li>

                    @endforeach
            </ul>
        </div><!-- END .revolution-slider -->
    </div> <!-- END .revolution-slider-wrapper -->


</section>
<!-- HERO -->
<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

       @foreach( $departments as $department)
    <div class="column-section boxed-sticky clearfix">
        <div class="column one-third nopadding"  >
            <a href="#" class="thumb-overlay text-light overlay-effect-1">
                <img src="{{asset('images')}}\{{ $department->image }}" alt="{{ $department->seo }}" {{--style="max-height: 600px; max-width: 900px"--}}>
                <div class="overlay-caption">
                    <h3 class="uppercase"><strong>{{ $department->name }}</strong></h3>
                </div>
            </a>
        </div>
        @endforeach
    </div> <!-- END .Departments-section -->

        <div class="spacer-big"></div>

    <div class="fullwidth-section" style="background:#f5f6f7;">
        <div class="fullwidth-content wrapper">

            <h4 class="align-center"><strong>New Arraivel</strong></h4>
            <hr class="thick medium align-center colored">
            <div class="spacer-medium"></div>

            <div id="shop-grid-bestsellers" class="owl-carousel owl-spaced shop-container" data-margin="30" data-nav="false" data-items="4">
                @foreach( $arrivals as $arrival )
                    <div class="owl-item shop-item">
                        <div class="product-media">
                            <a href="{{url('gallery')}}" class="thumb-overlay">
                                <img src="{{asset('images')}}/{{ $arrival->image }}" alt="{{ $arrival->seo }}">
                            </a>
                            <div class="add-to-cart-overlay">
                                <a href="shop-single-simple.html" class="add_to_cart_button">Add to cart</a>
                            </div>
                        </div>

                        <div class="blog-desc align-center">
                            <div class="blog-headline">
                                {{--<h6 class="post-category uppercase">{{ $arrival->type }}</h6>--}}
                                <h6> <h5>Dimension:</h5>
                                    Height: {{ $arrival->height }}<br>
                                    Length: {{ $arrival->length }}<br>
                                    Width:  {{ $arrival->width }}</h6>
                                <h5 class="post-name"><a href="blog-single-custom1.html"><strong>{{ $arrival->name }}</strong></a></h5>
                                <div class="product-price">{{ $arrival->price }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                {{--
                <div class="owl-item shop-item">
                    <div class="product-media">
                        <a href="shop-single-simple.html" class="thumb-overlay">
                            <img src="{{asset('images')}}/{{ $arrival->image }}" alt="SEO IMG NAME" style="max-height: 400px; max-width: 600px">
                        </a>

                    </div>

                    <div class="product-desc align-center">
                        <h6 class="product-name uppercase">{{ $arrival->name }}</h6>
                        <div class="product-price">{{ $arrival->price }}</div>
                    </div>
                </div>
                @endforeach--}}

            </div> <!-- END .New-Arrivals -->

        </div>
    </div> <!-- END .fullwidth-section -->

    <div class="spacer-small"></div>

    <div class="fullwidth-section parallax-section" data-parallax-image="{{asset('/design/user/files/uploads/design.jpg')}}" style="min-height: 500px;"></div>

    <div class="spacer-small"></div>

    <div class="fullwidth-section parallax-section" data-parallax-image="{{url('')}}/design/user/files/uploads/1680x1050-dark.jpg" style="min-height: 500px;"></div>

    <div class="spacer-big"></div>

    <div  class="hero-auto">

        <div  class="wrapper align-center">
            <h4 class="align-center"><strong>Catgories</strong></h4>
            <hr class="thick medium align-center colored">
        </div> <!-- END #page-title -->
        <div class="spacer-small"></div>
        <div id="portfolio-grid" class="isotope-grid blog-container style-column-4 fitrows isotope-spaced">
            @foreach($categories as $category)
                <div class="isotope-item blog-item">
                    <div class="blog-media">
                        <a href="{{url('gallery')}}" class="thumb-overlay">
                            <img src="{{asset('images')}}/{{ $category->image }}" alt="{{ $category->seo }}">
                        </a>
                    </div>

                    <div class="blog-desc align-center">
                        <div class="blog-headline">
                            <h6 class="post-category uppercase">{{ $category->type }}</h6>
                            <h6> <h5>Dimension:</h5>
                                Height: {{ $category->height }}<br>
                                Length: {{ $category->length }}<br>
                                Width:  {{ $category->width }}</h6>
                            <h5 class="post-name"><a href="blog-single-custom1.html"><strong>{{ $category->name }}</strong></a></h5>
                            <h5 class="post-date"  style="color: green">{{ $category->price }} L.E</h5>
                        </div>
                        <ul class="blog-meta">
                            <p align="center"><a href="#" class="sr-button button-1 button-medium circled">Buy Now</a></p>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="spacer-big"></div>


    <div class="fullwidth-section fullheight">
        <div class="fullwidth-content wrapper">
            <h1><strong>Get in contact with us</strong></h1>
            <h2 class="subtitle-2">and discuss your next project</h2>
            <div class="spacer-big"></div>

            <a href="contact-us.html" class="sr-button button-1 button-big">Click Here to contact us</a>
        </div>
    </div> <!-- END .fullwidth-section -->


</section>
<!-- PAGEBODY -->
@include('capital.layouts.footer')