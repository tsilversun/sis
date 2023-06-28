<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Details') }}
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
                    <h2 class="fs-2 m-0"> Student Details</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               
            </nav>
            
            <div class="container-fluid rounded-5 p-4">           
                <div class="card p-3">
                  <div class="card-body">
                    <div class="card-title">                   
                        
                        <a class="btn btn-secondary float-end me-2" href="Student.html" role="button"> < Back</a>

                        <button type="button" class="btn btn-danger float-end me-2" data-bs-toggle="modal" data-bs-target="#DelStud">Delete</button>
                        <button type="button" class="btn btn-success float-end me-2" data-bs-toggle="modal" data-bs-target="#UpStat">Update Status</button>
                        <a class="btn btn-info float-end me-2" href="Update.html" role="button">Edit</a>

                        <button type="button" class="btn btn-warning float-end me-2" data-bs-toggle="modal" data-bs-target="#academic">+ Academic</button>
                        <h5>Student Details</h5>
                </div>
                    <hr>
                    <form>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="" class="fw-bold">Student Id</label><br>
                                {Student ID}
                            </div>
                            <div class="col-4">
                                <label for="" class="fw-bold">Status</label><br>
                                {Status}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="" class="fw-bold">Name</label><br>
                                {Lastname, Firstname, Middlename}
                            </div>                            
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="" class="fw-bold">Gender</label><br>
                                {Gender}
                            </div>
                            <div class="col-4">
                                <label for="" class="fw-bold">Birthdate</label><br>
                                {Birthday}
                            </div>
                            <div class="col-4">
                                <label for="" class="fw-bold">Email</label><br>
                                {Email}
                            </div>
                            
                        </div>
                        <label for="" class="fw-bold">Address</label><br>
                                {Address}
                    </from>

                  </div><hr>
                  <h5>Academic History</h5>
                  
                    <table class="table  rounded shadow-sm  table-hover ">
                        <thead class="text-center bg-success text-light">
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col" >Course</th>
                                <th scope="col">Semester/S.Y.</th>                                
                                <th scope="col">Year</th>
                                <th scope="col">Beg. of Sem Status</th>
                                <th scope="col">End of Sem Status</th>
                                <th scope="col">Action</th>
                               
                            </tr>
                        </thead>
                        <tbody id="tbl" class="text-center">
                            <tr v-for="stud in studs">
                                <td>{no.}</td>
                                <td>{course}</td>
                                <td class="px-2 py-1 align-middle">
                                    <small><span class="">{Sem}</span></small><br>
                                    <small><span class="">{SY}</span></small>
                                </td>                               
                                <td> yr </td>
                                <td> beg stat </td>
                                <td> end stst </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                         Action
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#EditAcads">Edit</a></li>
                                          <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                      </div>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                  
            </div>                
               
            </div>
            <!-- Modals -->
            <!-- Button trigger modal -->

  
  <!-- Add Academic -->
    <div class="modal fade" tabindex="-1" id="academic">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-3">
          <div class="modal-header">
              <h5>Add Academic</h5>

          </div>
          <div class="modal-body p-4">
              <form @submit="students" novalidate class="studentform">
                  <form>
                    
                      <div class="row">
                          <div class="col-6">
                              <label for="">Semester</label>
                              <select class="form-select" aria-label="Default select example">
                                  <option selected>Select Semester</option>
                                  <option value="1">First Semester</option>
                                  <option value="2">Second Semester</option>
                                </select>
                          </div>
                          <div class="col-6">
                              <label for="">School Year</label>
                              <input type="text" class="form-control mb-3" >
                          </div>                    
                      </div><div class="row">
                          <div class="col-6">
                              <label for="">Course</label>
                              <select class="form-select" aria-label="Default select example">
                                  <option selected>Select Course</option>
                                  <option value="1">{{ Course }}</option>
                                </select>
                          </div>
                          <div class="col-6">
                              <label for="">Year</label>
                              <input type="text" class="form-control mb-3" >
                          </div>                    
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <label for="">Beginning of Semester Status</label>
                              <select class="form-select" aria-label="Default select example">
                                  <option selected>Select Status</option>
                                  <option value="1">New</option>
                                  <option value="2">Regular</option>
                                  <option value="3">Transferee</option>
                                  <option value="3">Returnee</option>
                                </select>
                          </div>
                          <div class="col-6">
                              <label for="">End of Semester Status</label>
                              <select class="form-select" aria-label="Default select example">
                                  <option selected>Select Status</option>
                                  <option value="1">Completed</option>
                                  <option value="2">Dropout</option>
                                  <option value="3">Failed</option>
                                  <option value="3">Transferred Out</option>
                                  <option value="3">Graduated</option>
                                </select>
                          </div>                    
                      </div>
                  </from>
                
                  <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-info float-end mt-3 me-2">Add</button>
              </form> 
          </div>

        </div>
      </div>
    </div>
    <!-- Update Status -->
    <div class="modal fade" tabindex="-1" id="UpStat">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
                <h5>Update Status</h5>
  
            </div>
            <div class="modal-body p-4">
                <form @submit="students" novalidate class="studentform">
                    <form>
                      
                        <div class="row">
                            <div class="col">
                                <label for="">Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                  </select>
                            </div>
                           </div>
                    </from>
                  
                    <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-info float-end mt-3 me-2">Save</button>
                </form> 
            </div>
  
          </div>
        </div>
    </div>
    <!-- Delete Student -->
    <div class="modal fade" tabindex="-1" id="DelStud">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
                <h5>Confirmation</h5>
  
            </div>
            <div class="modal-body p-4">
                <p>Are you sure you want to delete this student information?</p>
                  
                    <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-end mt-3 me-2">Confirm</button>
                </form> 
            </div>
  
          </div>
        </div>
    </div>
    <!-- Edit Academic Record -->
    <div class="modal fade" tabindex="-1" id="EditAcads">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content p-3">
            <div class="modal-header">
                <h5>Update Academic</h5>
  
            </div>
            <div class="modal-body p-4">
                <form @submit="students" novalidate class="studentform">
                    <form>
                      
                        <div class="row">
                            <div class="col-6">
                                <label for="">Semester</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Semester</option>
                                    <option value="1">First Semester</option>
                                    <option value="2">Second Semester</option>
                                  </select>
                            </div>
                            <div class="col-6">
                                <label for="">School Year</label>
                                <input type="text" class="form-control mb-3" >
                            </div>                    
                        </div><div class="row">
                            <div class="col-6">
                                <label for="">Course</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Course</option>
                                    <option value="1">{{ Course }}</option>
                                  </select>
                            </div>
                            <div class="col-6">
                                <label for="">Year</label>
                                <input type="text" class="form-control mb-3" >
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="">Beginning of Semester Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Status</option>
                                    <option value="1">New</option>
                                    <option value="2">Regular</option>
                                    <option value="3">Transferee</option>
                                    <option value="3">Returnee</option>
                                  </select>
                            </div>
                            <div class="col-6">
                                <label for="">End of Semester Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Status</option>
                                    <option value="1">Completed</option>
                                    <option value="2">Dropout</option>
                                    <option value="3">Failed</option>
                                    <option value="3">Transferred Out</option>
                                    <option value="3">Graduated</option>
                                  </select>
                            </div>                    
                        </div>
                    </from>
                  
                    <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-end mt-3 me-2">Save</button>
                </form> 
            </div>
  
          </div>
        </div>
    </div>
    <!-- Delete Student Record-->
    <div class="modal fade" tabindex="-1" id="DelStud">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
                <h5>Confirmation</h5>
  
            </div>
            <div class="modal-body p-4">
                <p>Are you sure you want to delete this student's record?</p>
                  
                    <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-end mt-3 me-2">Confirm</button>
                </form> 
            </div>
  
          </div>
        </div>
    </div>
        </div>
        
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    </x-app-layout>