@extends('admin/layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-xxl">
            
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
                                            <p class="mb-0 text-muted fw-medium">UI/UX Designer, USA</p>                                                        
                                        </div>
                                    </div>                                                
                                </div><!--end col-->
                                
                                <div class="col-lg-4 ms-auto align-self-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="p-2 border-dashed rounded border-theme-color me-2 flex-grow-1 flex-basis-0">
                                            <h5 class="mb-1 fw-semibold fs-22">75</h5>
                                            <p class="mb-0 text-muted fw-medium">Projects</p>
                                        </div>
                                        <div class="p-2 border-dashed rounded border-theme-color me-2 flex-grow-1 flex-basis-0">
                                            <h5 class="mb-1 fw-semibold fs-22">68%</h5>
                                            <p class="mb-0 text-muted fw-medium">Success Rate</p>
                                        </div>
                                        <div class="p-2 border-dashed rounded border-theme-color me-2 flex-grow-1 flex-basis-0">
                                            <h5 class="mb-1 fw-semibold fs-22">$8620</h5>
                                            <p class="mb-0 text-muted fw-medium">Earning</p>
                                        </div>
                                    </div>                                          
                                </div><!--end col-->
                                <div class="col-lg-4 align-self-center">
                                    <div class="row row-cols-2">
                                        <div class="col text-end">
                                            <div id="complete" class="apex-charts"></div>
                                        </div>  
                                        <div class="col align-self-center">
                                            <button type="button" class="btn btn-primary d-inline-block">Follow</button> 
                                            <button type="button" class="btn btn-light d-inline-block">Hire Me</button>  
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
                            <p class="mb-3 text-muted fw-medium">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-3">
                                <span class="mb-1 text-gray-700 bg-transparent border badge border-light fs-12 fw-medium">Javascript</span>
                                <span class="mb-1 text-gray-700 bg-transparent border badge border-light fs-12 fw-medium">Python</span>
                                <span class="mb-1 text-gray-700 bg-transparent border badge border-light fs-12 fw-medium">Angular</span>
                                <span class="mb-1 text-gray-700 bg-transparent border badge border-light fs-12 fw-medium">Reactjs</span>
                                <span class="mb-1 text-gray-700 bg-transparent border badge border-light fs-12 fw-medium">Flutter</span>
                            </div>
                            <ul class="mb-0 list-unstyled">                                        
                                <li class=""><i class="align-middle las la-birthday-cake me-2 text-secondary fs-22"></i> <b> Birth Date </b> : 06 June 1989</li>
                                <li class="mt-2"><i class="align-middle las la-briefcase me-2 text-secondary fs-22"></i> <b> Position </b> : Full Stack Developer</li>
                                <li class="mt-2"><i class="align-middle las la-university me-2 text-secondary fs-22"></i> <b> Education </b> : Stanford Univercity</li>
                                <li class="mt-2"><i class="align-middle las la-language me-2 text-secondary fs-22"></i> <b> Languages </b> : English, French, Spanish</li>
                                <li class="mt-2"><i class="align-middle las la-phone me-2 text-secondary fs-22"></i> <b> Phone </b> : +91 23456 78910</li>
                                <li class="mt-2"><i class="align-middle las la-envelope text-secondary fs-22 me-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                            </ul> 
                            <div class="mt-4 row justify-content-center">
                                <div class="col-auto text-end border-end">
                                    <span class="mb-1 text-white thumb-md justify-content-center d-flex align-items-center bg-blue rounded-circle ms-auto">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                    <p class="mb-0 fw-semibold">Facebook</p>
                                    <h4 class="m-0 fw-bold">25k <span class="text-muted fs-12 fw-normal">Followers</span></h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <span class="mb-1 text-white bg-black thumb-md justify-content-center d-flex align-items-center rounded-circle">
                                        <i class="fab fa-x-twitter"></i>
                                    </span>
                                    <p class="mb-0 fw-semibold">Twitter</p>
                                    <h4 class="m-0 fw-bold">58k <span class="text-muted fs-12 fw-normal">Followers</span></h4>
                                </div><!--end col-->
                            </div><!--end row-->       
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col--> 
                <div class="col-md-8">
                    <ul class="mb-3 nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fw-medium active" data-bs-toggle="tab" href="pages-profile.html#post" role="tab" aria-selected="true">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" data-bs-toggle="tab" href="pages-profile.html#gallery" role="tab" aria-selected="false">Gallery</a>
                        </li>                                                
                        <li class="nav-item">
                            <a class="nav-link fw-medium" data-bs-toggle="tab" href="pages-profile.html#settings" role="tab" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="post" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-1 text-dark fw-semibold">Views</p>
                                                    <h3 class="my-2 fs-24 fw-bold">24k</h3>
                                                    <p class="mb-0 text-truncate text-muted"><i class="iconoir-bell text-warning fs-18"></i>
                                                        <span class="text-dark fw-semibold">1500</span> New subscribers this week
                                                    </p>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="mx-auto d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle">
                                                        <i class="iconoir-eye fs-30 align-self-center text-muted"></i>
                                                    </div>                                                                    
                                                </div>
                                            </div> 
                                        </div><!--end card-body--> 
                                    </div><!--end card-->   
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-1 text-dark fw-semibold">Comments</p>
                                                    <h3 class="my-2 fs-24 fw-bold">24k</h3>
                                                    <p class="mb-0 text-truncate text-muted"><i class="ti ti-thumb-up text-success fs-18"></i>
                                                        <span class="text-dark fw-semibold">854</span> New Like this week
                                                    </p>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="mx-auto d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle">
                                                        <i class="iconoir-chat-lines fs-30 align-self-center text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div><!--end col-->
                            </div><!--end row--> 
                            <div class="row">
                                <div class="col-12">                                            
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-10.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="m-0 fs-14">Anderson Vanhron</h5>
                                                            <p class="mb-0 text-muted fs-12">online</p>
                                                        </div><!--end media-body-->
                                                    </div>                     
                                                </div><!--end col-->
                                                <div class="col-auto">                      
                                                    <div class="d-none d-sm-inline-block align-self-center">
                                                        <a href="pages-profile.html" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" data-bs-custom-class="tooltip-primary"><i class="iconoir-media-image fs-18"></i></a>
                                                        <a href="pages-profile.html" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Attachment" data-bs-custom-class="tooltip-primary"><i class="iconoir-attachment fs-18"></i></a>
                                                        <a href="pages-profile.html" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" data-bs-custom-class="tooltip-primary"><i class="iconoir-calendar fs-18"></i></a>
                                                        
                                                        <div class="dropdown d-inline-block">
                                                            <a class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" href="pages-profile.html#" role="button" aria-haspopup="false" aria-expanded="true">
                                                                <i class="iconoir-more-vert fs-18"></i>
                                                            </a>
                                                            <div class="pb-0 dropdown-menu dropdown-menu-end" >
                                                                <a class="dropdown-item" href="pages-profile.html#">Profile</a>
                                                                <a class="dropdown-item" href="pages-profile.html#">Add archive</a>
                                                                <a class="dropdown-item" href="pages-profile.html#">Delete</a>
                                                                <a class="dropdown-item text-danger" href="pages-profile.html#">Block</a>
                                                            </div>
                                                        </div>                                                       
                                                    </div>                  
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="pt-0 card-body">  
                                            <form action="pages-profile.html">
                                                <div class="">
                                                    <textarea class="mb-2 form-control" id="post-1" rows="5" placeholder="Write here.."></textarea>
                                                    <button type="button" class="btn btn-primary">Post</button>
                                                </div>
                                            </form>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->  
                                <div class="col-12">                                            
                                    <div class="card">
                                        <div class="card-body">                                                                                          
                                            <img src="assets/images/extra/card/post-1.jpg" alt="" class="img-fluid">
                                            <div class="mt-3 post-title">
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="badge bg-primary-subtle text-primary">Natural</span>
                                                    </div><!--end col-->
                                                    <div class="col-auto">
                                                        <span class="text-muted"><i class="far fa-calendar me-1"></i>02 July 2024</span>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                               
                                                <h5 href="#" class="my-3 fs-20 fw-bold d-block">There is nothing more beautiful than nature.</h5>
                                                <span class="px-3 py-2 rounded fs-15 bg-light">Taking pictures is savouring life intensely.</span>
                                                <p class="mt-3 fs-15">It is a long established fact that a reader will be distracted by the readable content of 
                                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                                    more-or-less normal distribution of letters, as opposed to using 
                                                    'Content here, content here', making it look like readable English. 
                                                    Many desktop publishing packages and web page editors now use Lorem Ipsum 
                                                    as their default model text, and a search for 'lorem ipsum' will uncover many
                                                     web sites still in their infancy. 

                                                </p>
                                                <blockquote class="blockquote border-start ps-4">
                                                    <p class="fs-18"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                                    <footer class="mt-1 blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                </blockquote>
                                                <p class="fs-15">Taking pictures is savouring life intensely, every hundredth of a second – Marc Riboud.
                                                    Joy in looking and comprehending is nature’s most beautiful gift.</p>
                                                <p class="mb-0 fs-15">It is a long established fact that a reader will be distracted by the readable content of 
                                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                                    more-or-less normal distribution of letters, as opposed to using 
                                                    'Content here, content here', making it look like readable English. 
                                                    Many desktop publishing packages and web page editors now use Lorem Ipsum 
                                                    as their default model text, and a search for 'lorem ipsum' will uncover many
                                                     web sites still in their infancy. 

                                                </p>
                                            </div>
                                        </div>
                                        <div class="pt-0 card-body">
                                            <div class="mb-3 row">
                                                <div class="col">
                                                    <p class="mb-0 text-dark fw-semibold">Artical tags</p>
                                                </div>
                                            </div>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Music</span>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Animals</span>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Natural</span>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Food</span>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Fashion</span>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Helth</span>
                                            <span class="px-3 py-2 badge bg-light text-dark fw-semibold">Charity</span>
                                        </div>
                                    </div>   
                                    <div class="card">
                                        <div class="pb-0 card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0 text-dark fw-semibold">Comments (205)</p>
                                                </div><!--end col-->
                                            </div><!--end row-->    
                                        </div><!--end card-body-->  
                                        <div class="card-body border-bottom-dashed"> 
                                            <ul class="mb-0 list-unstyled">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-md rounded-circle">
                                                        </div><!--end col-->
                                                        <div class="col">
                                                            <div class="p-3 rounded bg-light ms-n2 bg-light-alt">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p class="mb-2 text-dark fw-semibold">Martin Luther</p>
                                                                    </div><!--end col-->
                                                                    <div class="col-auto">
                                                                        <span class="text-muted"><i class="far fa-clock me-1"></i>30 min ago</span>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->                                                                
                                                                <p>It is a long established fact that a reader will be distracted by the 
                                                                    readable content of a page when looking at its layout. The point of 
                                                                    using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                                                    as opposed to using 'Content here, content here', making it look like readable English.
                                                                </p>
                                                                <a href="pages-profile.html#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                    <ul class="list-unstyled ms-5">
                                                        <li>
                                                            <div class="mt-3 row">
                                                                <div class="col-auto">
                                                                    <img src="assets/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                </div><!--end col-->
                                                                <div class="col">
                                                                    <div class="p-3 rounded bg-light ms-n2 bg-light-alt">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <p class="mb-2 text-dark fw-semibold">Metrica Author</p>
                                                                            </div><!--end col-->
                                                                            <div class="col-auto">
                                                                                <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->                                                                
                                                                        <p>It is a long established fact that a reader will be distracted by the 
                                                                            readable content of a page when looking at its layout. 
                                                                        </p>
                                                                        <p class="mb-0">Thank you</p>
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                                        </div><!--end col-->
                                                        <div class="col">
                                                            <div class="p-3 rounded bg-light ms-n2 bg-light-alt">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p class="mb-2 text-dark fw-semibold">Joseph Rust</p>
                                                                    </div><!--end col-->
                                                                    <div class="col-auto">
                                                                        <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->                                                                
                                                                <p>Is it a long established fact that a reader will be distracted by the 
                                                                    readable content of a page when looking at its layout?
                                                                </p>
                                                                <a href="pages-profile.html#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row--> 
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="thumb-md rounded-circle">
                                                        </div><!--end col-->
                                                        <div class="col">
                                                            <div class="p-3 rounded bg-light ms-n2 bg-light-alt">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p class="mb-2 text-dark fw-semibold">Matt Rosales</p>
                                                                    </div><!--end col-->
                                                                    <div class="col-auto">
                                                                        <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->                                                                
                                                                <p>Is it a long established fact that a reader will be distracted by the 
                                                                    readable content of a page when looking at its layout?
                                                                </p>
                                                                <a href="pages-profile.html#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                    <ul class="list-unstyled ms-5">
                                                        <li>
                                                            <div class="mt-3 row">
                                                                <div class="col-auto">
                                                                    <img src="assets/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                </div><!--end col-->
                                                                <div class="col">
                                                                    <div class="p-3 rounded bg-light ms-n2 bg-light-alt">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <p class="mb-2 text-dark fw-semibold">Metrica Author</p>
                                                                            </div><!--end col-->
                                                                            <div class="col-auto">
                                                                                <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->                                                                
                                                                        <p>It is a long established fact that a reader will be distracted by the 
                                                                            readable content of a page when looking at its layout. 
                                                                        </p>
                                                                        <p class="mb-0">Thank you</p>
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </li>
                                                    </ul> 
                                                </li>
                                            </ul> 
                                        </div><!--end card-body--> 
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0 text-dark fw-semibold">Leave a comment</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body--> 
                                        <div class="pt-0 card-body">
                                            <form>
                                                <div class="mb-3 form-group">
                                                    <textarea class="form-control" rows="5" id="leave_comment" placeholder="Message"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-end">
                                                        <button type="submit" class="px-4 btn btn-primary">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!--end card-body-->             
                                    </div> <!--end card-->  
                                </div><!--end col-->                                                
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