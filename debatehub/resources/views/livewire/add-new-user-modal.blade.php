<div>
    {{-- In work, do what you enjoy. --}}
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#newUserModal">
        <i class="bi bi-plus me-1"></i>Add User
    </button>
    <!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="newUserModalLabel">Add User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-center small">Enter user details to create account</p>

            <form class="row g-3 needs-validation" novalidate="">
                <div class="col-12">
                  <label for="yourName" class="form-label">Full Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required="">
                  <div class="invalid-feedback">Please, enter user's name!</div>
                </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="yourEmail" required="">
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                </div>

                {{-- <div class="col-12">
                  <label for="yourUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="yourUsername" required="">
                    <div class="invalid-feedback">Please choose a username.</div>
                  </div>
                </div> --}}

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required="">
                  <div class="invalid-feedback">Please enter password!</div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                </div>
              </form>      
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>

</div>
