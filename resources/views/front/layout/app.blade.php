<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Personal Portfolio Website</title>

  @include('front.layout.styles')

  <link rel="icon" type="image/png" href="{{ asset('dist_front/images/man.png') }}" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

</head>

<body>

  {{-- <div id="preloader">
    <div id="preloader_inner"></div>
  </div> --}}

  @include('front.layout.nav')

  @yield('main_content')

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo d-flex justify-content-center">
            <img src="{{ asset('dist_front/images/footer-logo.png') }}" alt="">
          </div>
          <div class="description">
            Cum an oratio fierent detraxit, per in novum aliquando. Vel ei aeque appellantur. Ne deserunt adipisci sed,
            sed ex veniam accusam, usu ut nonumy admodum recteque.
          </div>
          <div class="social">
            <ul>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="copyright">
            Copright 2022, DataShark. All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="" class="scrollup">
    <i class="fas fa-chevron-up"></i>
  </a>


  @include('front.layout.scripts')

</body>

</html>