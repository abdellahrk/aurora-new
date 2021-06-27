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

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 services-carousel pb-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle">Nationwide Service, Local Expertise</h2>
              <h3 class="heading__title">Offer The Latest Software And Solutions To Our customers! </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <?php 
                while(have_posts()) : the_post(); ?>
              <!-- service item #1 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-server"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title"><?php the_title(); ?></h4>
                <div class="service__content">
                  <p class="service__desc"><?php the_excerpt(); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <?php endwhile; ?>
              <!-- service item #2 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-cloud"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Cyber Security<br> Services</h4>
                <div class="service__content">
                  <p class="service__desc">Drive your business and manage risk with a global industry leader in
                    cybersecurity, cloud, and managed security services and extend your team with leading experts.</p>
                  <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <!-- service item #3 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-hosting"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Cloud Computing<br> Services</h4>
                <div class="service__content">
                  <p class="service__desc">Cloud computing is the on-demand availability of computer system
                    resources, especially data storage and computing power, without direct active management .
                  </p>
                  <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <!-- service item #4 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-technician"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">IT Consulting <br> Services</h4>
                <div class="service__content">
                  <p class="service__desc">Trying to solve all your IT challenges internally can become costly and a
                    major distraction, Leveraging knowledgeable IT consulting firms like ushelps your business.</p>
                  <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <!-- service item #5 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-programming"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Software Dev<br> Services</h4>
                <div class="service__content">
                  <p class="service__desc">With shorter product cycles, rapid innovation, and mergers contributing to
                    constant change, you are faced with making business decisions every day to advance your mission.
                  </p>
                  <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <!-- service item #6 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-programming"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Backup & Recovery<br> Services</h4>
                <div class="service__content">
                  <p class="service__desc">While you can’t predict unexpected events, we’ll ensure the right
                    precautions
                    are in place to minimize downtime and keep you moving in the right direction.</p>
                  <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <p class="text__link mt-20 mb-0">Working hard to earn our customers’ trust.
              <a href="industries.html" class="btn btn__secondary btn__link mx-1">
                <span>Explore All Services</span> <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div>
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->
<?php
get_footer();