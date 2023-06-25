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
                    <h2 class="fs-2 m-0">Students</h2>
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
            
            <div class="container-fluid row my-5">
                <div class="input-group rounded row">
                    <h3 class="fs-4 mb-3 col">List of Students</h3>
                    <div class="col-12 col-lg-3">  
                        <div class="col mt-2 mb-3">
                            <input type="search" v-model="search" @input="searchStud(search)" class="form-control border" placeholder="Search">
                        </div>
                    </div>
                </div>
                <div class="container justify-content-sm-start my-2 mb-2">
                    <a class="btn btn-outline-primary float-end" href="Add.html" role="button">Add Student</a>
                </div>
                
                <div class="container">
                    <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col" >Date Created</th>
                                <th scope="col">Student Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                               
                            </tr>
                        </thead>
                        <tbody id="tbl" class="text-center">
                            <tr v-for="stud in studs">
                                <td>no.</td>
                                <td>date created </td>
                                <td>Student id </td>
                                <td> Lname, Fname Mname </td>
                                <td> course </td>
                                <td> stat </td>
                                
                                <td>
                                    <a class="btn btn-light " href="StDetails.html" role="button">View</a>

                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
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
    <!-- /#page-content-wrapper -->
    </div>