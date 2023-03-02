<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">HMJTI POLIJE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">HMJTI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class={{ request()->is('admin') || request()->is('admin/dashboard') ? 'active' : '' }}>
                <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Main</li>
            <li
                class="{{ request()->is('admin/kategori') || request()->is('admin/komentar') || request()->is('admin/artikel')? 'active' : '' }} nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Blog</span></a>
                <ul class="dropdown-menu">
                    <li class={{ request()->is('admin/artikel') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.artikel')}}">Artikel</a></li>
                    <li class={{ request()->is('admin/komentar') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.komentar')}}">Komentar</a></li>
                            @if(auth()->user()->role == 'admin')
                    <li class={{ request()->is('admin/kategori') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.kategori')}}">Kategori</a></li>
                            @endif
                </ul>
            </li>
            <li class="{{ request()->is('admin/pengurus') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('list.pengurus')}}"><i
                        class="fas fa-users"></i><span>Pengurus</span></a>
            </li>
            <li class="{{ request()->is('admin/kritik-saran') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('list.kritikSaran')}}"><i class="fas fa-comment-alt"></i><span>Kritik
                        dan Saran</span></a>
            </li>
            @if(auth()->user()->role != 'user')
            <li class="{{ request()->is('admin/google-form') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('list.form')}}"><i class="fas fa-share-alt-square"></i><span>Google Form</span></a>
            </li>
            @endif

            @if(auth()->user()->role == 'admin')
            <li class="nav-item dropdown
          {{
          request()->is('admin/departemen') ||
          request()->is('admin/biro') ||
          request()->is('admin/jabatan') ||
          request()->is('admin/periode') ||
          request()->is('admin/prodi') ||
          request()->is('admin/golongan') ||
          request()->is('admin/angkatan')
          ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class={{ request()->is('admin/departemen') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.departemen')}}">Departemen</a></li>
                    <li class={{ request()->is('admin/biro') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.biro')}}">Biro</a></li>
                    <li class={{ request()->is('admin/jabatan') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.jabatan')}}">Jabatan</a></li>
                    <li class={{ request()->is('admin/periode') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.periode')}}">Periode</a></li>
                    <li class={{ request()->is('admin/prodi') ? 'active' : '' }}><a class="nav-l]ink"
                            href="{{route('list.prodi')}}">Prodi</a></li>
                    <li class={{ request()->is('admin/golongan') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.golongan')}}">Golongan</a></li>
                    <li class={{ request()->is('admin/angkatan') ? 'active' : '' }}><a class="nav-link"
                            href="{{route('list.angkatan')}}">Angkatan</a></li>
                </ul>
            </li>
            <li class="{{ request()->is('admin/user') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('list.user')}}"><i class="fas fa-user"></i><span>Users / Admin</span></a>
            </li>
            @endif
            {{-- <li class="{{ request()->is('admin/user/edit-profile') ? 'active' : '' }}">
                <a class="nav-link"  href="{{route('editProfile.user', ['id' =>  Auth::user()->id_users])}}"><i class="fas fa-address-card"></i><span>Edit Profile</span></a>
            </li> --}}
            <hr>
            @if(auth()->user()->role == 'admin')
            <li class="menu-header">info</li>
            <li class="">
                <a class="nav-link" href="{{route('list.info')}}"><i class="fas fa-sitemap"></i><span>Informasi</span></a>
            </li>
            @endif
    </aside>
</div>
