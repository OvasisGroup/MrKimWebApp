@extends('admin/layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-xxl">
            
            <div class="row justify-content-center"> 
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
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-lg-4 align-self-center mb-lg-0">
                                    <div class="flex-row flex-wrap d-flex align-items-center">
                                        <div class="position-relative me-3">
                                            <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="" height="120" class="rounded-circle">
                                            <a href="pages-profile.html#" class="bottom-0 text-white border thumb-md justify-content-center d-flex align-items-center bg-primary rounded-circle position-absolute end-0 border-3 border-card-bg">
                                                <i class="fas fa-camera"></i>
                                            </a>
                                        </div>
                                        <div class="">
                                            <h5 class="mb-1 fw-semibold fs-22">{{\Illuminate\Support\Str::title(Auth::user()->name)}}</h5>                                                        
                                            <p class="mb-0 text-muted fw-medium">{{Auth::user()->title}}</p>   
                                        </div>
                                    </div>                                                
                                </div><!--end col-->
                                
                                <div class="col-lg-4 ms-auto align-self-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="p-2 border-dashed rounded border-theme-color me-2 flex-grow-1 flex-basis-0">
                                            <h5 class="mb-1 fw-semibold fs-22">7</h5>
                                            <p class="mb-0 text-muted fw-medium">Projects</p>
                                        </div>
                                        <div class="p-2 border-dashed rounded border-theme-color me-2 flex-grow-1 flex-basis-0">
                                            <h5 class="mb-1 fw-semibold fs-22">68</h5>
                                            <p class="mb-0 text-muted fw-medium">Applications</p>
                                        </div>
                                        <div class="p-2 border-dashed rounded border-theme-color me-2 flex-grow-1 flex-basis-0">
                                            <h5 class="mb-1 fw-semibold fs-22">8</h5>
                                            <p class="mb-0 text-muted fw-medium">Completed</p>
                                        </div>
                                    </div>                                          
                                </div><!--end col-->
                                <div class="col-lg-4 align-self-center">
                                    <div class="row row-cols-2">
                                        <div class="col text-end">
                                            <div>
                                                <img src="{{ asset('images/SVG/university.svg') }}" alt="user" class="" width="70px" ">
                                            </div>
                                        </div>  
                                        <div class="col align-self-center">
                                            <button type="button" class="btn btn-light d-inline-block">Hire Me</button>  
                                            <button type="button" class="btn btn-light d-inline-block">Post</button>  
                                        </div>
                                    </div>                                   
                                </div><!--end col-->
                            </div><!--end row-->               
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col-->                                  
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title">Personal Information</h4>                      
                                </div><!--end col-->
                                <div class="col-auto">                      
                                    <a href="pages-profile.html#" class="float-end text-muted d-inline-flex text-decoration-underline"><i class="iconoir-edit-pencil fs-18 me-1"></i>Edit</a>                      
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="pt-0 card-body">
                            <p class="mb-3 text-muted fw-medium">{{Auth::user()->bio}}</p>
             
                            <ul class="mb-0 list-unstyled">                                        
                                <li class="mt-2"><i class="align-middle las la-briefcase me-2 text-secondary fs-22"></i> <b> Title </b> : {{Auth::user()->title}}</li>
                                <li class="mt-2"><i class="align-middle las la-university me-2 text-secondary fs-22"></i> <b> Education </b> : {{Auth::user()->education}}</li>
                                <li class="mt-2"><i class="align-middle las la-map me-2 text-secondary fs-22"></i> <b> Location </b> : {{Auth::user()->location}}</li>
                                <li class="mt-2"><i class="align-middle las la-phone me-2 text-secondary fs-22"></i> <b> Phone </b> : {{Auth::user()->phone}}</li>
                                <li class="mt-2"><i class="align-middle las la-envelope text-secondary fs-22 me-2"></i> <b> Email </b> : {{Auth::user()->email}}</li>
                            </ul> 
                            <p class="nabii">
                                NB:// Please note that your contact details will not be shared by anyone and is only visible to you
                            </p>
                            
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col--> 
                <div class="col-md-8">
                    <ul class="mb-3 nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fw-medium active" data-bs-toggle="tab" href="pages-profile.html#post" role="tab" aria-selected="true">My Applications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" data-bs-toggle="tab" href="pages-profile.html#gallery" role="tab" aria-selected="false">Awarded Jobs</a>
                        </li>                                                
                        <li class="nav-item">
                            <a class="nav-link fw-medium" data-bs-toggle="tab" href="pages-profile.html#settings" role="tab" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="post" role="tabpanel">
                            <div class="row">
                                
                                
                            </div><!--end row--> 
                            
                        </div>
                        <div class="p-3 tab-pane" id="gallery" role="tabpanel">
                            <div id="grid" class="row g-0">
                                <div class="col-md-6 col-lg-4 picture-item">
                                    <a href="assets/images/extra/card/img-1.jpg" class="lightbox">
                                        <img src="assets/images/extra/card/img-1.jpg" alt="" class="img-fluid" />
                                    </a>  
                                </div>
                                <div class="col-md-6 col-lg-4 picture-item picture-item--overlay">
                                    <a href="assets/images/extra/card/img-2.jpg" class="lightbox">
                                        <img src="assets/images/extra/card/img-2.jpg" alt="" class="img-fluid" />
                                    </a> 
                                </div>
                                <div class="col-md-6 col-lg-4 picture-item">
                                    <a href="assets/images/extra/card/img-3.jpg" class="lightbox">
                                        <img src="assets/images/extra/card/img-3.jpg" alt="" class="img-fluid" />
                                    </a> 
                                </div>
                                <div class="col-md-6 col-lg-4 picture-item picture-item--h2">
                                    <a href="assets/images/extra/card/img-4.jpg" class="lightbox">
                                        <img src="assets/images/extra/card/img-4.jpg" alt="" class="img-fluid" />
                                    </a> 
                                </div>
                                <div class="col-md-6 col-lg-4 picture-item">
                                    <a href="assets/images/extra/card/img-5.jpg" class="lightbox">
                                        <img src="assets/images/extra/card/img-5.jpg" alt="" class="img-fluid" />
                                    </a> 
                                </div>
                                <div class="col-md-6 col-lg-4 picture-item picture-item--overlay">
                                    <a href="assets/images/extra/card/img-6.jpg" class="lightbox">
                                        <img src="assets/images/extra/card/img-6.jpg" alt="" class="img-fluid" />
                                    </a> 
                                </div>                 
                            </div> 
                        </div>                                                
                        <div class="p-3 tab-pane" id="settings" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Personal Information</h4>                      
                                        </div><!--end col-->                                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="pt-0 card-body">                       
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First Name</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" value="Rosa">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Last Name</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" value="Dodson">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Company Name</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" value="MannatThemes">
                                            <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                        </div>
                                    </div>
        
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="las la-phone"></i></span>
                                                <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="las la-at"></i></span>
                                                <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Website Link</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="la la-globe"></i></span>
                                                <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">USA</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select class="form-select">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>USA</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>                                                    
                                </div><!--end card-body-->                                            
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change Password</h4>
                                </div><!--end card-header-->
                                <div class="pt-0 card-body"> 
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="password" placeholder="Password">
                                            <a href="pages-profile.html#" class="text-primary font-12">Forgot password ?</a>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="password" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="password" placeholder="Re-Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>   
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Other Settings</h4>
                                </div><!--end card-header-->
                                <div class="pt-0 card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                        <label class="form-check-label" for="Email_Notifications">
                                            Email Notifications
                                        </label>
                                        <span class="mt-0 form-text text-muted fs-12">Do you need them?</span>
                                      </div>
                                      <div class="mt-2 form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                        <label class="form-check-label" for="API_Access">
                                            API Access
                                        </label>
                                        <span class="mt-0 form-text text-muted font-12">Enable/Disable access</span>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                    </div> 
                </div> <!--end col-->                                                       
            </div><!--end row-->

                              
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
          
@endsection