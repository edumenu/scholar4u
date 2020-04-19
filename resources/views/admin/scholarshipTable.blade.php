@extends('layouts.admin_layout')

@section('content')

<div class="main-content">
    <h2 class="text-danger"> All scholarships will be retrieved from an external scholarship api which I do not have access to yet.</h2>
    <div class="container-fluid">

      <div class="nav-container tableIcon">
         <ul class="nav nav-icons" role="tablist">
             <li class="active">
                 <a href="#description-logo" role="tab" data-toggle="tab">
                     <i class="fa fa-floppy-o" style="font-size: 1.3em;"></i><br>
                     Saved Scholarships
                 </a>
             </li>
             <li>
                 <a href="#map-logo" role="tab" data-toggle="tab">
                     <i class="fa fa-check-square-o" style="font-size: 1.3em;"></i><br>
                     Applied Scholarships
                 </a>
               </li>
             <li class="">
                 <a href="#legal-logo" role="tab" data-toggle="tab">
                     <i class="fa fa-times" style="font-size: 1.3em;"></i><br>
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
                             <th>Start date</th>
                             <th>Award</th>
                             <th>Deadline</th>
                             <th class="disabled-sorting text-right">Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>NSF Graduate Research Fellowship</td>
                           <td>2010/04/25</td>
                           <td>$55000</td>
                           <td>2011/04/25</td>
                           <td class="text-right">
                             <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                             <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                             <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                           </td>
                         </tr>
                         <tr>
                             <td>City Year - Volunteer for America</td>
                             <td>2010/03/25</td>
                             <td>$3000</td>
                             <td>2011/06/15</td>
                             <td class="text-right">
                                 <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                 <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                 <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                             </td>
                         </tr>
                         <tr>
                           <td>El Café del Futuro Scholarship</td>
                           <td>2010/02/25</td>
                           <td>$5300</td>
                           <td>2011/04/15</td>
                           <td class="text-right">
                             <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                             <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                             <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                           </td>
                         </tr>
                         <tr>
                             <td>Apple Scholarship</td>
                             <td>2010/04/12</td>
                             <td>$1000</td>
                             <td>2011/04/05</td>
                             <td class="text-right">
                                 <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                 <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                 <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                             </td>
                         </tr>
                         <tr>
                           <td>Coca Cola Scholarship</td>
                           <td>2010/07/15</td>
                           <td>$8000</td>
                           <td>2011/08/26</td>
                           <td class="text-right">
                             <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                             <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                             <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                           </td>
                         </tr>
                         <tr>
                             <td>Starbucks Scholarship</td>
                             <td>2010/09/27</td>
                             <td>$5000</td>
                             <td>2011/07/22</td>
                             <td class="text-right">
                                 <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                 <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                 <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                             </td>
                         </tr>
                         <tr>
                           <td>Microsoft Scholarship</td>
                           <td>2010/07/46</td>
                           <td>$66000</td>
                           <td>2011/08/28</td>
                           <td class="text-right">
                             <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                             <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                             <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                           </td>
                         </tr>
                         <tr>
                             <td>Lenovo Scholarship</td>
                             <td>2010/04/25</td>
                             <td>$3000</td>
                             <td>2011/07/07</td>
                             <td class="text-right">
                                 <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                 <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                 <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                             </td>
                         </tr>
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


         <div class="tab-pane" id="legal-logo">
             <div class="card">
                 <div class="header">
                     <p class="category">This table is empty at the moment</p>
                 </div>

                 <div class="content">
{{--                     <p>The fid aluminum enclosure in a remarkable, simplified design.</p>--}}
                  </div>
             </div>
         </div>

     </div> <!-- end tab content -->





    </div>
</div>
@endsection
