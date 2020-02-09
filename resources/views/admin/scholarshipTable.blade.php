@extends('layouts.admin_layout')

@section('content')

<div class="main-content">
    <div class="container-fluid">

      <div class="nav-container tableIcon">
         <ul class="nav nav-icons" role="tablist">
             <li class="active">
                 <a href="#description-logo" role="tab" data-toggle="tab">
                     <i class="fa fa-info-circle" style="font-size: 1.3em;"></i><br>
                     Saved Scholarships
                 </a>
             </li>
             <li>
                 <a href="#map-logo" role="tab" data-toggle="tab">
                     <i class="fa fa-map-marker" style="font-size: 1.3em;"></i><br>
                     Applied Scholarships
                 </a>
               </li>
             <li class="">
                 <a href="#legal-logo" role="tab" data-toggle="tab">
                     <i class="fa fa-legal" style="font-size: 1.3em;"></i><br>
                     Not Interested
                 </a>
             </li>
         </ul>
     </div>



     <div class="tab-content">
         <div class="tab-pane active" id="description-logo">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="content">
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
         </div>


         <div class="tab-pane" id="map-logo">
             <div class="card">
               <div class="row">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="content">
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
                           <tfoot>
                             <tr>
                               <th>Name</th>
                               <th>Position</th>
                               <th>Office</th>
                               <th>Age</th>
                               <th>Start date</th>
                               <th class="text-right">Actions</th>
                             </tr>
                           </tfoot>
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
             </div>
         </div>


         <div class="tab-pane" id="legal-logo">
             <div class="card">
                 <div class="header">
                     <h4 class="title">Legal items</h4>
                     <p class="category">More information here</p>
                 </div>

                 <div class="content">
                     <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.</p>
                     <p>Larger, yet dramatically thinner.It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                 </div>
             </div>
         </div>

     </div> <!-- end tab content -->





    </div>
</div>
@endsection
