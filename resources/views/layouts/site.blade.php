<!doctype html>
<html lang="en">
  
   @include('partials._head')
   <body>
      @include('partials._header')
      @yield('content')
      @if(request()->route()->getName() != 'properties.list')
      @include('partials._footer')
      @endif
      <div class="modal fade" id="pxp-signin-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSigninModal" aria-hidden="true">
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
                              <input type="text" class="form-control" id="pxp-signin-email" placeholder="Enter your email address">
                           </div>
                           <div class="form-group">
                              <label for="pxp-signin-pass">Password</label>
                              <input type="password" class="form-control" id="pxp-signin-pass" placeholder="Enter your password">
                           </div>
                           <div class="form-group">
                              <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
                           </div>
                           <div class="form-group mt-4 text-center pxp-modal-small">
                              <a href="#" class="pxp-modal-link">Forgot password</a>
                           </div>
                           <div class="text-center pxp-modal-small">
                              New to Rochman Properties? <a href="javascript:void(0);" class="pxp-modal-link pxp-signup-trigger">Create an account</a>
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
      
      <a href="https://api.whatsapp.com/send?phone=254707111777&text=Hey Rochman! I would like to have a chat concerning one of your properties. Kindly reach out. Thank you" target="_blank" class="backto-top" id="myBtn">
         <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" id="mainIconPathAttribute" fill="green"></path> </svg>
         </div>
      </a>
      
      
      <!-- Back to top end -->
      @include('partials._javascripts')
   </body>
</html>
