<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Misplaced</title>

    @include('Layout.styles')
    @yield('style')

</head>
<body>

    <header>
        <div class="header-area  shadow">
          <div class="main-header">
            <div class="header-bottom header-sticky">
              <div class="container">
                <div
                  class="d-flex align-items-center justify-content-between flex-wrap position-relative"
                >
                  <div class="left-side d-flex align-items-center">
                    <div class="logo">
                      <a href="/"
                        ><h2 class="text-primary"><span class="text-secondary">Mis</span>placed</h2></a>
                    </div>

                    <div class="main-menu d-none d-lg-block">
                      <nav>
                        <ul id="navigation">
                          <li><a href="/">Home</a></li>
                          <li><a href="#about">About</a></li>

                          <li><a href="#contact">Contact</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  <div class="header-right-btn f-right ml-15">

                    @if (Auth::User())
                    <div class="dropdown">
                        <div class="header-profile">

                                <button class="btn py-2 text-white dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <iconify-icon icon="bi:person-circle"></iconify-icon>      {{ Auth::User()->first_name }}
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                  <li><a class="dropdown-item" href="{{url('profile_settings')}}">Settings</a></li>
                                  <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                                </ul>
                              </div>
                        </div>


                    @else

                    <a href="/login" class="btn_1 border-primary header-btn"
                      >Login </a>

                    @endif
                  </div>

                  <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main>
    @yield('content')
      </main>

    <footer>
        <div class="footer-wrapper">


          <div class="footer-bottom-area">
            <div class="container">
              <div class="footer-border">
                <div class="row">
                  <div class="col-xl-12">
                    <div
                      class="footer-copy-right d-flex justify-content-between flex-wrap"
                    >
                      <p>
                        Copyright &copy;
                        <script>
                          document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Misplaced

                      </p>

                      <div class="footer-social">
                        <a href="#"
                          ><i class="fab fa-facebook"></i
                        ></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
</body>
@include('Layout.scripts')
@yield('script')
</html>