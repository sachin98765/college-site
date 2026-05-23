<!DOCTYPE html>
<html lang="en">

<head>
  <title>MURARAI GOVERNMENT POLYTECHNIC | Quality Technical Education</title>
  <?php include 'head.php'; ?>
</head>

<body>

  <!-- Include Navbar on all pages -->
  <?php include 'navbar.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Murarai Government Polytechnic</h1>
      <p>Excellence in Technical Education • Empowering Future Engineers</p>
      <div class="mt-4">
        <a href="About.php" class="btn btn-light mr-3">Learn More</a>
        <a href="Contact-Us/SourceCode/ContactUs/index.php" class="btn btn-light">Get In Touch</a>
      </div>
    </div>
  </section>

  <!-- Carousel Section -->
  <section class="section-padding-sm">
    <div class="container">
      <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#galleryCarousel" data-slide-to="1"></li>
          <li data-target="#galleryCarousel" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/3.jpg" alt="Campus" width="100%" height="500">
          </div>
          <div class="carousel-item">
            <img src="image/1.jpg" alt="Academics" width="100%" height="500">
          </div>
          <div class="carousel-item">
            <img src="image/2.jpg" alt="Events" width="100%" height="500">
          </div>
        </div>
        <a class="carousel-control-prev" href="#galleryCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#galleryCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </section>

  <!-- Key Features Section -->
  <section class="section-padding bg-light-blue">
    <div class="container">
      <div class="section-heading">
        <h2>Why Choose Us</h2>
        <p>Comprehensive technical education with industry-focused curriculum and experienced faculty</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <i class="fas fa-book-reader"></i>
            <h4>Expert Faculty</h4>
            <p>Highly qualified and experienced instructors dedicated to student success</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <i class="fas fa-laptop-code"></i>
            <h4>Modern Labs</h4>
            <p>State-of-the-art laboratories equipped with latest technology</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <i class="fas fa-handshake"></i>
            <h4>Industry Connect</h4>
            <p>Strong partnerships with leading companies for internships and placements</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <i class="fas fa-graduation-cap"></i>
            <h4>Placements</h4>
            <p>Excellent placement record with opportunities in top organizations</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments Section -->
  <section class="section-padding">
    <div class="container">
      <div class="section-heading">
        <h2>Our Departments</h2>
        <p>Choose from our diverse range of technical programs</p>
      </div>
      <div class="row">
        <!-- CST Department -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="dept-card">
            <img src="image/CST/computer.jpeg" alt="CST" class="dept-card-img">
            <div class="dept-card-body">
              <h5><i class="fas fa-laptop-code"></i> Computer Science & Technology</h5>
              <p>Comprehensive program covering programming, web development, databases, and modern software engineering practices. Prepare for careers in IT industry.</p>
              <a href="CST.php" class="btn">View Details</a>
            </div>
          </div>
        </div>

        <!-- ECE Department -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="dept-card">
            <img src="image/ECE/Electronic.jpeg" alt="ECE" class="dept-card-img">
            <div class="dept-card-body">
              <h5><i class="fas fa-microchip"></i> Electronics & Communication</h5>
              <p>Advanced curriculum in electronics, circuit design, telecommunications, and embedded systems. Build expertise in modern communication technologies.</p>
              <a href="ECE.php" class="btn">View Details</a>
            </div>
          </div>
        </div>

        <!-- SE Department -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="dept-card">
            <img src="image/SE/servey .jpeg" alt="SE" class="dept-card-img">
            <div class="dept-card-body">
              <h5><i class="fas fa-map"></i> Survey Engineering</h5>
              <p>Professional training in surveying, mapping, GIS, and civil engineering. Master the tools and techniques for modern survey practices.</p>
              <a href="SE.php" class="btn">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="section-padding bg-light-blue">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
          <img src="image/collage.jpeg" alt="College" class="img-fluid rounded-lg shadow-md">
        </div>
        <div class="col-lg-7 col-md-6">
          <h2 class="text-primary mb-3">About Murarai Government Polytechnic</h2>
          <p class="lead mb-3">We are committed to providing quality technical education that prepares students for successful careers in the engineering and technology sectors.</p>
          <p>Our institution is recognized for its academic excellence, industry partnerships, and student achievements. With modern infrastructure and dedicated faculty, we ensure comprehensive learning experiences that bridge theory and practice.</p>
          <ul class="mt-4">
            <li><i class="fas fa-check text-accent"></i> <strong>3 Departments</strong> - Diverse technical programs</li>
            <li><i class="fas fa-check text-accent"></i> <strong>Expert Faculty</strong> - Highly qualified instructors</li>
            <li><i class="fas fa-check text-accent"></i> <strong>Industry Partnerships</strong> - Strong corporate connections</li>
            <li><i class="fas fa-check text-accent"></i> <strong>Excellent Placements</strong> - High success rate</li>
          </ul>
          <a href="About.php" class="btn btn-primary mt-4">Learn More About Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="section-padding">
    <div class="container">
      <div class="section-heading">
        <h2>Photo Gallery</h2>
        <p>Explore campus life and academic activities</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="position-relative overflow-hidden rounded-lg shadow-md" style="height: 250px;">
            <img src="image/7.jpg" alt="Gallery" class="img-fluid w-100 h-100" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="position-relative overflow-hidden rounded-lg shadow-md" style="height: 250px;">
            <img src="image/9.jpg" alt="Gallery" class="img-fluid w-100 h-100" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="position-relative overflow-hidden rounded-lg shadow-md" style="height: 250px;">
            <img src="image/CST/6.jpeg" alt="Gallery" class="img-fluid w-100 h-100" style="object-fit: cover;">
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="gallery.php" class="btn btn-primary btn-lg">View Full Gallery</a>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section">
    <div class="container">
      <h3>Ready to Start Your Journey?</h3>
      <p>Join thousands of successful graduates from Murarai Government Polytechnic</p>
      <a href="Contact-Us/SourceCode/ContactUs/index.php" class="btn">Contact Us Today</a>
    </div>
  </section>

  <!-- Include Footer on all pages -->
  <?php include 'footer.php'; ?>

  <!-- Include Scripts on all pages -->
  <?php include 'scripts.php'; ?>

  <!-- Additional Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="index.js/index.js"></script>

</body>

</html>
