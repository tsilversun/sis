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
          
               

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>