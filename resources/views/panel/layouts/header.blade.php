<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
  <meta name="keywords"
    content="admin template, ra-admin admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="la-themes">
  <link rel="icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
  <title>Mr. Kim</title>

  <!-- Animation css -->
  <link rel="stylesheet" href="../assets/vendor/animation/animate.min.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

  <!-- wheather icon css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/weather/weather-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/weather/weather-icons-wind.css') }}">

  <!--flag Icon css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/flag-icons-master/flag-icon.css') }}">

  <!-- tabler icons-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/tabler-icons/tabler-icons.css') }}">

  <!-- prism css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/prism/prism.min.css') }}">

  <!-- apexcharts css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/apexcharts/apexcharts.css') }}">

  <!-- glight css -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendor/glightbox/glightbox.min.css') }}">

  <!-- slick css -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendor/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendor/slick/slick-theme.css') }}">

  <!-- Data Table css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/datatable/jquery.dataTables.min.css') }}">

  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/bootstrap/bootstrap.min.css') }}">

  <!-- vector map css -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendor/vector-map/jquery-jvectormap.css') }}">

  <!-- apexcharts css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/apexcharts/apexcharts.css') }}">

  <!-- simplebar css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/simplebar/simplebar.css') }}">

  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/style.css') }}">

  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/responsive.css') }}">

</head>

