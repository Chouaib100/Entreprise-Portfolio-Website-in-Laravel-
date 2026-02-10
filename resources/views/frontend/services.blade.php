<?php

use App\Models\Service;

$services = Service::all();


?>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

      @foreach($services as $service)

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="{{$service->icon}}"></i></div>
            <h4><a href="">{{$service->title}}</a></h4>
            <p>{{$service->short_desc}}</p>
          </div>

        </div>

     @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->
