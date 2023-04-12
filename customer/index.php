
<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: ../index.php');
  exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snaphaven</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="gambar/icon Snaphaven.png" rel="icon"/>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Swiper -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  </head>
  
  <body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0" cz-shortcut-listen="true">
  <header id="header" class="header fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="gambar/Snaphaven.png">
      </a>          
        <nav id="navbar" class="navbar navbar-expand-lg">
          <ul class="nav justify-content-center">
            <li>
              <a href="#main">Home</a>
            </li>
            <li >
              <a href="#about">About</a>
            </li>
            <li >
              <a href="#service">Services</a>
            </li>
            <li >
              <a href="#pricing">Pricing</a>
            </li>   
            <li >
              <a href="#gallery">Gallery</a>
            </li>   
          </ul>   
        </nav>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="btn-login" href="?logout=true">Logout</a>
              </li>
            </ul>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>  
  </header>

  <section id="main" class="main d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up" class="aos-init aos-animate">Make Good Photo<br>Product Photography</h2>
          <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">Our product photography helps customers make informed purchasing decisions by showing them what they can expect to receive.</p>
          <div class="d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <a href="#pricing" class="btn-login">Get Photography</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="gambar/photo.svg" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>  
    </div>
  </section>

  <section id="about" class="about pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="gambar/about.svg" class="img-fluid" alt="">
          <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            Welcome to Snaphaven, your one-stop solution for professional product photography. Our team of experienced photographers is dedicated to helping businesses showcase their products in the best light possible.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <i class="bi bi-diagram-3"></i>
              <div>
                <h5>State-of-the-art</h5>
                <p>At Snaphaven, we use state-of-the-art equipment and techniques to create stunning product images that capture the essence of your brand.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
              <i class="bi bi-award-fill"></i>
              <div>
                <h5>Commitment to quality</h5>
                <p>Our commitment to quality doesn't end with the photography itself. We offer a range of post-production services to enhance and refine your product images, including retouching, color correction, and background removal.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
              <i class="bi bi-person-lines-fill"></i>
              <div>
                <h5>Providing exceptional customer service</h5>
                <p>We pride ourselves on providing exceptional customer service and delivering results that exceed our clients' expectations.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section id="service" class="services pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Services</h2>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-img">
              <img src="gambar/cake.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html" class="stretched-link">360-Degree Product Photography</a></h3>
            <p>This involves capturing multiple images of a product from different angles to create a 360-degree view of the product.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-img">
              <img src="gambar/coffe.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#2" class="stretched-link">Product Video Production</a></h3>
            <p>Video can be a powerful tool for marketing and advertising, and can help customers better understand the value of a product.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-img">
              <img src="gambar/food.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#3" class="stretched-link">Product Styling and Props</a></h3>
            <p>This service involves arranging and styling the product in a way that enhances its visual appeal and creates a desirable image.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <div class="card">
            <div class="card-img">
              <img src="gambar/airpods.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#4" class="stretched-link">Normal Photography</a></h3>
            <p>This involves capturing high-quality images of a product using specialized equipment, such as cameras, lighting, and backgrounds.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <div class="card">
            <div class="card-img">
              <img src="gambar/fashion.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#5" class="stretched-link">Lifestyle Photography</a></h3>
            <p>This service involves capturing images of a product in real-life settings, such as on models or in a home or outdoor environment. Lifestyle photography can help customers visualize how a product might look or function in their own lives.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
          <div class="card">
            <div class="card-img">
              <img src="gambar/shoes.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#6" class="stretched-link">Retouching and Editing</a></h3>
            <p>This service involves enhancing and refining product images using techniques such as color correction, background removal, and image manipulation.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="pricing" class="pricing pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header">
        <h2>Pricing</h2>
      </div>

      <div class="row gy-4">
        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Basic</h3>
            <h4><sup>$</sup>10<span> / Product</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Product Photography</li>
              <li><i class="bi bi-check"></i> Product Styling and Props</li>
              <li><i class="bi bi-check"></i> Retouching and Editing</li>
              <li class="na"><i class="bi bi-x"></i> <span>Lifestyle Photography</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Product Video Production</span></li>
            </ul>
            <a href="buy.php" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item featured">
            <h3>Advanced</h3>
            <h4><sup>$</sup>18<span> / Product</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Product Photography</li>
              <li><i class="bi bi-check"></i> Product Styling and Props</li>
              <li><i class="bi bi-check"></i> Retouching and Editing</li>
              <li><i class="bi bi-check"></i> Lifestyle Photography</li>
              <li class="na"><i class="bi bi-x"></i> <span>Product Video Production</span></li>
            </ul>
            <a href="buy.php" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing-item">
            <h3>Premium</h3>
            <h4><sup>$</sup>25<span> / Product</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Product Photography</li>
              <li><i class="bi bi-check"></i> Product Styling and Props</li>
              <li><i class="bi bi-check"></i> Retouching and Editing</li>
              <li><i class="bi bi-check"></i> Lifestyle Photography</li>
              <li><i class="bi bi-check"></i> Product Video Production</li>
            </ul>
            <a href="buy.php" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>
  </section>

<section id="gallery" class="gallery pt-0">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-header">
      <h2>Gallery</h2>
    </div>

  <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="gambar/gallery1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="gambar/gallery2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="gambar/gallery3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</section>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Snaphaven</span>
          </a>
          <p>Brand product photography involves capturing high-quality images of products that represent a company's brand identity. The product photos are typically used for marketing and advertising purposes.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#main">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="details.html#1">360-Degree Photography</a></li>
            <li><a href="details.html#2">Product Video Production</a></li>
            <li><a href="details.html#3">Product Styling and Props</a></li>
            <li><a href="details.html#4">Normal Photography</a></li>
            <li><a href="details.html#5">Lifestyle Photography</a></li>
            <li><a href="details.html#6">Retouching and Editing</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Wahid Hasyim Street <br>
            Samarinda, SA 535022<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +62 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        © Copyright <strong><span>Snaphaven</span></strong>. All Rights Reserved
      </div>
      <div class="credits">     
        Designed by <a href="https://bootstrapmade.com/">Rizq Saputra</a>
      </div>
    </div>

  </footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="js/main.js"></script>

  </body>
  </html>