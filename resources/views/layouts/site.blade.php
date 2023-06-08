<!doctype html>
<html lang="en">

@include('partials._head')

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQJML98" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('partials._header')
    @yield('content')
    @if (request()->route()->getName() != 'properties.list')
        @include('partials._footer')
    @endif
    <div class="modal fade" id="pxp-signin-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSigninModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="pxpSigninModal">Welcome back!</h5>
                    <form class="mt-4">
                        <div class="form-group">
                            <label for="pxp-signin-email">Email</label>
                            <input type="text" class="form-control" id="pxp-signin-email"
                                placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <label for="pxp-signin-pass">Password</label>
                            <input type="password" class="form-control" id="pxp-signin-pass"
                                placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
                        </div>
                        <div class="form-group mt-4 text-center pxp-modal-small">
                            <a href="#" class="pxp-modal-link">Forgot password</a>
                        </div>
                        <div class="text-center pxp-modal-small">
                            New to Rochman Properties? <a href="javascript:void(0);"
                                class="pxp-modal-link pxp-signup-trigger">Create an account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to  top Start -->
    {{-- <div class="backto-top" onclick="topFunction()" id="myBtn">
         <div>
            <i class="text-white fa fa-arrow-up"></i>
         </div>
      </div> --}}

    <a href="https://api.whatsapp.com/send?phone=254707111777&text=Hey Rochman! I would like to have a chat concerning one of your properties. Kindly reach out. Thank you"
        target="_blank" class="backto-top-right" id="myBtn">
        <div>
            <img src="/assets/images/whatsapp.png" alt="">
        </div>
    </a>
    <button data-toggle="modal" data-target="#bookingModal" class="backto-top-left" id="myBtn">
        <div>
            <img src="/assets/images/chat.png" alt="">
        </div>
    </button>

    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">Book a Viewing</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body bg-grey">
                            <h3 class="widget-subtitle">Book a Viewing</h3>
                            <p>For more information and free viewing, submit your contact details below.</p>
                            <form class="contact-box rt-contact-form" method="POST"
                                action="http://localhost:8000/property/view/inquiry">
                                <input type="hidden" value="6" name="property_id" required="">
                                <input type="hidden" value="5 Bedroom Maisonette in Thome Estate Viewing inquiry"
                                    name="subject" required="">
                                <input type="hidden" name="_token" value="jloulScLD55yS0hLxTjcillBfQeqwFPf3lIOOtbd">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="">Your Names <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="names" placeholder="Names"
                                            required="">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="">Your Phone number<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="phone_number"
                                            placeholder="Phone number" required="">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="">Your Email </label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Email address">
                                    </div>





                                    <div class="form-group col-lg-12">
                                        <label for="">Message </label>
                                        <textarea name="message" class="form-control" cols="30" rows="4"
                                            placeholder="I'm interested in Land/Apartments.." data-gramm="false" wt-ignore-input="true"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <div class="advanced-button">
                                            <button type="submit" class="btn btn-success">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>




    <!-- Back to top end -->
    @include('partials._javascripts')
</body>

</html>
