 <!-- page banner section start here -->
 <style>
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
          height: 50vh !important;
        }
      }
  </style>

<!-- Background image -->
<div id="intro" class="bg-image vh-100 shadow-1-strong">
      <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
        <source class="h-100"
          src="https://mdbootstrap.com/img/video/Lines.mp4"
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
        <div class="container d-flex align-items-center justify-content-center h-100">
          <div class="text-white shadow-2-strong p-4 rounded">
          <h2 class="">Welcome to the <?php the_title(); ?> page</h2>
          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-light px-3 py-1 rounded-pill">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active text-success" aria-current="page"><?php the_title(); ?></li>
                  </ol>
                </nav>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->