<div>
    <div class="card">
        <p>Because she competes with no one, no one can compete with her.</p>

        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <img src="{{ $user->profile_photo_url }}" alt="Profile" class="rounded-circle">
          @endif
          <h2>{{$user->name}}</h2>
          <h3>Web Designer</h3>
          
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
</div>
