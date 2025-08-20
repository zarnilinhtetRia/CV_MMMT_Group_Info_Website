<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MMMT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    @if (auth()->user()->role === 'user')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('blogs') }}">
                <i class="fas fa-file-alt"></i>
                <span>Blog</span></a>
        </li>
    @endif

    @if (auth()->user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('categories') }}">
                <i class="fas fa-folder"></i>
                <span>Category</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('types') }}">
                <i class="fas fa-file-alt"></i>
                <span>Type</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('blogs') }}">
                <i class="fas fa-file-alt"></i>
                <span>Products</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('service') }}">
                <i class="fas fa-file-alt"></i>


                <span>Services</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('news_admin') }}">
                <i class="fas fa-newspaper"></i>


                <span>News</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('awards') }}">
                <i class="fas fa-trophy"></i>
                <span>Our Awards</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('message') }}">
                <i class="fas fa-newspaper"></i>
                <span>Message</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('users') }}">
                <i class="fas fa-users"></i>
                <span>User Type</span></a>
        </li>
    @endif
</ul>
<!-- End of Sidebar -->
