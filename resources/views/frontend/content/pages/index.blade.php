
@extends('layouts.frontend-master')
    @section('content')
 <main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
    @foreach($abouts as $about)
      <div class="col-lg-4" data-aos="fade-right">
        <img src="{{ url('storage/' . $about->image) }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>{{$about->title}}</h3>
        <p class="fst-italic">
        {{$about->short_discription}}
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about->birth_date }}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->website_url}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->address}}</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age() }}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$about->freelance}}</span></li>
            </ul>
          </div>
        </div>
        <p>
        {{$about->detail}}
         </p>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
  <div class="container">

    <div class="section-title">
      <h2>Facts</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row no-gutters">
    @foreach($facts as $fact)

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
        <div class="count-box">
          <i class="bi {{$fact->icon}}"></i>
          <span data-purecounter-start="0" data-purecounter-end="111" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>{{$fact->title}}</strong> {{$fact->detail}}</p>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Skills</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row skills-content">


      
      @foreach($skills as $skill)
        @if($loop->index % 2 == 1)
        <div class="col-lg-6" data-aos="fade-up">
          <div class="progress">
            <span class="skill">{{$skill->title}} <i class="val">{{$skill->percentage}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        @endif
      
      
      
      @if($loop->index % 2 == 0)
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="progress">
              <span class="skill">{{$skill->title}} <i class="val">{{$skill->percentage}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>

  </div>
</section><!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Sumary</h3>
        <div class="resume-item pb-0">
          <h4>{{$user->title}}</h4>
          <p><em>{{$user->address}}</em></p>
          <ul>
            <li>{{$user->sumary}}</li>
            <li>{{$user->phone}}</li>
            <li>{{$user->email}}</li>
          </ul>
        </div>

        <h3 class="resume-title">Education</h3>
        @foreach($educations as $edu)
        <div class="resume-item">
          <h4>{{$edu->title}}</h4>
          <h5>{{$edu->session}}</h5>
          <p><em>{{$edu->institude}}</em></p>
          <p>{{$edu->detail}}</p>
        </div>
        @endforeach
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Professional Experience</h3>
        @foreach($experiences as $experience)
          <div class="resume-item">
            <h4>{{$experience->title}}</h4>
            <h5>{{$experience->start_date}} - {{$experience->end_date}}</h5>
            <p><em>{{$experience->company_name}}, {{$experience->company_address}} </em></p>
            <ul>
              <li>{{$experience->detail}}</li>
            </ul>
          </div>
          @endforeach
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".app">App</li>
          <li data-filter=".ios">Ios</li>
          <li data-filter=".web">Web</li>
          <li data-filter=".graphic">Graphic</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
    @foreach($portfolios as $portfolio)
      <div class="col-lg-4 col-md-6 portfolio-item {{$portfolio->category}}">
        <div class="portfolio-wrap">
          <img src="{{ url('storage/' . $portfolio->image) }}" width="400" height="400" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ url('storage/' . $portfolio->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio->title}}"><i class="bx bx-plus"></i></a>
            <a href="{{route('portfolio-detail',$portfolio->id)}}" width="400" height="400" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
     @foreach($services as $service)
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
          <div class="icon"><i class="bi {{$service->icon}}"></i></div>
          <h4 class="title"><a href="">{{$service->title}}</a></h4>
          <p class="description">{{$service->detail}}</p>
        </div>
      @endforeach
    
    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
      @foreach($testimonials as $testimonial)
        <div class="swiper-slide">
          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$testimonial->testimonial_text}}             
               <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ url('storage/' . $testimonial->image) }}" class="testimonial-img" alt="">
            <h3>{{$testimonial->name}}</h3>
            <h4>{{$testimonial->title}}</h4>
          </div>
        </div><!-- End testimonial item -->
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row" data-aos="fade-in">

    <div class="col-lg-5 d-flex align-items-stretch">
            @foreach($contact as $contact)
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>{{$contact->address}}</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{$contact->email}}</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>{{$contact->phone}}</p>
                </div>
                <iframe src="{{$contact->location}}"></iframe>
             </div>
             @endforeach
            
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Phone</label>
              <input type="text" class="form-control" name="phone" id="phone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main>

@endsection
