 @include('admin.css')


 <div class="container-scroller">
     <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
             <div class="profile-pic">
                 <div class="profile-name">
                     <span>Welcome Admin</span>
                 </div>
             </div>
         </div>
         <ul class="nav">
             <!-- <li class="nav-item profile">###</li> -->
             <li class="nav-item nav-category">
                 <span class="nav-link">Navigation Bar</span>
             </li>
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{url('MyAppointments')}}">
                     <span class="menu-icon">
                         <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                     </span>
                     <span class="menu-title">Appointments</span>
                 </a>
                 <a class="nav-link" href="{{url('Viewdoctor')}}">
                     <span class="menu-icon">
                         <i class="mdi mdi-file-document-box"></i>
                     </span>
                     <span class="menu-title">Doctors</span>
                 </a>
             </li>
         </ul>
     </nav>
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
         <!-- partial:partials/_navbar.html -->
         <nav class="navbar p-0 fixed-top d-flex flex-row">
             <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                 <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
             </div>
             <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                 <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                     <span class="mdi mdi-menu"></span>
                 </button>
                 <ul class="navbar-nav navbar-nav-right">
                     <x-app-layout>

                     </x-app-layout>

                 </ul>
                 <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                     <span class="mdi mdi-format-line-spacing"></span>
                 </button>
             </div>
         </nav>
         <!-- partial -->
         <div class="main-panel">
             <div class="content-wrapper">
                 <div class="row ">
                     <div class="col-12 grid-margin">
                         <div class="card">
                             <div class="card-body">

                                 <h4 style="font-size: xx-large; text-align: center">Appointments</h4> <br>
                                 <div class="table-responsive">
                                     <table id="example" class="display" style="width:100%">
                                         <thead>
                                             <tr>
                                                 <th>Name</th>
                                                 <th>E-mail</th>
                                                 <th>Phone</th>
                                                 <th>Doctor</th>
                                                 <th>Date</th>
                                                 <th>Status</th>
                                                 <!-- <th>Edit</th>
                                                 <th>Delete</th> -->
                                             </tr>
                                             @foreach ($data as $datas)
                                         <tbody>
                                             <tr>
                                                 <td>{{$datas->name}}</td>
                                                 <td>{{$datas->email}}</td>
                                                 <td>{{$datas->phone}}</td>
                                                 <td>{{$datas->doctor}}</td>
                                                 <td>{{$datas->date}}</td>
                                                 <td>{{$datas->status}}</td>
                                                 <!-- <td>
                                                     <a class="btn btn-outline-primary" href="{{url('#')}}">Edit</a>
                                                 </td>
                                                 <td>
                                                     <a class="btn btn-outline-danger" href="{{url('DeleteAppointment', $datas->id)}}">Delete</a>
                                                 </td> -->

                                         </tbody>
                                         @endforeach
                                         <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Phone</th>
                                                <th>Doctor</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot> -->
                                         </thead>
                                     </table>

                                     <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
                                     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
                                     <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
                                     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                                     <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

                                     <script>
                                         $(document).ready(function() {
                                             $('#example').DataTable({
                                                 dom: 'Bfrtip',
                                                 buttons: [
                                                     'print'
                                                 ]
                                             });
                                         });
                                     </script>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- content-wrapper ends -->
         </div>
         <!-- main-panel ends -->
     </div>
     <!-- page-body-wrapper ends -->
 </div>
 @include('admin.script')