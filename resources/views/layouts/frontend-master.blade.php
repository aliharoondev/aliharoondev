<!DOCTYPE html>
<html lang="en">
@include('frontend.partials.head')
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  @include('frontend.partials.header')

 <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('frontend.partials.hero')

 <!-- End Hero -->

 <!-- End #main -->
  @yield('content')
  <!-- ======= Footer ======= -->
  @include('frontend.partials.footer')

  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('frontend.partials.scripts')

</body>

</html>