<nav class="navbar navbar-expand-lg shadow-lg">
  <div class="container">

    <!-- Cart Icon on the Left Side for Small Screens -->
    <a class="cart-icon-mobile position-relative d-lg-none me-3" href="cart.php">
      <i class="fas fa-shopping-cart"></i>
      <span class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        23
      </span>
    </a>

    <a class="navbar-brand logo-container" href="index.php#hero">
      <img src="images/logoBanner/BPPA-white.png" alt="logo" class="img-fluid" style="width: 100%;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php#hero">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="membership.php#hero">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news-detail.php#news">News & Events</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="membership.php">Contact Us</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link  d-none" href="index.php" id="form-open">Login</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="membership.php" target="_blank" id="member-ship">Membership</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/auth.html">Login</a>
        </li>
      </ul>
      <!-- Cart Icon for Large Screens -->
      <ul class="navbar-nav d-none d-lg-block">
        <li class="nav-item">
          <a class="position-relative" href="cart.php">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              23
            </span>
          </a>
        </li>
      </ul>
    </div>

  </div>

</nav>