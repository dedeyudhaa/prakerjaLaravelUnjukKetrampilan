<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Wes Makmur</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('beranda') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    @if (Auth::user()->role == 'admin')

    <li class="nav-item {{ Request::is('kategori*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('kategori') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kategori</span></a>
    </li>

    <li class="nav-item {{ Request::is('post*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('post') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Post</span></a>
    </li>

    <li class="nav-item {{ Request::is('produk*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('produk') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('user') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>User</span></a>
    </li>

        {{-- <li class="nav-item {{ Request::is('schools*') || Request::is('students*') || Request::is('books*') ? 'active' : '' }}">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Master Data</span>
            </a>
            <div id="collapseTwo" class="collapse {{ Request::is('schools*') || Request::is('students*') || Request::is('books*') ? 'show' : '' }}" aria-labelledby="headingTwo"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{ Request::is('schools*') ? 'active' : '' }}" href="{{ url('schools') }}">Data Sekolah</a>
                    <a class="collapse-item {{ Request::is('students*') ? 'active' : '' }}" href="{{ url('students') }}">Data Siswa</a>
                    <a class="collapse-item {{ Request::is('books*') ? 'active' : '' }}" href="{{ url('books') }}">Data Buku</a>
                    
                </div>
            </div>
        </li> --}}

    @elseif ( Auth::user()->role == 'editor')

    <li class="nav-item {{ Request::is('kategori*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('kategori') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kategori</span></a>
    </li>

    <li class="nav-item {{ Request::is('post*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('post') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Post</span></a>
    </li>

    <li class="nav-item {{ Request::is('produk*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('produk') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Produk</span></a>
    </li>

    @endif
        
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        
    
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>