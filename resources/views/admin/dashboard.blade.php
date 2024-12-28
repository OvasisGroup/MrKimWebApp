@extends('admin/layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">
                <div class="col-12">                    
                    <div class="card marieta"> 
                        <div class="card-bodyl"> 
                            <div class="rows"> 
                                <img src="{{ asset('images/hand-cleaning-one.png') }}" alt="" class="rou">
                                <div><h3>Commercial & Residential
                                   <br> <span class="clanim">Cleaning Services You Can Trust</span></h3>
                                   <button type="button" class="btn btn-primary">Get Cleaning Estimate</button>
                                    </div>
                            </div><!--end row-->               
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col-->  
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="pb-3 row d-flex justify-content-center border-dashed-bottom">
                                    <div class="col-9">
                                        <p class="mb-0 text-dark fw-semibold fs-14">Sessions</p>
                                        <h3 class="mt-2 mb-0 fw-bold">24k</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div class="mx-auto d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle">
                                            <i class="mb-0 iconoir-hexagon-dice h1 align-self-center text-secondary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <p class="mt-3 mb-0 text-truncate text-muted"><span class="text-success">8.5%</span>
                                    New Sessions Today</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="pb-3 row d-flex justify-content-center border-dashed-bottom">
                                    <div class="col-9">
                                        <p class="mb-0 text-dark fw-semibold fs-14">Avg.Sessions</p>
                                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div class="mx-auto d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle">
                                            <i class="mb-0 iconoir-clock h1 align-self-center text-secondary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <p class="mt-3 mb-0 text-truncate text-muted"><span class="text-success">1.5%</span>
                                    Weekly Avg.Sessions</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="pb-3 row d-flex justify-content-center border-dashed-bottom">
                                    <div class="col-9">
                                        <p class="mb-0 text-dark fw-semibold fs-14">Bounce
                                            Rate</p>
                                        <h3 class="mt-2 mb-0 fw-bold">36.45%</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div class="mx-auto d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle">
                                            <i class="mb-0 iconoir-percentage-circle h1 align-self-center text-secondary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <p class="mt-3 mb-0 text-truncate text-muted"><span class="text-danger">8%</span>
                                   Up Bounce Rate Weekly</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Audience Overview</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="index.html#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-calendar fs-5 me-1"></i>
                                                This Year<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="index.html#">Today</a>
                                                <a class="dropdown-item" href="index.html#">Last Week</a>
                                                <a class="dropdown-item" href="index.html#">Last Month</a>
                                                <a class="dropdown-item" href="index.html#">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="pt-0 card-body">
                                <div id="audience_overview" class="apex-charts"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="mb-0 text-dark fw-semibold fs-14">New Visitors</p>
                                        <h2 class="mt-0 mb-0 fw-bold">1,282</h2>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto align-self-center">
                                        <div class="img-group d-flex">
                                            <a class="user-avatar position-relative d-inline-block" href="index.html#">
                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="avatar" class="shadow-sm thumb-md rounded-circle">
                                            </a>
                                            <a class="user-avatar position-relative d-inline-block ms-n2" href="index.html#">
                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="avatar" class="shadow-sm thumb-md rounded-circle">
                                            </a>
                                            <a class="user-avatar position-relative d-inline-block ms-n2" href="index.html#">
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="avatar" class="shadow-sm thumb-md rounded-circle">
                                            </a>
                                            <a class="user-avatar position-relative d-inline-block ms-n2" href="index.html#">
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar" class="shadow-sm thumb-md rounded-circle">
                                            </a>
                                            <a "https://mannatthemes.com/rizz/default/href" class="user-avatar position-relative d-inline-block ms-1">
                                                <span class="shadow-sm thumb-md justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+6</span>
                                            </a>
                                        </div>
                                        <small class="text-muted">Logined
                                            Visitors</small>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div id="visitors_report" class="mb-2 apex-charts"></div>
                                <button type="button" class="btn btn-primary w-100 btn-lg fs-14">More
                                    Detail <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Browser Used & Traffic Reports</h4>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class="table-responsive browser_users">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="border-top-0">Browser</th>
                                                <th class="border-top-0">Sessions</th>
                                                <th class="border-top-0">Bounce Rate</th>
                                                <th class="border-top-0">Transactions</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset('assets/images/logos/chrome.png') }}" alt height="24" class="me-2">Chrome</td>
                                                <td>10853<small class="text-muted">(52%)</small></td>
                                                <td> 52.80%</td>
                                                <td>566<small class="text-muted">(92%)</small></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img src="{{ asset('assets/images/logos/micro-edge.png') }}" alt height="24" class="me-2">Microsoft
                                                    Edge</td>
                                                <td>2545<small class="text-muted">(47%)</small></td>
                                                <td> 47.54%</td>
                                                <td>498<small class="text-muted">(81%)</small></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img src="{{ asset('assets/images/logos/in-explorer.png') }}" alt height="24" class="me-2">Internet-Explorer</td>
                                                <td>1836<small class="text-muted">(38%)</small></td>
                                                <td> 41.12%</td>
                                                <td>455<small class="text-muted">(74%)</small></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img src="{{ asset('assets/images/logos/opera.png') }}" alt height="24" class="me-2">Opera</td>
                                                <td>1958<small class="text-muted">(31%)</small></td>
                                                <td> 36.82%</td>
                                                <td>361<small class="text-muted">(61%)</small></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img src="{{ asset('assets/images/logos/chrome.png') }}" alt height="24" class="me-2">Chrome</td>
                                                <td>10853<small class="text-muted">(52%)</small></td>
                                                <td> 52.80%</td>
                                                <td>566<small class="text-muted">(92%)</small></td>
                                            </tr>
                                            <!--end tr-->
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <!--end /div-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Total Visits</h4>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="border-top-0">Channel</th>
                                                <th class="border-top-0">Sessions</th>
                                                <th class="border-top-0">Prev.Period</th>
                                                <th class="border-top-0">% Change</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a "https://mannatthemes.com/rizz/default/href" class="text-primary">Organic search</a></td>
                                                <td>10853<small class="text-muted">(52%)</small></td>
                                                <td>566<small class="text-muted">(92%)</small></td>
                                                <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><a "https://mannatthemes.com/rizz/default/href" class="text-primary">Direct</a></td>
                                                <td>2545<small class="text-muted">(47%)</small></td>
                                                <td>498<small class="text-muted">(81%)</small></td>
                                                <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><a "https://mannatthemes.com/rizz/default/href" class="text-primary">Referal</a></td>
                                                <td>1836<small class="text-muted">(38%)</small></td>
                                                <td>455<small class="text-muted">(74%)</small></td>
                                                <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><a "https://mannatthemes.com/rizz/default/href" class="text-primary">Email</a></td>
                                                <td>1958<small class="text-muted">(31%)</small></td>
                                                <td>361<small class="text-muted">(61%)</small></td>
                                                <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><a "https://mannatthemes.com/rizz/default/href" class="text-primary">Social</a></td>
                                                <td>1566<small class="text-muted">(26%)</small></td>
                                                <td>299<small class="text-muted">(49%)</small></td>
                                                <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                                            </tr>
                                            <!--end tr-->
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <!--end /div-->
                                <p class="m-0 fs-12 fst-italic ps-2 text-muted">Last data updated - 13min ago <a href="index.html#!" class="link-danger ms-1 "><i class="align-middle iconoir-refresh"></i></a></p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Traffic Sources</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="index.html#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-search-user fs-5 me-1"></i>
                                                Direct<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="index.html#">Email</a>
                                                <a class="dropdown-item" href="index.html#">Referral</a>
                                                <a class="dropdown-item" href="index.html#">Direct</a>
                                                <a class="dropdown-item" href="index.html#">Organic</a>
                                                <a class="dropdown-item" href="index.html#">Campaign</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class>
                                    <div id="traffic_sources" class="mx-auto apex-charts d-block w-90"></div>
                                    <hr class="mx-auto mt-0 hr-dashed border-secondary w-25">
                                </div>
                                <div class="text-center">
                                    <h4>Direct Visitors</h4>
                                    <p class="mt-2 text-muted">This is a
                                        simple hero unit, a simple
                                        jumbotron-style component</p>
                                    <button type="button" class="px-3 mt-2 btn btn-outline-primary">More
                                        details</button>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Organic
                                            Traffic In World</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="index.html#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-calendar fs-5 me-1"></i>
                                                Today<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="index.html#">Today</a>
                                                <a class="dropdown-item" href="index.html#">Last Week</a>
                                                <a class="dropdown-item" href="index.html#">Last Month</a>
                                                <a class="dropdown-item" href="index.html#">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div id="map_2" class style="height:320px"></div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="my-3 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/flags/us_flag.jpg') }}" class="thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">35,365</h5>
                                                <p class="mb-0 text-muted">USA
                                                    . Last Month
                                                    <span class="text-success">2.5%
                                                        <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <!--end media-->
                                        <div class="my-3 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/flags/germany_flag.jpg') }}" class="thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">24,865</h5>
                                                <p class="mb-0 text-muted">Germany
                                                    . Last Month
                                                    <span class="text-success">1.2%
                                                        <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <!--end media-->
                                        <div class="my-3 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/flags/spain_flag.jpg') }}" class="thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">18,369</h5>
                                                <p class="mb-0 text-muted">Spain
                                                    . Last Month
                                                    <span class="text-success">0.8%
                                                        <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <!--end media-->
                                        <div class="my-3 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/flags/baha_flag.jpg') }}" class="thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">11,325</h5>
                                                <p class="mb-0 text-muted">Bahamas
                                                    . Last Month
                                                    <span class="text-success">2.5%
                                                        <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <!--end media-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div><!-- container -->

            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom justify-content-between">
                  <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                  <button type="button" class="p-0 m-0 btn-close text-reset align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">  
                    <h6>Account Settings</h6>
                    <div class="p-2 mt-3 text-start">
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 mt-3 text-start">
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->               
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
          
@endsection