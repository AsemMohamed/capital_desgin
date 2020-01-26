@include('capital.layouts.header')


<!-- HERO  -->
<section id="hero" class="hero-full text-light parallax-section" data-parallax-image="{{url('')}}/design/user/files/uploads/1680x1050-dark.jpg">

    <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2">Contact</h4>
        <hr class="zigzag mini colored">
        <h1><strong>How can we help you</strong></h1>
    </div> <!-- END #page-title -->

</section>
<!-- HERO -->


<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

    <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center text-light has-animation" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Adress</h5>
            <hr class="zigzag mini">
            <p>173 Elizabeth Street<br>67000 Sydney </p>
            <div class="spacer-medium"></div>
        </div>
        <div class="column one-third align-center text-light has-animation" data-delay="100" style="background:#000000;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Phone</h5>
            <hr class="zigzag mini">
            <p>+12 212-568-999+12<br>323-999-568</p>
            <div class="spacer-medium"></div>
        </div>
        <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Email</h5>
            <hr class="zigzag mini">
            <p>sayhello@sudo.com<br>appointment@sudo.com</p>
            <div class="spacer-medium"></div>
        </div>
    </div> <!-- END .column-section -->

    <div class="spacer-big"></div>

    <div class="wrapper-small">

        <div class="align-center">
            <hr class="zigzag medium">
            <div class="spacer-mini"></div>
            <h5 class="subtitle-2 colored">Get Social</h5>
            <ul class="socialmedia-widget style-circled size-small hover-slide-1">
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="dribbble"><a href="#"></a></li>
                <li class="behance"><a href="#"></a></li>
                <li class="instagram"><a href="#"></a></li>
            </ul>
            <div class="spacer-mini"></div>
            <hr class="zigzag medium">
        </div>

        <div class="spacer-medium"></div>

        <h3 class="align-center"><strong>Got a Question?</strong></h3>
        <h5 class="subtitle-2 align-center">Have a project you're interested in discussing with us?<br> Drop us a line below, we'd love to talk.</h5>


        <div class="spacer-medium"></div>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
        <form id="contact-form" class="checkform sendemail" action="{{url('contact-us/send')}}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="form-row">
                <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                <input type="text" name="name" id="name" class="name req" value="name" />
            </div>

            <div class="form-row">
                <label for="mobile">mobile <abbr title="required" class="required">*</abbr></label>
                <input type="text" name="mobile" id="mobile" class="name req" value="mobile" />
            </div>

            <div class="form-row">
                <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                <input type="text" name="email" id="email" class="email req" value="email" />
            </div>

            <div class="form-row">
                <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                <textarea name="message" id="message" value="message" class="message req" rows="15" cols="50"></textarea>
            </div>

            <div class="form-row form-note">
                <div class="alert-error">
                    <h5>Something went wrong</h5>
                    Please check your entries!
                </div>
            </div>

            <div class="form-row hidden">
                <input type="text" id="form-check" name="form-check" value="" class="form-check" />
            </div> <!-- Spam check field -->

            <div class="form-row">
                <input type="submit" name="submit" class="submit" value="Send Message" />
            </div>

            <input type="hidden" name="subject" value="Contact Subject Sudo html" />
            <input type="hidden" name="fields" value="name,email,message" />
        </form>

    </div> <!-- END .wrapper-small -->

    <div class="spacer-big"></div>
    <div class="row">
        <div class="col-md-12"  STYLE="margin-left: 130px;">
            <div class="mapouter" width="1400"><div class="gmap_canvas"><iframe width="1080" height="355" id="gmap_canvas" src="https://maps.google.com/maps?q=30.013673%2C%2031.287585&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:355px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:1080px;}</style></div>
        </div>
    </div>




</section>
<!-- PAGEBODY -->

@include('capital.layouts.footer')



