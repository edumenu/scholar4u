@extends('layouts.admin_layout')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-users statIcon" style="color: red;"></i>
              </div>
                <div class="card-footer text-muted">
                    <strong>Number of Users: {{ $usersCount  }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-ribbon statIcon" style="color: purple;"></i>
              </div>
                <div class="card-footer text-muted">
                    <strong>Number of Scholarships: {{ $postsCount  }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-date statIcon" style="color: green;"></i>
              </div>
              <div class="card-footer text-muted">
                  <strong>Number of Calendar events: {{ $calendarEvents  }}</strong>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-comment statIcon" style="color: orange;"></i>
              </div>
                <div class="card-footer text-muted">
                    <strong>Number of Discussion posts: {{ $postsCount }}</strong>
                </div>
            </div>
        </div>
    </div>

      <div class="row">
          <div class="col-md-12">
              <div class="card ">
                  <div class="header">
{{--                      <h4 class="title">Global Sales by Top Locations</h4>--}}
                      <p class="category">Number of scholarships</p>
                  </div>
                  <div class="content">
                      <div class="row">
                          <div class="col-md-5">
                              <div class="table-responsive">
                                  <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                              <div class="flag">
                                                  <img src="/images/admin_images/flags/US.png"
                                              </div>
                                          </td>
                                          <td>USA</td>
                                          <td class="text-right">
                                              2.920
                                          </td>
                                          <td class="text-right">
                                              53.23%
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="flag">
                                                  <img src="images/admin_images/flags/GB.png"
                                              </div>
                                          </td>
                                          <td>United Kingdom</td>
                                          <td class="text-right">
                                              690
                                          </td>
                                          <td class="text-right">
                                              46.77%
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class="col-md-6 col-md-offset-1">
                              <div class="content">
                                  <div id="worldMap" class="map map-big"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="content">
               <h2 class="text-danger"> All scholarships will be retrieved from an external scholarship api which I do not have access to yet.</h2>
            <h1 class="text-center">Matches</h1>
             <div class="toolbar">
                 <!--        Here you can write extra buttons/actions for the toolbar              -->
             </div>
                <div class="fresh-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start date</th>
                            <th>Award</th>
                            <th>Deadline</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>NHCFAE Rene Matos Scholarship</td>
                            <td>2010/02/20</td>
                            <td>$700</td>
                            <td>2011/04/20</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Creativity Leads to Success Scholarship</td>
                            <td>2010/04/11</td>
                            <td>$500</td>
                            <td>2011/02/11</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Caveman Volunteer Scholarship</td>
                            <td>2010/04/25</td>
                            <td>$400</td>
                            <td>2011/04/22</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Liberty Scholarship Fund</td>
                            <td>2010/09/23</td>
                            <td>$500</td>
                            <td>2011/08/23</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
               </div>
         </div><!-- end content-->
       </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
  </div> <!-- end row -->

  </div>
</div>
@endsection
