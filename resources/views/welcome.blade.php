@extends('layouts.app')

@section('content')

<!-- slider_area_start -->
<div class="slider_area">
  <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-xl-9">
                  <div class="slider_text text-center">
                      <h3>Over 24000 scholarships at your finger tips</h3>
                      <div>
                        @guest
                        <a class="searchButton" href="{{ route('login') }}">
                          Login
                        </a>
                        @endguest
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- slider_area_end -->

<!-- core_features_start -->
<div class="core_features">
  <div class="container">
      <div class="border-bottm">
          <div class="row">
              <div class="col-xl-6 col-md-6">
                  <div class="featuures_heading">
                      <h3>Core Features</h3>
                  </div>
              </div>
              <div class="col-xl-6 col-md-6">
                  <div class="featurest_tabs ">
                      <nav>
                          <div class="nav" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                  href="#nav-home" role="tab" aria-controls="nav-home"
                                  aria-selected="true">Features</a>
                              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                  href="#nav-profile" role="tab" aria-controls="nav-profile"
                                  aria-selected="false">Advanced Features</a>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-12">
              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                      aria-labelledby="nav-home-tab">
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="single_features">
                                  <div class="icon"><i class="flaticon-browser"></i></div>
                                  <div class="features_info">
                                      <h4>
                                          24,000 Scholarships available to you
                                      </h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="single_features">
                                  <div class="icon blue"><i class="flaticon-security"></i></div>
                                  <div class="features_info">
                                      <h4>
                                          Discussion Board available to all users
                                      </h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="single_features">
                                  <div class="icon pink"><i class="flaticon-like"></i></div>
                                  <div class="features_info">
                                      <h4>
                                          Interactive calendar available to users
                                      </h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="single_features">
                                  <div class="icon yellow"><i class="flaticon-lock"></i></div>
                                  <div class="features_info">
                                      <h4>
                                          Personal Inbox available to users
                                      </h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                          incididunt ut labore et dolore magna aliqua</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="single_features">
                                  <div class="icon"><i class="flaticon-browser"></i></div>
                                  <div class="features_info">
                                      <h4>
                                          Personalize scholarship application service
                                      </h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="single_features">
                                  <div class="icon blue"><i class="flaticon-security"></i></div>
                                  <div class="features_info">
                                      <h4>
                                          Advanced search for scholarships
                                      </h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua</p>
                                  </div>
                              </div>
                          </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- core_features_end -->


<!-- Packages -->
<div class="package_prsing_area">
 <div class="container">
     <div class="row">
         <div class="col-xl-4 col-md-6 col-lg-4">
             <div class="single_prising">
                 <div class="prising_header">
                     <h3>Basic</h3>
                 </div>
                 <div class="middle_content">
                     <div class="list">
                         <ul>
                             <li>Scholarship Search</li>
                             <li>Access to calendar</li>
                             <li>Access to discussion board</li>
                         </ul>
                     </div>
                     <p class="prise">Start from <span>$5</span></p>
                     <div class="start_btn text-center">
                         <a class="boxed_btn_green" href="#">
                             Start Now
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-xl-4 col-md-6 col-lg-4">
             <div class="single_prising">
                 <div class="prising_header deep">
                     <h3>Elite</h3>
                 </div>
                 <div class="middle_content">
                     <div class="list">
                         <ul>
                             <li>Access to personal emails</li>
                             <li>More than 10 posts per month</li>
                             <li>Apply for 5 scholarships per day</li>
                         </ul>
                     </div>
                     <p class="prise">Start from <span>$10</span></p>
                     <div class="start_btn text-center">
                         <a class="boxed_btn_green" href="#">
                             Start Now
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-xl-4 col-md-6 col-lg-4">
             <div class="single_prising">
                 <div class="prising_header yellow">
                     <h3>Premium</h3>
                 </div>
                 <div class="middle_content">
                     <div class="list">
                         <ul>
                             <li>Step by step process for scholarship application</li>
                             <li>Unlimited calendar events</li>
                             <li>Unlimited discussion board posts</li>
                         </ul>
                     </div>
                     <p class="prise">Start from <span>$20</span></p>
                     <div class="start_btn text-center">
                         <a class="boxed_btn_green" href="#">
                             Start Now
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- /Packages -->

<!-- Stats -->
<div class="about_boxes">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_box">
                    <h3>24,000</h3>
                    <p>Number of scholarships</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_box">
                    <h3>200</h3>
                    <p>Number of clients served</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_box">
                    <h3>580,000</h3>
                    <p>Students who need scholarships</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Stats -->

<!-- faq_area_start -->
<div class="faq_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="accordion_heading">
                    <h3>Frequently Ask Question</h3>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="flaticon-info"></i> How often do you update scholarship list?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="flaticon-info"></i> How does the premium service work?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <i class="flaticon-info"></i> Will I get a refund after subscribing for premium
                                    service?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                let god moving. Moving in fourth air night bring upon
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading_4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                    <i class="flaticon-info"></i> What do I do to reset my password?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading_5">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                    <i class="flaticon-info"></i> What if my profile doesn't match any scholarship?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_5" class="collapse" aria-labelledby="heading_5" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq_area_end -->

@endsection
