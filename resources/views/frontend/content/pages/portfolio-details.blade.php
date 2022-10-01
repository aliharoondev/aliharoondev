
@extends('layouts.frontend-master')
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <ol>
            <li><a href="{{route('landing')}}">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ url('storage/' . $portfolioDetail->image) }}"  alt="">
                </div>

                  <div class="swiper-slide">
                      <img src="{{ url('storage/' . $portfolioDetail->image2) }}" alt="">
                  </div>

                  <div class="swiper-slide">
                      <img src="{{ url('storage/' . $portfolioDetail->image) }}"  alt="">
                  </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{$portfolioDetail->category}}</li>
                <li><strong>Client</strong>: {{$portfolioDetail->client}}</li>
                <li><strong>Project date</strong>: {{$portfolioDetail->project_date}}</li>
                <li><strong>Project URL</strong>: <a href="{{$portfolioDetail->project_url}}">{{$portfolioDetail->project_url}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                  {{$portfolioDetail->detail}}
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>
      <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection
