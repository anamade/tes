<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('AdminLTE-3/dist/img/narasumber.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Narassumber.id</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE-3/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>
          <li class="nav-header bg-danger">MENU BARANG</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-cubes"></i>
              <p>
                PERSEDIAAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  
                  <p>Persediaan Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  
                  <p>Stock Opname</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-puzzle-piece"></i>
              <p>
                Assembling
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Assembling</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-clock-rotate-left"></i>
              <p>
                Produksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  
                  <p>Transaksi Produksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  
                  <p>Daftar Produksi</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-wallet"></i>
              <p>
                Costing
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  
                  <p>Trasnsaksi Costing</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header bg-danger">MENU PEMBELIAN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-cart-plus"></i>
              <p>
                Pembelian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  
                  <p>Transaksi Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  
                  <p>Reture Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  
                  <p>Daftar Pemasok</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-credit-card"></i>
              <p>
                Hutang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  
                  <p>Transaksi Hutang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  
                  <p>Pembayaran Hutang</p>
                </a>
              </li>
                <li class="nav-item">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  
                  <p>Transaksi Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  
                  <p>Reture Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  
                  <p>Daftar Pemasok</p>
                </a>
              </li>
            </ul>
          </li>
            
            </ul>
          </li>

          <li class="nav-header bg-danger">MENU PENJUALAN</li>
        
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-cart-shopping"></i>
              <p>
                Penjualan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  
                  <p>Transaksi Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Retur Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Daftar Pelanggan & Sales</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-hand-holding-dollar"></i>
              <p>
                Piutang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  
                  <p>Transaksi Piutang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Pembayaran Piutang</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-header bg-danger">MENU LAIN - LAIN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-landmark"></i>
              <p>
                Kas & Bank
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  
                  <p>Transaksi Kas & Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  
                  <p>Daftar Bank</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-book"></i>
              <p>
                Jurnal
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  
                  <p>Jurnal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Saldo</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{ route('coa')}}" class="nav-link">
                  <p>Daftar Perkiraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Perkiraan Penghubung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Konsolidasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
              <p>Dafatr Laporan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-file-import"></i>
              <p>
            Import Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  
                  <p>ColudFrontdesk</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-header bg-danger">MENU PENGATURAN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-gear"></i>
              <p>
              Pengaturan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Data Perusahaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Info Versi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  
                  <p>Konsolidasi</p>
                </a>
              </li>
            </ul>
          </li>
          
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
