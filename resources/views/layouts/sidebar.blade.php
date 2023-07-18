<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{asset('assets/images/default.png')}}" alt="" style="width: 100%;height: 100%;" />
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                    <a href="/dashboard" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item {{ Request::is('memberlist*') ? 'active' : '' }}">
                    <a href="/memberlist" class="sidebar-link">
                        <i data-feather="users" width="20"></i>
                        <span>Member</span>
                    </a>
                </li> --}}
                <li class="sidebar-item {{ Request::is('latihan*') ? 'active' : '' }}">
                    <a href="/latihan" class="sidebar-link">
                        <i data-feather="folder" width="20"></i>
                        <span>Latihan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('jadwal*') ? 'active' : '' }}">
                    <a href="/jadwal/detail" class="sidebar-link">
                        <i data-feather="folder" width="20"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('coach*') ? 'active' : '' }}">
                    <a href="/coach" class="sidebar-link">
                        <i data-feather="user" width="20"></i>
                        <span>Coach</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('penilaian*') ? 'active' : '' }}">
                    <a href="/penilaian" class="sidebar-link">
                        <i data-feather="star" width="20"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('paket*') ? 'active' : '' }}">
                    <a href="/paket" class="sidebar-link">
                        <i data-feather="package" width="20"></i>
                        <span>Paket</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('transaksi*') ? 'active' : '' }}">
                    <a href="/transaksi" class="sidebar-link">
                        <i data-feather="dollar-sign" width="20"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('suplemen*') ? 'active' : '' }}">
                    <a href="/suplemen" class="sidebar-link">
                        <i data-feather="package" width="20"></i>
                        <span>Suplemen</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('belisuplemen*') ? 'active' : '' }}">
                    <a href="/belisuplemen" class="sidebar-link">
                        <i data-feather="shopping-bag" width="20"></i>
                        <span>Transaksi Suplemen</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>