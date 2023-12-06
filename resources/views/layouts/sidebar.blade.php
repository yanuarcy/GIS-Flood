@php
    $currentRouteName = Route::currentRouteName();
@endphp

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item @if ($currentRouteName == 'Dashboard') active @endif">
            <a class="nav-link " href="{{ route('Dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Overview</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item @if ($currentRouteName == 'Map') active @endif">
            <a class="nav-link " href="{{ route('Map') }}">
                <i class="bi bi-map"></i>
                <span>Map</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Overview</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Tables.FloodArea') }}">
                        <i class="bi bi-circle"></i><span>Flood Area</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Overview</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Charts.FloodArea') }}">
                        <i class="bi bi-circle"></i><span>Flood Area</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Charts Nav -->

        <!-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-remix.html">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-boxicons.html">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li>End Icons Nav -->



    </ul>

</aside>
