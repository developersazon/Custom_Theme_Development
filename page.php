<?php get_header(); ?>
      
 <!-- page banner section start here -->
 <style>
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
          height: 50vh !important;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
  </style>

<!-- Background image -->
<div id="intro" class="bg-image vh-100 shadow-1-strong">
      <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
        <source class="h-100"
          src="https://mdbootstrap.com/img/video/animation-intro-min.mp4"
          type="video/mp4"
        />
      </video>
      <div class="mask" style="
            background: linear-gradient(
              45deg,
              rgba(29, 236, 197, 0.7),
              rgba(91, 14, 214, 0.7) 100%
            );
          ">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
            <h5 class="mb-4">Best & free guide of responsive web design</h5>
            <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button"
              rel="nofollow" target="_blank">Start tutorial</a>
            <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank"
              role="button">Download MDB UI KIT</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  
 <!-- page banner section end here -->

<?php get_footer(); ?>