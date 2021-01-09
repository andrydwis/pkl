<!-- Sidebar outter -->
<div class="main-sidebar">
    <!-- sidebar wrapper -->
    <aside id="sidebar-wrapper">
        <!-- sidebar brand -->
        <div class="sidebar-brand">
            <a href="index.html">BNN Kota Malang</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">BNN</a>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <!-- menu header -->
            <li class="menu-header">Menu</li>
            <!-- menu item -->
            <li>
                <a href="{{route('init')}}"><i class="fas fa-home"></i><span>Beranda</span></a>
            </li>
            @auth
            <li>
                <a href="{{route('dashboard')}}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @if(auth()->user()->role == 'admin')
            <li>
                <a href="{{route('users.index')}}"><i class="fas fa-users"></i><span>Pegawai</span></a>
            </li>
            @endif
            @if(auth()->user()->role == 'tu')
            <li>
                <a href="{{route('data-pengaduan.index')}}"><i class="fas fa-bullhorn"></i><span>Data Pengaduan</span></a>
                <a href="{{route('data-rehabilitasi-pribadi.index')}}"><i class="fas fa-ambulance"></i><span>Data Rehabilitasi Pribadi</span></a>
            </li>
            @endif
            @endauth
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            @guest
            <a href="{{route('login')}}" class="btn btn-primary btn-lg btn-icon-split" style="width: 200px;">
                <i class="fas fa-sign-in-alt"></i> Login</a>
            @endguest
            @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger btn-lg btn-icon-split" type="submit" style="width: 200px;">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </form>
            @endauth
        </div>
    </aside>
</div>