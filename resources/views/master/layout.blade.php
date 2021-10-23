<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>QPOffice - @yield('title') </title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-icons.css'); }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('swiped/dist/swiped.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css'); }}">
    <link href="{{ URL::asset('css/aos.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('css/all.css'); }} " rel="stylesheet"> <!--load all styles -->
    <link href="{{ URL::asset('css/style.css'); }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/logo.png'); }}">
    @yield('style')

    </head>
    <body  @if (Config::get('app.locale') == 'ar') 
    style="direction: rtl;"
    @endif
    >


  <!-- NAVBAR SECTION -->
  <nav class="navbar navbar-expand-lg bg-success">
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome', app()->getLocale()) }}">
                    <img src="https://qp.sa/wp-content/uploads/2021/05/Hnet.com-image.png" width="90%" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item {{ Route::is('jobs') ? 'active' : '' }}">
                            <a class="nav-link custom-link" href="{{ route('jobs', app()->getLocale()) }}">{{__('translate.Jobs')}}</a>
                        </li>
                        <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                            <a class="nav-link custom-link " href="{{ route('contact', app()->getLocale()) }}">{{__('translate.ContactUs')}}</a>
                        </li>

                        <li class="nav-item {{ Route::is('candidate-listing') ? 'active' : '' }}">
                            <a class="nav-link custom-link" href="{{ route('candidate-listing', app()->getLocale()) }}">{{__('translate.JobApplicants')}}</a>
                        </li>

                        <li class="nav-item {{ Route::is('faqs') ? 'active' : '' }}">
                            <a class="nav-link custom-link" href="{{ route('faqs', app()->getLocale()) }}">{{__('translate.FAQS')}}</a>
                        </li>

                        <li class="nav-item {{ Route::is('terms') ? 'active' : '' }}">
                            <a class="nav-link custom-link" href="{{ route('terms', app()->getLocale()) }}">{{__('translate.Terms')}}</a>
                        </li>

                        <li class="nav-item {{ Route::is('privacy') ? 'active' : '' }}">
                            <a class="nav-link custom-link" href="{{ route('privacy', app()->getLocale()) }}">{{__('translate.Privacy')}}</a>
                        </li>

                        @if (Config::get('app.locale') == 'en')
                        <li class="nav-item">
                            <a class="nav-link custom-link" href="{{ route(Route::currentRouteName(), 'ar') }}">العربية</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link custom-link" href="{{ route(Route::currentRouteName(), 'en') }}">English</a>
                        </li> 
                        @endif
                       


                        @if(isset(Auth::user()->email))
                            <div class="alert alert-success success-block row">
                                <div class="col-8">
                                    <strong>{{ Auth::user()->email }}</strong>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('logout', app()->getLocale()) }}">Logout</a>
                                </div>
                            </div>
                            
                         
                        @else
                            <li class="nav-item" 
                            @if (Config::get('app.locale') == 'en') 
                            style="margin-left: 120px;"
                            @else
                            style="margin-right: 120px;"
                            @endif
                            >
                                <a id="loginButton" type="button" data-toggle="modal" data-target="#loginModal" class="btn btn-primary ml-2 mr-2">{{__('translate.SignIn')}}</a>
                            </li>

                            <li class="nav-item">
                                <a id="registerButton" type="button" data-toggle="modal" data-target="#registerModal" class="btn btn-secondary ml-2 mr-2">{{__('translate.Register')}}</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link custom-link" href="#">
                                <i class="far fa-bell"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR SECTION END -->
  
          <!-- Login Modal -->
          <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <a  id="closeModalLogin" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </a>
                </div>
                <div class="modal-body">


                    @if($message = Session::get('error'))
                        <div class="alert alert-danger alert-block d-flex justify-content-between">
                            <strong>{{ $message }}</strong>
                            <a type="button" class="close" data-dismiss="alert">x</a>
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>  {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                  <form method="post" action="{{ route('checkLogin', app()->getLocale()) }}">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label>Enter Email</label>
                          <input type="email" name="email" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" class="form-control" />
                    </div>

                    

                  

                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login" />
                    </div>
                </div>

            </form>

              </div>
            </div>
          </div>
          <!-- Login Modal End -->

           <!-- Register Modal -->
           <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">Register</h5>
                  <a  id="closeModalRegister" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </a>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" id="cancelModalRegister" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Register Modal End -->




        @yield('content')







        <!-- TO TOP BUTTON -->
        <button onclick="topFunction()" class="btn-primary" id="topBtn">
            <i class="bi bi-caret-up"></i>
        </button>
        <!-- TO TOP BUTTON END -->

        <!-- Watsapp Start -->
        <div id="whatsappBtn" style="display: none;">
            <a href="https://api.whatsapp.com/send?phone=0966504757865&text=&source=&data=" class="whatsApp"
                target="_blank">
                <span><i style="margin-top: 10px;" class="bi bi-whatsapp"></i> </span></a>
        </div>
        <!-- Watsapp End --> 

     <!-- FOOTER -->
     <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="d-flex justify-content-end col-12">
                    <p class="copyright-text mb-0">{{__('translate.AllRightsReserved')}}
                        <a href="" style="color: #37a000" target="_parent">{{__('translate.Alraedah')}}</a>
                    </p>

                </div>

            </div>
            </section>
    </footer>
    <!-- FOOTER END -->

      <!-- JAVASCRIPT FILES -->
      <script src="{{ URL::asset('js/jquery.min.js'); }}"></script>
      <script src="{{ URL::asset('js/bootstrap.bundle.min.js'); }}"></script>
      <script src="{{ URL::asset('js/jquery.sticky.js'); }}"></script>
      <script src="{{ URL::asset('js/aos.js'); }}"></script>
      <script src="{{ URL::asset('js/jquery.magnific-popup.min.js'); }}"></script>
      <script src="{{ URL::asset('js/magnific-popup-options.js'); }}"></script>
      <script defer src="{{ URL::asset('js/all.js'); }}"></script>
      <script src="{{ URL::asset('js/custom.js'); }}"></script>
      @yield('script')

      <!-- TOP BUTTON SCRIPT -->
      <script>
          //Get the button
          var mybutton = document.getElementById("topBtn");
          //Get the Whatsapp button
          var whatsappButton = document.getElementById("whatsappBtn");
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () { scrollFunction() };
          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  mybutton.style.display = "block";
                  whatsappButton.style.display = "block";
              } else {
                  mybutton.style.display = "none";
                  whatsappButton.style.display = "none";
              }
          }
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- TOP BUTTON SCRIPT END -->

      <!-- Login MODAL SCRIPT -->
      <script>
          $(document).ready(function () {
              $('#loginButton').click(function () {
                  $('#loginModal').modal('toggle');
              });
              $('#closeModalLogin').click(function () {
                  $('#loginModal').modal('hide');
              });
              $('#cancelModalLogin').click(function () {
                  $('#loginModal').modal('hide');
              });
          });
      </script>
      <!-- Login MODAL SCRIPT END -->

      <!-- Register MODAL SCRIPT -->
      <script>
        $(document).ready(function () {
            $('#registerButton').click(function () {
                $('#registerModal').modal('toggle');
            });
            $('#closeModalRegister').click(function () {
                $('#registerModal').modal('hide');
            });
            $('#cancelModalRegister').click(function () {
                $('#registerModal').modal('hide');
            });
        });
    </script>
    <!-- Register MODAL SCRIPT END -->

  
      <!-- TEAM SCRIPT -->
      {{-- <script>
          $(document).ready(function () {
              $('#Myimg').click(function () {
                  $('#Mymodal').modal('show')
              });
              $('#closeModal').click(function () {
                  $('#Mymodal').modal('hide')
              });
          });
      </script> --}}
    <!-- TEAM SCRIPT END -->      
         
    </body>
</html>
