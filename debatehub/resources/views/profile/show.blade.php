<x-app-layout>
    
    <section class="section profile">

        <x-slot name="header">
            <div class="pagetitle">
                <h1>{{ __('My Profile')}} </h1>
                <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
                </nav>
            </div>
        </x-slot>

        <div class="row">
          <div class="col-xl-4">
  
            <!-- Profile Card -->
            @livewire('UserProfileCard', ['user' => $user], key($user->id))
            <!-- End Profile Card -->
  
          </div>
  
          <div class="col-xl-8">
  
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
  
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>
  
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>
  
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                  </li>
  
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                  </li>
  
                </ul>
                <div class="tab-content pt-2">
  
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      @livewire('ProfileDetails', ['user' => $user], key($user->id))
                  </div>
  
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
  
                    <!-- Profile Edit Form -->
                    @livewire('EditUserProfileForm', ['user' => $user], key($user->id))
                    <!-- End Profile Edit Form -->
  
                  </div>
  
                  <div class="tab-pane fade pt-3" id="profile-settings">
  
                    <!-- Settings Form -->
                    @livewire('UserSettingsForm', ['user' => $user], key($user->id))
                    <!-- End settings Form -->
  
                  </div>
  
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    @livewire('UserPasswordChangeForm', ['user' => $user], key($user->id))
                    <!-- End Change Password Form -->
  
                  </div>
  
                </div><!-- End Bordered Tabs -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
</x-app-layout>
