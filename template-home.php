  <?php 
      //Template Name: Template - Homepage
      get_header() 
  
  
  ?>
    
  <!-- page banner design section starrt here -->
    <style>
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #intro {
            margin-top: -58.59px;
          }
        }
    </style>
    <!-- page banner design section end here -->

    <!-- page banner section start here -->
    <div id="intro" class="bg-image vh-100 shadow-1-strong">
        <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
          <source class="h-100" src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
        </video>
        <div class="mask"     style="
        background: linear-gradient(
          45deg,
          rgba(29, 236, 197, 0.7),
          rgba(91, 14, 214, 0.7) 100%
        );
      ">
          <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-white" style="font-family: 'Assistant', sans-serif;">
              <h1 class="mb-3">Learn Something New !</h1>
              <h5 class="mb-4">“If you are not willing to learn, no one can help you.<br> If you are determined to learn, no one can stop you.”—Zig Ziglar</h5>
              <a
                class="btn btn-outline-light btn-rounded btn-xl m-2"
                href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                role="button"
                rel="nofollow"
                target="_blank"
                >Get Started</a
              >
              <a
                class="btn btn-outline-light btn-rounded btn-xl m-2"
                href="http://localhost/lwsazon/contact/"
                role="button"
                >Contact Now</a
              >
            </div>
          </div>
        </div>
      </div>
    <!-- page banner section end here -->

    <!--Main layout-->
    <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
               <div class="col-md-8 gx-5 mb-4">
                    <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
                      <div class="carousel-indicators">
                        <button
                          type="button"
                          data-mdb-target="#carouselExampleCaptions"
                          data-mdb-slide-to="0"
                          class="active"
                          aria-current="true"
                          aria-label="Slide 1"
                        ></button>
                        <button
                          type="button"
                          data-mdb-target="#carouselExampleCaptions"
                          data-mdb-slide-to="1"
                          aria-label="Slide 2"
                        ></button>
                        <button
                          type="button"
                          data-mdb-target="#carouselExampleCaptions"
                          data-mdb-slide-to="2"
                          aria-label="Slide 3"
                        ></button>
                      </div>
                      <div class="carousel-inner">
                         <?php while(have_posts()) { 
                            
                            get_the_post();
                            $banner_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                         ?>
                        <div class="carousel-item active">
                          <img src="<?php echo $banner_image[0]; ?>" class="d-block w-100" alt="Wild Landscape"/>
                          <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo the_title(); ?></h5>
                            <p><?php the_excerpt(); ?></p>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                </div>

                <div class="col-md-4 gx-5 mb-4">
                  <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/023.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->

<!-- footer section start here -->
<?php get_footer() ?>
<!-- footer section end here -->