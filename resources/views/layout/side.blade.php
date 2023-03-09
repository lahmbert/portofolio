<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Home</li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard">
                <i class="menu-icon mdi mdi-home"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('notification')}}">
                <i class="menu-icon mdi mdi-bell"></i>
                <span class="menu-title">Notification</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('price')}}">
                <i class="menu-icon mdi mdi-format-list-bulleted"></i>
                <span class="menu-title">Daftar Harga</span>
            </a>
        </li>
        <li class="nav-item nav-category">Deposit</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('topup')}}">
                <i class="menu-icon mdi mdi-wallet"></i>
                <span class="menu-title">Top Up</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('report')}}">
                <i class="menu-icon mdi mdi-script"></i>
                <span class="menu-title">Report</span>
            </a>
        </li>
        <li class="nav-item nav-category">User Management</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('tambah')}}">
                <i class="menu-icon mdi mdi-account-multiple-plus"></i>
                <span class="menu-title">Tambah Data</span>
            </a>
        </li>
    </ul>
</nav>
