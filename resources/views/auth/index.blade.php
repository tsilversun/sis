<x-users-layout>

<div class="container-fluid"  id="login-student">
            <form class="mx-auto" @submit="login_student($event)">
            <h4 class="text-center">
                <img src="./CSS/sis-logo.png" width="50" height="40" alt="logo" style="background-color: white;">
                Login</h4>
                <div class="mb-3 mt-5">
                  <label for="" class="form-label">Email</label>
                  <input type="text" class="form-control fw-bold" name="email">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="password" class="form-control fw-bold" name="password">
                  
                </div>

                <button type="submit" class="btn btn-outline-success mt-5 fw-bold">Login</button>
              </form>
        </div>
</x-users-layout>