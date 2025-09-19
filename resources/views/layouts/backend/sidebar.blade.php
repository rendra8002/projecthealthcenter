<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('hero.index') }}" class="brand-link">
        <img src="{{ asset('backend/dist/img/healthcenter.jpg') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Health Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('hero.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('aboutus.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>About Us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tenagakerja.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Tenaga Kerja</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('sejarah.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>Sejarah</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('mediasocial.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-share-alt"></i>
                        <p>Social Media</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('partners.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Partners</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-toolbox"></i>
                        <p>Services</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonials.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('appointment.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Message</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
