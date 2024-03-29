<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('blogname') ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?> > 
    <?php wp_body_open(); ?>
  <div class="wrapper">
      <!--
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div> /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Main</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="why-us.html" class="nav__item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="leadership-team.html" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="awards.html" class="nav__item-link">Award & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="careers.html" class="nav__item-link">Careers</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="it-solutions.html" class="nav__item-link dropdown-menu-title">IT Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT
                              Management</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Cyber
                              Security</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Cloud
                              Computing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT
                              Consulting</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Software
                              Dev</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT Support</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Industries</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Education,
                              Non-Profit</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Accounting,
                              Finance</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Government &
                              Public</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">Energy
                              &
                              Utilities</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">Legal,
                              Law
                              Firms</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Manufacturing</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Case Studies</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="case-studies-grid.html" class="nav__item-link">Case Studies Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-modern.html" class="nav__item-link">Case Studies Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-classic.html" class="nav__item-link">Case Studies Classic</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-single.html" class="nav__item-link">Single Case Study</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Our Blog</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="coming-soon.html" class="nav__item-link">Coming Soon</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="404.html" class="nav__item-link">404 Page</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link  open-register-popup">Register</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link  open-login-popup">Login</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-flex align-items-center">
            <a href="#" class="action__btn action__btn-search ml-30"><i class="icon-search"></i></a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->