<body>
  <div class="app-wrapper">



    <!-- Menu Navigation starts -->
    <nav>
      <div class="app-logo">
        <a class="logo d-inline-block" href="{{ route('home') }}">
          <img src="{{ asset('images/mrkim-logo.svg') }}" alt="#">
        </a>

        <span class="bg-light-primary toggle-semi-nav">
          <i class="ti ti-chevrons-right f-s-20"></i>
        </span>
      </div>
      <div class="app-nav" id="app-simple-bar">
        <ul class="p-0 mt-2 main-nav">
          <li class="menu-title">
            <span>Dashboard</span>
          </li>

         

          <li class="menu-title"> <span>Profile</span></li>
          <li class="menu-title"> <span>My Jobs</span></li>
          <li class="menu-title"> <span>My Projects</span></li>
          <li class="menu-title"> <span>My Team</span></li>

        


        </ul>
      </div>

      <div class="menu-navs">
        <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
      </div>

    </nav>
    <!-- Menu Navigation ends -->

    <div class="app-content">
      <div class="">

        <!-- Header Section starts -->
        <header class="header-main">
          <div class="container-fluid">
            <div class="row">
              <div class="p-0 col-6 col-sm-4 d-flex align-items-center header-left">
                <span class="header-toggle me-3">
                  <i class="ph ph-circles-four"></i>
                </span>
              </div>

              <div class="p-0 col-6 col-sm-8 d-flex align-items-center justify-content-end header-right">

                <ul class="d-flex align-items-center">

                  <li class="header-searchbar">
                    <a href="index.html#" class="d-block head-icon" role="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                      <i class="ph ph-magnifying-glass"></i>
                    </a>

                    <div class="offcanvas offcanvas-end header-searchbar-canvas" tabindex="-1" id="offcanvasRight"
                      aria-labelledby="offcanvasRight">
                      <div class="header-searchbar-header">
                        <div class="mb-3 d-flex justify-content-between">
                          <form class="app-form app-icon-form w-100" action="index.html#">
                            <div class="position-relative">
                              <input type="search" class="form-control search-filter" placeholder="Search..."
                                aria-label="Search">
                              <i class="ti ti-search text-dark"></i>
                            </div>
                          </form>

                          <div class="flex-shrink-0 app-dropdown">
                            <a class="overflow-hidden h-35 w-35 d-flex-center b-r-15 bg-light-secondary search-list-avtar ms-2"
                              href="index.html#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                              aria-expanded="false">
                              <i class="ph-duotone ph-gear f-s-20"></i>
                            </a>

                            <ul class="mb-3 dropdown-menu">
                              <li class="mt-2 dropdown-item">
                                <a href="index.html#">
                                  <h6 class="mb-0">Search Settings</h6>
                                </a>
                              </li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <a href="index.html#">
                                  <h6 class="mb-0 text-secondary f-s-14">Safe Search Filtering</h6>
                                </a>
                                <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" type="checkbox" id="searchSwitch"
                                      checked>
                                  </div>
                                </div>
                              </li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <a href="index.html#">
                                  <h6 class="mb-0 text-secondary f-s-14">Search Suggestions</h6>
                                </a>
                                <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" type="checkbox"
                                      id="searchSwitch1">
                                  </div>
                                </div>
                              </li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-secondary f-s-14"> Search History</h6>
                                <i class="ti ti-message-circle me-3 text-success"></i>
                              </li>
                              <li class="dropdown-divider"></li>
                              <li class="mb-2 dropdown-item d-flex align-items-center justify-content-between">
                                <a href="index.html#">
                                  <h6 class="mb-0 text-dark f-s-14">Custom Search Preferences</h6>
                                </a>
                                <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" type="checkbox"
                                      id="searchSwitch2">
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
          
                      </div>
                      
                    </div>
                  </li>


                  <li class="header-dark">
                    <div class="sun-logo head-icon">
                      <i class="ph ph-moon-stars"></i>
                    </div>
                    <div class="moon-logo head-icon">
                      <i class="ph ph-sun-dim"></i>
                    </div>
                  </li>

                  <li class="header-notification">
                    <a href="index.html#" class="d-block head-icon position-relative" role="button" data-bs-toggle="offcanvas"
                      data-bs-target="#notificationcanvasRight" aria-controls="notificationcanvasRight">
                      <i class="ph ph-bell"></i>
                      <span
                        class="p-1 border position-absolute translate-middle bg-success border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower"></span>
                    </a>
                    <div class="offcanvas offcanvas-end header-notification-canvas" tabindex="-1"
                      id="notificationcanvasRight" aria-labelledby="notificationcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="notificationcanvasRightLabel">Notification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      
                    </div>

                  </li>

                  <li class="header-profile">
                    <a href="index.html#" class="d-block head-icon" role="button" data-bs-toggle="offcanvas"
                      data-bs-target="#profilecanvasRight" aria-controls="profilecanvasRight">
                      <img src="{{ asset('images/avtar/woman/jpg') }}" alt="avtar" class="b-r-10 h-35 w-35">
                    </a>

                    <div class="offcanvas offcanvas-end header-profile-canvas" tabindex="-1" id="profilecanvasRight"
                      aria-labelledby="profilecanvasRight">
                      <div class="offcanvas-body app-scroll">
                        <ul class="">
                          <li>
                            <div class="d-flex-center">
                              <span class="h-45 w-45 d-flex-center b-r-10 position-relative">
                                <img src="{{ asset('dashboard/images/avtar/woman/jpg') }}" alt="" class="img-fluid b-r-10">
                              </span>
                            </div>
                            <div class="mt-2 text-center">
                              <h6 class="mb-0"> Laura Monaldo</h6>
                              <p class="mb-0 f-s-12 text-secondary">lauradesign@gmail.com</p>
                            </div>
                          </li>

                          <li class="py-1 app-divider-v dotted"></li>
                          <li>
                            <a class="f-w-500" href="profile.html" target="_blank">
                              <i class="ph-duotone ph-user-circle pe-1 f-s-20"></i> Profile Details
                            </a>
                          </li>
                          <li>
                            <a class="f-w-500" href="setting.html" target="_blank">
                              <i class="ph-duotone ph-gear pe-1 f-s-20"></i> Settings
                            </a>
                          </li>
                          
                          <li>
                            <div class="d-flex align-items-center justify-content-between" >
                              <a class="f-w-500" href="index.html#">
                                <i class="ph-duotone ph-notification pe-1 f-s-20"></i> Notification
    
                              </a>
                     
                              <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                  <input class="form-check-input form-check-primary" type="checkbox" id="basicSwitch"
                                    checked>
                                </div>
              
                              </div>
                            </div>
                          </li>
                          
                          <li class="py-1 app-divider-v dotted"></li>
                          <li>
                            <a class="f-w-500" href="faq.html" target="_blank">
                              <i class="ph-duotone ph-question pe-1 f-s-20"></i> Help
                            </a>
                          </li>
                          <li>
                            <a class="f-w-500" href="pricing.html" target="_blank">
                              <i class="ph-duotone ph-currency-circle-dollar pe-1 f-s-20"></i> Premium
                            </a>
                          </li>
 
                          <li class="py-1 app-divider-v dotted"></li>
                          
                          <li class="py-1 app-divider-v dotted"></li>

                          <li>
                            <a class="mb-0 text-danger" href="{{ url('logout') }}">
                              <i class="ph-duotone ph-sign-out pe-1 f-s-20"></i> Log Out
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </header>
        <!-- Header Section ends -->