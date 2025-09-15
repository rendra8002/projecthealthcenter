  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/healthcenter.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Health Center</span>
    </a>
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('hero.index') }}" class="nav-link {{ request()->routeis('hero.index','hero.create','hero.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('aboutus.index') }}" class="nav-link {{ request()->routeis('aboutus.index','aboutus.create','aboutus.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                About Us
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeis('services.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Services
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gallery.index') }}" class="nav-link {{ request()->routeis('gallery.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Gallery
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('testimonials.index') }}" class="nav-link {{ request()->routeis('testimonials.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Testimonial
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('sejarah.index') }}" class="nav-link {{ request()->routeis('sejarah.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Sejarah
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tenagakerja.index') }}" class="nav-link {{ request()->routeis('tenagakerja.index','tenagakerja.edit','tenagakerja.create') ? 'active' : '' }}">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Tenaga Kerja
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('partners.index') }}" class="nav-link {{ request()->routeis('partners.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Partners
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('mediasocial.index') }}" class="nav-link {{ request()->routeis('mediasocial.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-share-alt"></i>
              <p>
                Media Social
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- end Main Sidebar Container -->