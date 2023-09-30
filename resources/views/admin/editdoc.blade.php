<base href="/public">
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
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" href="{{url('add_doctor')}}">+ Add New Doctor</a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            </div>
                        </li>
                    </ul>
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
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{url('UpdatingDoctors', $doctor->id)}}" method="POST">
                                    @csrf
                                    <div class="p-2">
                                        <label class="w-50">Doctor's Name</label>
                                        <input type="text" style="color: black;" name="name" value="{{$doctor->name}}">
                                    </div>
                                    <div class="p-2">
                                        <label class="w-50">Phone Number</label>
                                <input type="tel" style="color: black;" name="phone" placeholder="required" value="{{$doctor->phone}}">
                                    </div>
                                    <div class="p-2">
                                        <label class="w-50">PF Number</label>
                                        <input type="text" style="color: black;" name="number" placeholder="required" value="{{$doctor->number}}"> 
                                    </div>
                                  
                                    <div class="p-2">
                                        <label class="w-50">Faculty</label>
                                        <select name="faculty" style="color: black;" value="{{$doctor->faculty  }}">
                                            <option style="color: black;">Select Category Below</option>
                                            <option value="Dentist" style="color: black;">Dentist</option>
                                            <option value="Optician" style="color: black;">Optician</option>
                                            <option value="Paedriatic" style="color: black;">Paedriatic</option>
                                            <option value="General Health" style="color: black;">General Health</option>
                                            <option value="Cardiologist" style="color: black;">Cardiologist</option>
                                            <option value="Dematologist" style="color: black;">Dematologist</option>
                                            <option value="Psychologist" style="color: black;">Psychologist</option>
                                        </select>
                                    </div>
                                    <div class="p-2">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </form>
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