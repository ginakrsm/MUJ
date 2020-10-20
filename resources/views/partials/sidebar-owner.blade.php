  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{url('/owner')}}">
                <img src="{{asset('logo.png')}}" style="width:500px; height:700px;" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                    data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/owner')}}" role="button" aria-expanded="true"
                          aria-controls="navbar-dashboards">
                          <i class="ni ni-book-bookmark text-orange"></i>
                          <span class="nav-link-text">Report</span>
                      </a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</nav>