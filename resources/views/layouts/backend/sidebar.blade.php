  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('hero.index') }}" class="brand-link">
          <img src="{{ asset('backend/dist/img/healthcenter.jpg') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin Health Center</span>
      </a>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('hero.index') }}" class="nav-link">
                              <i class="nav-icon fas fa-home"></i>
                              <p>
                                  Dashboard
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('aboutus.index') }}" class="nav-link">
                              <i class="nav-icon fas fa-users"></i>
                              <p>
                                  About Us
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('tenagakerja.index') }}" class="nav-link">
                              <i class="nav-icon fas fa-briefcase"></i>
                              <p>
                                  Tenaga Kerja
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('gallery.index') }}" class="nav-link">
                              <i class="nav-icon fas fa-image"></i>
                              <p>
                                  Gallery
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-history"></i>
                              <p>
                                  Sejarah
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-share-alt"></i>
                              <p>
                                  Social Media
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-handshake"></i>
                              <p>
                                  Partners
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-toolbox"></i>
                              <p>
                                  Services
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-comments"></i>
                              <p>
                                  Testimonials
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
      </div>
  </aside>
  <!-- /.control-sidebar -->
