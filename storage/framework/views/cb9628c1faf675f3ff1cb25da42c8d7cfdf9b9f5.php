<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="" style="width: 100%;height: 100%;" />
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>">
                    <a href="/dashboard" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item <?php echo e(Request::is('memberlist*') ? 'active' : ''); ?>">
                    <a href="/memberlist" class="sidebar-link">
                        <i data-feather="users" width="20"></i>
                        <span>Member</span>
                    </a>
                </li>
                <li class="sidebar-item <?php echo e(Request::is('coach*') ? 'active' : ''); ?>">
                    <a href="/coach" class="sidebar-link">
                        <i data-feather="user" width="20"></i>
                        <span>Coach</span>
                    </a>
                </li>
                <li class="sidebar-item <?php echo e(Request::is('paket*') ? 'active' : ''); ?>">
                    <a href="/paket" class="sidebar-link">
                        <i data-feather="package" width="20"></i>
                        <span>Paket</span>
                    </a>
                </li>
                <li class="sidebar-item <?php echo e(Request::is('transaksi*') ? 'active' : ''); ?>">
                    <a href="/transaksi" class="sidebar-link">
                        <i data-feather="dollar-sign" width="20"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<?php /**PATH D:\Development\Joki\gym\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>