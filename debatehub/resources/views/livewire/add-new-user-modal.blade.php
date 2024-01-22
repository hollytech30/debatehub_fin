<div>
    {{-- In work, do what you enjoy. --}}

  <x-button wire:click="toggleUserModal">
    <i class="bi bi-plus me-1"></i>Add User
  </x-button>

  <x-dialog-modal wire:model="showUserModal">
    <x-slot name="title">
        Add New User
    </x-slot>

    <x-slot name="content" style="z-1000">
        <form wire:submit.prevent="createUser">
            <!-- Form fields go here -->






          
            <p class="text-center small">Enter user details to create account</p>

                <div class="col-12">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" wire:model.live="name" class="form-control" id="name">
                  <div class="invalid-feedback">Please, enter user's name!</div>
                  @error('name') <div class="error" style="color:red;">{{ $message }}</div> @enderror
                </div>

                <div class="col-12">
                  <label for="userEmail" class="form-label">Email</label>
                  <input type="email" wire:model="email" class="form-control" id="email">
                  @error('email') <div class="error" style="color:red;">{{ $message }}</div> @enderror
                </div>

                <div class="col-12">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" wire:model="password" class="form-control" id="password">
                  @error('password') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>

    
        













            <!-- ... -->
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="closeUserModal">
            Cancel
        </x-secondary-button>

        <x-button type="submit" wire:click="createUser">
            Create User
        </x-button>
    </x-slot>
  </x-dialog-modal>


</div>
