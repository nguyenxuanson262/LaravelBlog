<div class="dash-nav dash-nav-dark">
    <header>
        <a href="#!" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <a href="{{ route('admin.index') }}" class="easion-logo"><i class="fas fa-sun"></i> <span>My Admin</span></a>
    </header>
    <nav class="dash-nav-list">
        <a href="{{ route('admin.index') }}" class="dash-nav-item">
            <i class="fas fa-home"></i> Dashboard </a>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-users"></i> Users </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('admin.users.index') }}" class="dash-nav-dropdown-item">List - users</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-user-check"></i> Permissions </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('admin.permissions.index') }}" class="dash-nav-dropdown-item">Permission Lists</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-users-cog"></i> Roles </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('admin.roles.index') }}" class="dash-nav-dropdown-item">Role Lists</a>
            </div>
        </div>
{{--        <div class="dash-nav-dropdown">--}}
{{--            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">--}}
{{--                <i class="fas fa-th-list"></i> Categories </a>--}}
{{--            <div class="dash-nav-dropdown-menu">--}}
{{--                <a href="chartjs.html" class="dash-nav-dropdown-item">Chart.js</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="dash-nav-dropdown">--}}
{{--            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">--}}
{{--                <i class="fas fa-pen-nib"></i> Blogs </a>--}}
{{--            <div class="dash-nav-dropdown-menu">--}}
{{--                <a href="chartjs.html" class="dash-nav-dropdown-item">Chart.js</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="dash-nav-dropdown">--}}
{{--            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">--}}
{{--                <i class="fas fa-file"></i> Layouts </a>--}}
{{--            <div class="dash-nav-dropdown-menu">--}}
{{--                <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>--}}
{{--                <a href="content.html" class="dash-nav-dropdown-item">Content</a>--}}
{{--                <a href="login.html" class="dash-nav-dropdown-item">Log in</a>--}}
{{--                <a href="signup.html" class="dash-nav-dropdown-item">Sign up</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="dash-nav-dropdown">--}}
{{--            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">--}}
{{--                <i class="fas fa-info"></i> About </a>--}}
{{--            <div class="dash-nav-dropdown-menu">--}}
{{--                <a href="https://github.com/subet/easion" target="_blank" class="dash-nav-dropdown-item">GitHub</a>--}}
{{--                <a href="https://usebootstrap.com/theme/easion" target="_blank" class="dash-nav-dropdown-item">UseBootstrap</a>--}}
{{--                <a href="https://mudimedia.com" target="_blank" class="dash-nav-dropdown-item">Mudimedia Software</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </nav>
</div>
