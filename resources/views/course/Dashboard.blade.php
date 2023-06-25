<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="CSS/sis-logo.png" width="50" height="40" alt="logo" > SIS
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="Dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="./Student/Student.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-user-graduate me-2"></i>Students</a>
                <a href="Courses.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-thin fa-scroll me-2"></i>Courses</a>
                <a href="Users.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-users fa-scroll me-2"></i>Users</a>
                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{ Admin }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#user">Profile</a></li>                              
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">{numbers}</h3>
                                <p class="fs-5">Courses</p>
                            </div>
                            <i class="fas fa-thin fa-scroll fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">{number}</h3>
                                <p class="fs-5">Students</p>
                            </div>
                            <i class="fas fa-user-graduate fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                   
                </div>

                <div class="container">
                    <div class="chat-wrapper">
                        <div id="calendar" >
 
                        </div>
                    </div>
                </div>

            </div>
              <!-- Add/Edit User -->
    <div class="modal fade" tabindex="-1" id="user">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
          
            <div class="modal-body p-4">
                <form @submit="students" novalidate class="studentform">
                    <form>
                        <div class="col">
                            <label for="">First Name</label><br>
                            <input type="text" class="form-control mb-3" >
                        </div>
                        <div class="col">
                            <label for="">Last Name</label><br>
                            <input type="text" class="form-control mb-3" >
                        </div>
                        <div class="col">
                            <label for="">Email</label><br>
                            <input type="text" class="form-control mb-3" >
                        </div>
                        <div class="col">
                            <label for="">Password</label><br>
                            <input type="text" class="form-control mb-3" >
                        </div>
                        <div class="col">
                            <label for="">User Type</label><br>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select User</option>
                                <option value="1">Admin</option>
                                <option value="2">Staff</option>
                              </select>
                        </div>       
                        <div class="col">
                            <label for="">Course</label><br>
                            <input type="file" class="form-control mb-3" >
                        </div>      
                                  
                    </from>
                  
                    <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-info float-end mt-3 me-2">Save</button>
                </form> 
            </div>
  
          </div>
        </div>
    </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
