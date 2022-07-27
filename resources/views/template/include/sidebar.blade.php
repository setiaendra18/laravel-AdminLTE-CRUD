  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/') }}" class="brand-link">
          <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ url('adminlte/img/icon/android-icon-48x48.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                  <li class="nav-item">
                      <a href="{{ route('produk') }}" class="nav-link {{ request()->is('produk') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-cubes"></i>
                          <p>Produk</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('kategori-produk') }}" class="nav-link {{ request()->is('kategori-produk') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-file"></i>
                    
                          <p> Kategori Produk</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('alamat') }}" class="nav-link {{ request()->is('alamat') ? 'active' : '' }}">
                      <i class="nav-icon far fa-circle"></i>
                        <p> Alamat API</p>
                    </a>
                </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
