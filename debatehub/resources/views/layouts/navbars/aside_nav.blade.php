<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    
    @include('layouts/navbars/aside_nav_item', [
        'nTarget' => 'debates', 
        'nTitle' => 'Debates',
        'nOptions' => [
            ['route'=>'dashboard','title'=>'New'],
            ['route' => 'dashboard', 'title' => 'Title 2'],
        ]
        ])
    
    @include('layouts/navbars/aside_nav_item', [
        'nTarget' => 'users', // target submenu
        'nTitle' => 'User Management', // show on menu
        'nOptions' => [
            ['route'=>'users','title'=>'Users'],
            ['route' => 'roles', 'title' => 'Roles'],
            ['route' => 'permissions', 'title' => 'Permisions'],
        ]
        ])

    

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="user/profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('appfaq')}}">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->


  </ul>