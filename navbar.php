<?php
// Navbar Component - Include this on all pages
?>

<!-- Top Bar -->
<div class="top-bar bg-light py-2 border-bottom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <small class="text-muted">
          <i class="fas fa-phone"></i> +91-XXXX-XXXXXX | 
          <i class="fas fa-envelope"></i> muraraigovt.poly@gmail.com
        </small>
      </div>
      <div class="col-md-6 text-right">
        <a href="#" class="text-muted mx-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-muted mx-2"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-muted mx-2"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark modern-navbar">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="image/index.jpeg" width="50" height="60" alt="Logo" class="mr-3">
      <div>
        <div style="font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px;">MURARAI</div>
        <div style="font-size: 1rem; font-weight: 700;">GOVERNMENT POLYTECHNIC</div>
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php"><i class="fas fa-info-circle"></i> About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-book"></i> Departments
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="coursesDropdown">
            <a class="dropdown-item" href="CST.php">
              <i class="fas fa-laptop-code"></i> CST - Computer Science & Technology
            </a>
            <a class="dropdown-item" href="ECE.php">
              <i class="fas fa-microchip"></i> ECE - Electronics & Communication
            </a>
            <a class="dropdown-item" href="SE.php">
              <i class="fas fa-map"></i> SE - Survey Engineering
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php"><i class="fas fa-images"></i> Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact-Us/SourceCode/ContactUs/index.php"><i class="fas fa-envelope"></i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-login" href="Login-System-php/index.php">
            <i class="fas fa-sign-in-alt"></i> Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
