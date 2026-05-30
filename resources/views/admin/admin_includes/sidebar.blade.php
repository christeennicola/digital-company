<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dash.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dash.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Content Management
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
            aria-expanded="true" aria-controls="collapseServices">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Services</span>
        </a>
        <div id="collapseServices" class="collapse" aria-labelledby="headingServices" data-parent="#accordionSidebar">
            <div class="submenu-list">
                <!-- الخيارات الفرعية -->
                <a class="submenu-item" href="{{ route('service.index') }}">
                    <span class="bullet">•</span> Show Services
                </a>
                <a class="submenu-item" href="{{ route('service.create') }}">
                    <span class="bullet">•</span> Add Service
                </a>
            </div>
        </div>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePorto"
            aria-expanded="true" aria-controls="collapsePorto">
            <i class="fas fa-briefcase"></i>
            <span>Portfolio</span>
        </a>
        <div id="collapsePorto" class="collapse" aria-labelledby="headingPorto" data-parent="#accordionSidebar">
            <div class="submenu-list">
                <!-- الخيارات الفرعية -->
                <a class="submenu-item" href="{{ route('porto.index') }}">
                    <span class="bullet">•</span> Show Portfolio
                </a>
                <a class="submenu-item" href="{{ route('porto.create') }}">
                    <span class="bullet">•</span> Add Portfolio
                </a>
            </div>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
            aria-expanded="true" aria-controls="collapseBlog">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Blog</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
            <div class="submenu-list">
                <!-- الخيارات الفرعية -->
                <a class="submenu-item" href="{{ route('blog.index') }}">
                    <span class="bullet">•</span> Show Blog
                </a>
                <a class="submenu-item" href="{{ route('blog.create') }}">
                    <span class="bullet">•</span> Add Blog
                </a>
            </div>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
            <div class="submenu-list">
                <!-- الخيارات الفرعية -->
                <a class="submenu-item" href="{{ route('user.index') }}">
                    <span class="bullet">•</span> Show User
                </a>
            </div>
        </div>

    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Communications
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('message.index') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Messages</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <a href="{{ url('/') }}"
            class="btn btn-secondary rounded-circle border-0 d-inline-flex align-items-center justify-content-center"
            style="width: 40px; height: 40px;">
            <i class="fas fa-arrow-left"></i></a>
    </div>

</ul>
