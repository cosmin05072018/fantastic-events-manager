<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Email</th>
            <th>Status</th>
            <th>Role</th>
            <th>Department</th>
            <th>Hotel</th>
            <th>Manager Name</th>
            <th>Company Name</th>
            <th>County</th>
            <th>Company Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->email }}</td>
                <td>{{ $user->status ? 'Active' : 'Inactive' }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->department ? $user->department->name : 'N/A' }}</td>
                <td>{{ $user->hotel ? $user->hotel->name : 'N/A' }}</td>
                <td>{{ $user->manager_name ?? 'N/A' }}</td>
                <td>{{ $user->company_name ?? 'N/A' }}</td>
                <td>{{ $user->county ?? 'N/A' }}</td>
                <td>{{ $user->company_address ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/favicon.png"
    />
    <title>
      Matrix Admin Template - Most Advanced Dashboard Kit of All Time
    </title>
    <!-- Custom CSS -->
    <!-- <link
      href="dist/css/style.min.css"
      rel="stylesheet"
    /> -->
    <link
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/dist/css/style.min.css"
      rel="stylesheet"
    />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="lp-custom-row">
    <!-- ============================================================== -->
    <!-- Main wrapper -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Header part -->
      <!-- ============================================================== -->
      <header class="py-3 bg-white">
        <div class="container">
          <!-- Start Header -->
          <div class="header">
            <nav class="navbar navbar-expand-md navbar-light px-0">
              <a class="navbar-brand" href="#">
                <img
                  src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/logo-icon.png"
                  alt="logo"
                />
                <span class="ml-3">
                  <img
                    src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/logo-text.png"
                    alt="logo"
                  />
                </span>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse"
                id="navbarSupportedContent1"
              >
                <ul class="navbar-nav ms-auto flex-row mt-3 mt-md-0">
                  <li class="nav-item pe-3">
                    <a
                      href="#free-download"
                      class="btn btn-custom btn-outline-info btn-lg btn-free"
                      >Free Download</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="https://www.wrappixel.com/templates/category/admin-template/?ref=40"
                      class="btn btn-custom btn-info btn-lg"
                      target="_blank"
                      >Check Premium Templates</a
                    >
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <!-- End Header -->
        </div>
      </header>
      <!-- ============================================================== -->
      <!-- Header part -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Page wrapper part -->
      <!-- ============================================================== -->
      <div class="content-wrapper">
        <!-- ============================================================== -->
        <!-- Demos part -->
        <!-- ============================================================== -->
        <section class="spacer bg-light">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9 text-center">
                <h2 class="text-dark">
                  Create Userfriendly Interface for your
                  <span class="font-weight-bold">Applications</span> &
                  <span class="font-weight-bold">Products</span> with
                  <span class="border-bottom border-dark"> Matrix Admin</span>
                </h2>
              </div>
            </div>
            <div class="row py-5">
              <!-- ============================================================== -->
              <!-- Lite Demo -->
              <!-- ============================================================== -->
              <div class="col-md-12 col-lg-6">
                <div class="card p-2 mr-1">
                  <div class="card-body p-4">
                    <div class="text-center">
                      <h2 class="text-dark font-weight-medium">
                        Free Matrix Admin
                      </h2>
                      <h4 class="text-success">$0 Only</h4>
                    </div>
                    <div class="live-box text-center mt-4">
                      <img
                        class="img-fluid"
                        src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/free-demo.jpg"
                        alt="Lite version"
                      />
                    </div>
                    <div class="text-center mt-4">
                      <a
                          class="btn btn-danger btn-custom mb-2 mb-md-0"
                          href="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/html/index.html"
                          target="_blank"
                          >Live Preview</a
                        >
                      <a
                        href="https://github.com/wrappixel/matrix-admin-bt5"
                        class="btn btn-custom btn-info ms-2"
                        target="_blank"
                        >Free Download</a
                      >
                    </div>
                    <p class="text-muted mt-5 line-h33 font-16">
                      Matrix Admin is basic yet very useful bootstrap 5
                      dashbaord template for your projects.If you are looking
                      for modern yet clean admin template for your backend
                      project. Matrix Admin is the right choice for you. If your
                      application requires more options. We like to suggest you
                      the Premium Templates.
                    </p>
                    <div class="row text-muted mt-4">
                      <div class="col-md-6">
                        <ul class="list-unstyled listing">
                          <li>
                            <span class="icon-circle"></span>
                            1 Basic Dashboard
                          </li>
                          <li>
                            <span class="icon-circle"></span>20+ Pages Template
                          </li>
                          <li>
                            <span class="icon-circle"></span>10+ UI Components
                          </li>
                          <li>
                            <span class="icon-circle"></span>Bootstrap 5 Version
                          </li>
                          <li><span class="icon-circle"></span>Icons</li>
                          <li>
                            <span class="icon-circle"></span>Fully Responsive
                            Pages
                          </li>
                          <li>
                            <span class="icon-circle"></span>No Support Provided
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="list-unstyled listing">
                          <li>
                            <span class="icon-circle"></span>Sass Base CSS
                          </li>
                          <li>
                            <span class="icon-circle"></span>Easy To Customize
                          </li>
                          <li>
                            <span class="icon-circle"></span>Basic Table
                            Examples
                          </li>
                          <li>
                            <span class="icon-circle"></span>Profile Page
                            Included
                          </li>
                          <li>
                            <span class="icon-circle"></span>No Documentation
                          </li>
                          <li>
                            <span class="icon-circle"></span>Backlink Required
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- Pro Demo -->
              <!-- ============================================================== -->
              <div class="col-md-12 col-lg-6">
                <div class="card pro-demo p-2 ml-1">
                  <div class="card-body p-4">
                    <div
                      id="carouselExampleIndicators2"
                      class="carousel slide custom-carousel"
                      data-bs-ride="carousel"
                    >
                      <div class="custom-indicators">
                        <ol class="carousel-indicators">
                          <li
                            data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide-to="0"
                            class="active"
                          ></li>
                          <li
                            data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide-to="1"
                          ></li>
                          <li
                            data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide-to="2"
                          ></li>
                          <li
                            data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide-to="3"
                          ></li>
                          <li
                            data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide-to="4"
                          ></li>
                        </ol>
                      </div>
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          <div class="text-center">
                            <h2 class="text-info font-weight-medium">
                              Xtreme Admin Template
                            </h2>
                            <h4 class="text-dark">$49 Only</h4>
                          </div>
                          <div class="live-box mt-4">
                            <img
                              class="img-fluid"
                              src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/landingpage/images/pro-demo.jpg"
                              alt="Pro version"
                            />
                          </div>
                          <div class="text-center mt-4">
                            <a
                                class="btn btn-danger btn-custom mb-2 mb-md-0"
                                href="https://www.wrappixel.com/templates/xtremeadmin/?ref40#demos"
                                target="_blank"
                                >Live Preview</a
                              >
                            <a
                              href="https://www.wrappixel.com/templates/xtremeadmin/?ref=40"
                              class="btn btn-custom btn-info ms-2"
                              target="_blank"
                              >Buy Xtreme Admin</a
                            >
                          </div>
                          <div class="row text-dark text-left mt-5">
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>10+ Stunning Dashboards
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>600+ Page Templates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>500+ UI Components
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>100+ Integrated Plugins
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Front-end Landing Page
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Premium Support
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Right-to-Left(RTL) Verion
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Unlimited Colors
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3000+ Font Icons
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Chart Options
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Bootstrap 5 Version
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Fully Responsive Pages
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>10+ Unique Demos
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>5+ Ready to Use App
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Light and Dark Sidebar
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Dashboard PSD Files
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Updates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Documentation Provided
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Widgets
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Tons of Table Example
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Variety of Forms Included
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Sass Base CSS
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Easy to Customize
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>& lots more..
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="text-center">
                            <h2 class="text-info font-weight-medium">
                              Material-Pro Admin Template
                            </h2>
                            <h4 class="text-dark">$39 Only</h4>
                          </div>
                          <div class="live-box mt-4">
                            <img
                              class="img-fluid"
                              src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/landingpage/images/pro-demo.jpg"
                              alt="Pro version"
                            />
                          </div>
                          <div class="text-center mt-4">
                            <a
                                class="btn btn-danger btn-custom mb-2 mb-md-0"
                                href="https://www.wrappixel.com/templates/materialpro/?ref40#demos"
                                target="_blank"
                                >Live Preview</a
                              >
                            <a
                              href="https://www.wrappixel.com/templates/materialpro/?ref=40"
                              class="btn btn-custom btn-info ms-2"
                              target="_blank"
                              >Buy Materialpro Admin</a
                            >
                          </div>
                          <div class="row text-dark text-left mt-5">
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>6+ Stunning Dashboards
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>600+ Page Templates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>500+ UI Components
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>100+ Integrated Plugins
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Front-end Landing Page
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Premium Support
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Right-to-Left(RTL) Verion
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Unlimited Colors
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3000+ Font Icons
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Chart Options
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Bootstrap 5 Version
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Fully Responsive Pages
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>5+ Unique Demos
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>5+ Ready to Use App
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Light and Dark Sidebar
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Dashboard PSD Files
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Updates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Documentation Provided
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Widgets
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Tons of Table Example
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Variety of Forms Included
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Sass Base CSS
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Easy to Customize
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>& lots more..
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="text-center">
                            <h2 class="text-info font-weight-medium">
                              Admin-Pro Admin Template
                            </h2>
                            <h4 class="text-dark">$39 Only</h4>
                          </div>
                          <div class="live-box mt-4">
                            <img
                              class="img-fluid"
                              src="https://demos.wrappixel.com/free-admin-templates/bootstrap/adminpro-bootstrap-free/landingpage/images/pro-demo.jpg"
                              alt="Pro version"
                            />
                          </div>
                          <div class="text-center mt-4">
                            <a
                                class="btn btn-danger btn-custom mb-2 mb-md-0"
                                href="https://www.wrappixel.com/templates/adminpro/?ref40#demos"
                                target="_blank"
                                >Live Preview</a
                              >
                            <a
                              href="https://www.wrappixel.com/templates/adminpro/?ref=40"
                              class="btn btn-custom btn-info ms-2"
                              target="_blank"
                              >Buy Adminpro Admin</a
                            >
                          </div>
                          <div class="row text-dark text-left mt-5">
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>4+ Stunning Dashboards
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>600+ Page Templates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>500+ UI Components
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>100+ Integrated Plugins
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Front-end Landing Page
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Premium Support
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Right-to-Left(RTL) Verion
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Unlimited Colors
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3000+ Font Icons
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Chart Options
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Bootstrap 5 Version
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Fully Responsive Pages
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>7+ Unique Demos
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>5+ Ready to Use App
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Light and Dark Sidebar
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Dashboard PSD Files
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Updates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Documentation Provided
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Widgets
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Tons of Table Example
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Variety of Forms Included
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Sass Base CSS
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Easy to Customize
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>& lots more..
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="text-center">
                            <h2 class="text-info font-weight-medium">
                              Monster Admin Template
                            </h2>
                            <h4 class="text-dark">$39 Only</h4>
                          </div>
                          <div class="live-box mt-4">
                            <img
                              class="img-fluid"
                              src="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/landingpage/images/pro-demo.jpg"
                              alt="Pro version"
                            />
                          </div>
                          <div class="text-center mt-4">
                            <a
                                class="btn btn-danger btn-custom mb-2 mb-md-0"
                                href="https://www.wrappixel.com/templates/monsteradmin/?ref40#demos"
                                target="_blank"
                                >Live Preview</a
                              >
                            <a
                              href="https://www.wrappixel.com/templates/monsteradmin/?ref=40"
                              class="btn btn-custom btn-info ms-2"
                              target="_blank"
                              >Buy Monster Admin</a
                            >
                          </div>
                          <div class="row text-dark text-left mt-5">
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>5 Stunning Dashboards
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>600+ Page Templates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>500+ UI Components
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>100+ Integrated Plugins
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Front-end Landing Page
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 months Premium Support
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Right-to-Left(RTL) Verion
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Unlimited Colors
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3000+ Font Icons
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Chart Options
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Bootstrap 5 Version
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Fully Responsive Pages
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>6+ Unique Demos
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3+ Ready to Use App
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Light and Dark Sidebar
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Dashboard PSD Files
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6 Months Updates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Documentation Provided
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Widgets
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Tons of Table Example
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Variety of Forms Included
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>SaSS Base CSS
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Easy to Customize
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>& lots more..
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="text-center">
                            <h2 class="text-info font-weight-medium">
                              Ample Admin Template
                            </h2>
                            <h4 class="text-dark">$39 Only</h4>
                          </div>
                          <div class="live-box mt-4">
                            <img
                              class="img-fluid"
                              src="https://demos.wrappixel.com/free-admin-templates/bootstrap/ample-bootstrap-free/landingpage/images/pro-demo.jpg"
                              alt="Pro version"
                            />
                          </div>
                          <div class="text-center mt-4">
                            <a
                                class="btn btn-danger btn-custom mb-2 mb-md-0"
                                href="https://www.wrappixel.com/templates/ampleadmin/?ref40#demos"
                                target="_blank"
                                >Live Preview</a
                              >
                            <a
                              href="https://www.wrappixel.com/templates/ampleadmin/?ref=40"
                              class="btn btn-custom btn-info ms-2"
                              target="_blank"
                              >Buy Ample Admin</a
                            >
                          </div>
                          <div class="row text-dark text-left mt-5">
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>3+ Stunning Dashboards
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>600+ Page Templates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>500+ UI Components
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>100+ Integrated Plugins
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Front-end Landing Page
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6Month Premium Support
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Right-to-Left(RTL) Verion
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Unlimited Colors
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3000+ Font Icons
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Chart Options
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Bootstrap 5 Version
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Fully Responsive Pages
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-unstyled listing">
                                <li>
                                  <span class="icon-circle info"></span>7+ Unique Demos
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>3+ Ready to Use App
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Light and Dark Sidebar
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Dashboard PSD Files
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>6months Updates
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Documentation Provided
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Lots of Widgets
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Tons of Table Example
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Variety of Forms Included
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>SCSS Base CSS
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>Easy to Customize
                                </li>
                                <li>
                                  <span class="icon-circle info"></span>& lots more..
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a
                        class="carousel-control-prev"
                        href="#carouselExampleIndicators2"
                        role="button"
                        data-bs-slide="prev"
                      >
                        <span>
                          <!-- <i class="mdi mdi-chevron-left"></i> -->
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a
                        class="carousel-control-next"
                        href="#carouselExampleIndicators2"
                        role="button"
                        data-bs-slide="next"
                      >
                        <span>
                          <!-- <i class="mdi mdi-chevron-right"></i> -->
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- ============================================================== -->
      <!-- End page wrapperHeader part -->
      <!-- ============================================================== -->
      <footer class="text-center p-4">
        All Rights Reserved by Matrix Admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
      </footer>
    </div>
  </body>
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $("a.btn-free").on("click", function (event) {
      var $anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $($anchor.attr("href")).offset().top - 10,
          },
          1000
        );
      event.preventDefault();
    });
  </script>
</html>
