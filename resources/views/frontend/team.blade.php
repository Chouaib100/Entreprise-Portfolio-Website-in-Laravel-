<?php

use App\Models\Team;

$teams = Team::all();


?>
  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">


       @foreach($teams as $team)
        <div class="col-lg-6">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{asset('/photo_team/'.$team->photo)}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$team->name}}</h4>
              <span>{{$team->job}}</span>
              <p>{{$team->short_desc}}</p>
              <div class="social">
                <a href="{{$team->twitter}}"><i class="ri-twitter-fill"></i></a>
                <a href="{{$team->facebook}}"><i class="ri-facebook-fill"></i></a>
                <a href="{{$team->instagram}}"><i class="ri-instagram-fill"></i></a>
                <a href="{{$team->linkdlin}}"> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>
       @endforeach

      </div>

    </div>
  </section><!-- End Team Section -->
