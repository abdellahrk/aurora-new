<?php 

/**
 * Front Template
 * 
 * @package aurora
 */

 get_header();
 query_posts(array(
    'post_type' => 'services'
 ));
?>

<?php the_content(); ?>

<!-- ======================
    Features Layout 4
    ========================= -->
    <section class="features-layout4 bg-overlay bg-overlay-primary bg-parallax pt-0 pb-50">
      <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__icon">
                <i class="icon-statistic"></i>
              </div>
              <h4 class="feature__title">Software Asset Management</h4>
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__icon">
                <i class="icon-software"></i>
              </div>
              <h4 class="feature__title">Software License Management</h4>
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__icon">
                <i class="icon-website"></i>
              </div>
              <h4 class="feature__title">Knowledge Base & Live Chat</h4>
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__icon">
                <i class="icon-management"></i>
              </div>
              <h4 class="feature__title">Privileged Access Management</h4>
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row mt-30">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <blockquote class="blockquote">
              <h4 class="blockquote__title">You are helping to lead the charge; we can help you build on your
                past successes and prepare for your great future.
              </h4>
              <span class="blockquote__author">John Peter, Founder</span>
            </blockquote>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="slick-carousel clients-light"
              data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/clients/1.png" alt="client">
                <img src="assets/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/2.png" alt="client">
                <img src="assets/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/3.png" alt="client">
                <img src="assets/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/4.png" alt="client">
                <img src="assets/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/5.png" alt="client">
                <img src="assets/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/6.png" alt="client">
                <img src="assets/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/7.png" alt="client">
                <img src="assets/images/clients/7.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
            <span class="blockquote__author">Our Trusted Clients</span>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 4 -->

<?php
get_footer();