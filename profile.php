<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BPPA</title>
</head>
<link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
  rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/profile.css" />

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav
      class="navbar navbar-top navbar-expand-md navbar-dark"
      id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a
          class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
          href="index.php"
          target="_blank">
          <img src="images/logoBanner/BPPA-white.png" width="200px" alt="logo">
        </a>

        <!-- Form -->
        <form
          class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text" />
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a
              class="nav-link pr-0"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img
                    alt="Image placeholder"
                    src="images/people/dp2.png" />
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm font-weight-bold">Ayesha Khalid</span>
                </div>
              </div>
            </a>
            <div
              class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div
      class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
      style="
          min-height: 600px;
          background-image: url(https://raw.githubusercontent.com/creativetimofficial/argon-dashboard/gh-pages/assets-old/img/theme/profile-cover.jpg);
          background-size: cover;
          background-position: center top;
        ">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Ayesha</h1>
            <p class="text-white mt-0 mb-5">
              This is your profile page. Here, you can view and update your
              personal information, manage your account settings, and track
              your activity within the community. Keep your details up-to-date
              to ensure you stay connected and informed about the latest
              events and opportunities. You can also review your membership
              status, update your contact information, and customize your
              preferences for notifications and communications. Make the most
              of your profile to enhance your experience within our network
            </p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img
                      src="images/people/dp2.png"
                      class="rounded-circle" />
                  </a>
                </div>
              </div>
            </div>
            <div
              class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div
                    class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Ayesha Webnet<span class="font-weight-light">, 35</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Karachi, Pakistan
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Psychiatrist -
                  Health Care
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer
                  Science
                </div>
                <hr class="my-4" />
                <p>
                  Dedicated to advancing mental health and well-being, you
                  bring your expertise to the forefront of healthcare. Your
                  commitment to helping others and improving mental health
                  care is at the core of your professional journey
                </p>
                <!-- <a href="#">Show more</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <!-- tab panel -->
          <div class="tab-panel shadow bg-secondary">
            <div class="tab-panel__header ">
              <ul>
                <li class="tab-active">
                  <a href="#tab1">My Account</a>
                </li>
                <li>
                  <a href="#tab2">Education</a>
                </li>
                <li>
                  <a href="#tab3">Certification</a>
                </li>
              </ul>
              <div class="tab-panel__arrow"></div>
            </div>
            <div class="tab-panel__content">
              <div class="tab-panel__content-area">
                <div
                  id="tab1"
                  class="tab-panel__item tab-panel__item--active">
                  <div class="tab-panel__item__content">
                    <!-- content 1 -->
                    <div class="card bg-secondary ">
                      <!-- <div class="card-header bg-white border-0">
                          <div class="row align-items-center">
                            <div class="col-8">
                              <h3 class="mb-0">My account</h3>
                            </div>
                            <div class="col-4 text-right">
                              <a href="#!" class="btn btn-sm btn-primary"
                                >Settings</a
                              >
                            </div>
                          </div>
                        </div> -->
                      <div class="card-body">
                        <form>
                          <h6 class="heading-small text-muted mb-4">
                            User information
                          </h6>
                          <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-username">Professional Category</label>
                                    <!-- <input type="text" class="form-control" placeholder="Type your title in Placeholder"> -->
                                  <input
                                    type="text"
                                    id="input-username"
                                    class="form-control "
                                    placeholder="Username"
                                    value="Psychiatrist" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label
                                    class="form-control-label"
                                    for="input-email">Email address</label>
                                  <input
                                    disabled
                                    type="email"
                                    id="input-email"
                                    class="form-control "
                                    placeholder="jesse@example.com" />
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-first-name">First name</label>
                                  <input
                                    type="text"
                                    id="input-first-name"
                                    class="form-control "
                                    placeholder="First name"
                                    value="Lucky" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-last-name">Last name</label>
                                  <input
                                    type="text"
                                    id="input-last-name"
                                    class="form-control "
                                    placeholder="Last name"
                                    value="Jesse" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="my-4" />
                          <!-- Address -->
                          <h6 class="heading-small text-muted mb-4">
                            Contact information
                          </h6>
                          <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-xl-8">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-address">Address</label>
                                  <input
                                    id="input-address"
                                    class="form-control "
                                    placeholder="Home Address"
                                    value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                    type="text" />
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-address">Phone no</label>
                                  <input
                                    id="input-number"
                                    class="form-control "
                                    placeholder="Contact Number"
                                    value="922347834234"
                                    type="number"
                                    disabled />
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-city">City</label>
                                  <input
                                    type="text"
                                    id="input-city"
                                    class="form-control "
                                    placeholder="City"
                                    value="New York"
                                    disabled />
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group focused">
                                  <label
                                    class="form-control-label"
                                    for="input-country">Country</label>
                                  <input
                                    type="text"
                                    id="input-country"
                                    class="form-control "
                                    placeholder="Country"
                                    value="United States"
                                    disabled />
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label
                                    class="form-control-label"
                                    for="input-country">Postal code</label>
                                  <input
                                    type="number"
                                    id="input-postal-code"
                                    class="form-control "
                                    placeholder="Postal code"
                                    disabled />
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="my-4" />
                          <!-- Description -->
                          <h6 class="heading-small text-muted mb-4">
                            About me
                          </h6>
                          <div class="pl-lg-4">
                            <div class="form-group focused">
                              <label>About Me</label>
                              <textarea
                                rows="4"
                                class="form-control "
                                placeholder="A few words about you ...">
          A beautiful Dashboard. Write about yourself</textarea>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- content -->
                  </div>
                </div>
                <div id="tab2" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                    <div class="card bg-secondary ">
                      <div class="card-body">
                        <?php include 'component/tbl-education.php'; ?>

                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab3" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                    Tab3 Content goes here !!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- tab panel -->


        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/tab-panel.js"></script>
  <script src="js/table.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>