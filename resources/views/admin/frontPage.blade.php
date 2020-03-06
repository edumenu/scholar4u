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
                    Number of user accounts/profiles: 
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-ribbon statIcon" style="color: purple;"></i>
              </div>
                <div class="card-footer text-muted">
                    Number of scholarships:
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-id statIcon" style="color: green;"></i>
              </div>
              <div class="card-footer text-muted">
                    Number of Admin accounts:
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card statCard">
              <div class="card-body text-center">
                <i class="pe-7s-comment statIcon" style="color: orange;"></i>
              </div>
                <div class="card-footer text-muted">
                    Number of discussion posts:
                </div>
            </div>
        </div>
    </div>

<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="content">
            <h1 class="text-center">Matches</h1>
             <div class="toolbar">
                 <!--        Here you can write extra buttons/actions for the toolbar              -->
             </div>
                <div class="fresh-datatables">
                 <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                   <thead>
                     <tr>
                       <th>Name</th>
                       <th>Position</th>
                       <th>Office</th>
                       <th>Age</th>
                       <th>Start date</th>
                       <th class="disabled-sorting text-right">Actions</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Tiger Nixon</td>
                       <td>System Architect</td>
                       <td>Edinburgh</td>
                       <td>61</td>
                       <td>2011/04/25</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Garrett Winters</td>
                       <td>Accountant</td>
                       <td>Tokyo</td>
                       <td>63</td>
                       <td>2011/07/25</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Ashton Cox</td>
                       <td>Junior Technical Author</td>
                       <td>San Francisco</td>
                       <td>66</td>
                       <td>2009/01/12</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Cedric Kelly</td>
                       <td>Senior Javascript Developer</td>
                       <td>Edinburgh</td>
                       <td>22</td>
                       <td>2012/03/29</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Jena Gaines</td>
                       <td>Office Manager</td>
                       <td>London</td>
                       <td>30</td>
                       <td>2008/12/19</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Quinn Flynn</td>
                       <td>Support Lead</td>
                       <td>Edinburgh</td>
                       <td>22</td>
                       <td>2013/03/03</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Charde Marshall</td>
                       <td>Regional Director</td>
                       <td>San Francisco</td>
                       <td>36</td>
                       <td>2008/10/16</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Brenden Wagner</td>
                       <td>Software Engineer</td>
                       <td>San Francisco</td>
                       <td>28</td>
                       <td>2011/06/07</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Gavin Cortez</td>
                       <td>Team Leader</td>
                       <td>San Francisco</td>
                       <td>22</td>
                       <td>2008/10/26</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Vivian Harrell</td>
                       <td>Financial Controller</td>
                       <td>San Francisco</td>
                       <td>62</td>
                       <td>2009/02/14</td>
                       <td class="text-right">
                         <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                         <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                         <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                       </td>
                     </tr>
                     <tr>
                       <td>Timothy Mooney</td>
                       <td>Office Manager</td>
                       <td>London</td>
                       <td>37</td>
                       <td>2008/12/11</td>
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


    <div class="row">
      <div class="col-md-12">
        <div class="card ">
            <div class="header">
                <h4 class="title">Global Sales by Top Locations</h4>
                <p class="category">All products that were shipped</p>
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
                                                <img src="images/admin_images/flags/DE.png"
                                            </div>
                                        </td>
                                        <td>Germany</td>
                                        <td class="text-right">
                                            1.300
                                        </td>
                                        <td class="text-right">
                                            20.43%
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flag">
                                                <img src="images/admin_images/flags/AU.png"
                                            </div>
                                        </td>
                                        <td>Australia</td>
                                        <td class="text-right">
                                            760
                                        </td>
                                        <td class="text-right">
                                            10.35%
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
                                            7.87%
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flag">
                                                <img src="images/admin_images/flags/RO.png"
                                            </div>
                                        </td>
                                        <td>Romania</td>
                                        <td class="text-right">
                                            600
                                        </td>
                                        <td class="text-right">
                                            5.94%
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flag">
                                                <img src="images/admin_images/flags/BR.png"
                                            </div>
                                        </td>
                                        <td>Brasil</td>
                                        <td class="text-right">
                                            550
                                        </td>
                                        <td class="text-right">
                                            4.34%
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

    <div class="col-md-6">
        <div class="card ">
            <div class="header">
                <h4 class="title">Tasks</h4>
                <p class="category">Backend development</p>
            </div>
            <div class="content">
                <div class="table-full-width">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
          <div class="checkbox">
                <input id="checkbox30" type="checkbox">
                <label for="checkbox30"></label>
              </div>
                                </td>
                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
          <div class="checkbox">
                <input id="checkbox32" type="checkbox">
                <label for="checkbox32"></label>
              </div>
                                </td>
                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
          <div class="checkbox">
                <input id="checkbox33" type="checkbox">
                <label for="checkbox33"></label>
              </div>
                                </td>
                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
          <div class="checkbox">
                <input id="checkbox35" type="checkbox" checked>
                <label for="checkbox35"></label>
              </div>
                                </td>
                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
          <div class="checkbox">
                <input id="checkbox38" type="checkbox">
                <label for="checkbox38"></label>
              </div>
                                </td>
                                <td>Read "Following makes Medium better"</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
          <div class="checkbox">
                <input id="checkbox40" type="checkbox" checked>
                <label for="checkbox40"></label>
              </div>
                                </td>
                                <td>Unfollow 5 enemies from twitter</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
            </div>

         </div>
       </div>
    </div>
  </div>
</div>
@endsection
