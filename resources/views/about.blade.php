@extends('include.navbar')


@section('content')
    <section class="About mt-5 mb-5  border-2 border-dark" id="About">
      <div class="container">
        <div class="row  align-content-center justify-content-center">
          <div class="col-12 text-center">
            <h1 class="h6">who we are</h1>

            <p class="fw-300 color1 ">
              We are an innovative company. We develop and <span class="typingClass">design </span>for
              <br />costumers around the world. Our clients are some of the most
              forward-looking companies in the world.
            </p>
          </div>
          <div class="col-12 d-flex">
            <a
              href="#"
              class="btn m-auto btn-outline-secondary rounded-0 justify-self-center"
              >Read more
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="Team" id="Team">
      <div>
        <div class="container">
          <div class="row text-center">
            <h2 class="c">Creative Team</h2>
            <h4>We are digital thinkers</h4>

            <div class=" col-md-6 col-lg-3 p-3">
                <div class="team1">
                <img src="img/team-1.jpg" alt="">
              <div class="team-content1  d-flex ">
              <div class="icons  ">
                    <ul class="navbar-nav   flex-row">
                    <li class="nav-item p-1 "><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="nav-item p-1 "><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                    <li class="nav-item p-1"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="info justify-content-start align-content-end fs-13px  ">
                    <h4>Luke Cage</h4>                 <span>Founder & CEO</span>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 p-3">
                <div class="team1">
                    <img src="img/team-2.jpg" alt="">
                  <div class="team-content1  d-flex ">
                   <div class="icons  ">
                        <ul class="navbar-nav   flex-row">
                            <li class="nav-item p-1  " ><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="nav-item p-1"><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                           <li class="nav-item p-1 "><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="info justify-content-start align-content-end fs-13px  ">
                        <h4>Jessica Jones</h4>
                        <span>Product Designer</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 p-3">
                <div class="team1">
                    <img src="img/team-3.jpg" alt="">
                  <div class="team-content1  d-flex ">
                  <div class="icons">
                        <ul class="navbar-nav   flex-row">
                            <li class="nav-item p-1  " ><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="nav-item p-1"><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                           <li class="nav-item p-1"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="info justify-content-start align-content-end fs-13px  ">
                        <h4>Matt Murdock</h4>
                        <span>Lead Developer</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 p-3">
                <div class="team1">
                    <img src="img/team-4.jpg" alt="">
                  <div class="team-content1 d-flex ">
                  <div class="icons">
                        <ul class="navbar-nav flex-row flex-">
                            <li class="nav-item p-1 " ><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="nav-item p-1  "><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                           <li class="nav-item p-1  "><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="info justify-content-start align-content-end fs-13px  ">
                        <h4>Claire Temple</h4>
                        <span>Sales Manager</span>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      </div>
    </section>
@endsection
