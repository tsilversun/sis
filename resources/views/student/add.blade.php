<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="../CSS/sis-logo.png" width="50" height="40" alt="logo" > SIS
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="../Dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="./Student.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                    <i class="fas fa-user-graduate me-2"></i>Students</a>
                <a href="../Courses.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-thin fa-scroll me-2"></i>Courses</a>
                <a href="../Users.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-users fa-scroll me-2"></i>Users</a>
                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Add Student</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               
            </nav>
            
            <div class="container-fluid my-5 rounded-5 p-4">           
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">New Student</h5><hr>
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <label for="">Student Id</label>
                                <input type="text" class="form-control mb-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="">First Name</label>
                                <input type="text" class="form-control mb-3">
                            </div>
                            <div class="col-4">
                                <label for="">Middle Name</label>
                                <input type="text" class="form-control mb-3" placeholder="(optional)">
                            </div>
                            <div class="col-4">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control mb-3">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="">Gender</label>
                                <input type="text" class="form-control mb-3">
                            </div>
                            <div class="col-4">
                                <label for="">Birthday</label>
                                <input type="date" class="form-control mb-3">
                            </div>
                            <div class="col-4">
                                <label for="">Email</label>
                                <input type="text" class="form-control mb-3">
                            </div>
                            
                        </div>
                        <label for="" class="form-label">Address</label>
                        <textarea class="form-control" id="" rows="2"></textarea>
                    </from>
                  </div>
                  <hr>
                  <div class="container justify-content-sm-start my-2 mb-2">
                    <!-- <button type="button" class="btn btn-secondary float-end border" href="Student.html">Cancel</button> -->
                    <a class="btn btn-secondary float-end me-2" href="Student.html" role="button">Cancel</a>
                    <a class="btn btn-primary float-end me-2"  role="button">Save Details</a>

                </div>                
            </div>                
               
            </div>
            
        </div>
        
    </div>
  
    </div>
    </x-app-layout>