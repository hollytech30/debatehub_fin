<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#{{$nTarget}}-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>{{$nTitle}}</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="{{$nTarget}}-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
     
    @foreach($nOptions as $option)
        <li>
            <a href="{{ route($option['route']) }}">
                <i class="bi bi-circle"></i>
                <span>{{ $option['title'] }}</span>
            </a>
        </li>
    @endforeach
      
    </ul>
  </li><!-- End {{$nTitle}} Nav -->