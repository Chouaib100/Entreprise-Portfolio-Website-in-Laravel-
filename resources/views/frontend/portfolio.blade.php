<?php

use App\Models\Portfolio;

$portfolios = Portfolio::all();


?>
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


         @foreach($portfolios as $portfolio)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="{{asset('/photo_project/'.$portfolio->photo)}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$portfolio->title}}</h4>
            <p>{{$portfolio->short_desc}}</p>
            <a href="{{asset('/photo_project/'.$portfolio->photo)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="{{$portfolio->link}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

       @endforeach


      </div>

    </div>
  </section><!-- End Portfolio Section -->
