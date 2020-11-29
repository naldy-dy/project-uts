 @php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}

@endphp

 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{url('public')}}/assets-admin/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{checkRouteActive('beranda')}}">
        <a class="nav-link" href="{{url('admin/beranda')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Fitur
      </div>
      <li class="nav-item {{checkRouteActive('konten')}}">
        <a class="nav-link" href="{{url('admin/konten')}}">
          <i class="fa fa-rss" aria-hidden="true"></i>
          <span>Blog</span>
        </a>
      </li>
      <li class="nav-item {{checkRouteActive('buat-blog')}}">
        <a class="nav-link" href="{{url('admin/konten/create')}}">
          <i class="fa fa-plus" aria-hidden="true"></i>
          <span>Buat Blog</span>
        </a>
      </li>
      <li class="nav-item {{checkRouteActive('kategori')}}">
        <a class="nav-link" href="{{url('admin/kategori')}}">
          <i class="fa fa-list-alt" aria-hidden="true"></i>
          <span>Kategori</span>
        </a>
      </li>


      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Aksi</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Aksi Lainya</h6>
            <a class="collapse-item" href="{{url('logout')}}">LogOut</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li>
      <hr class="sidebar-divider">
    </ul>