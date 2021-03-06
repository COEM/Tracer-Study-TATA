<header class="navbar navbar-fixed-top bg-light">
    <div class="navbar-branding">
        <a class="navbar-brand" href="#"> <b>Tracer</b>Study </a>
        <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
        <ul class="nav navbar-nav pull-right hidden">
            <li>
                <a href="#" class="sidebar-menu-toggle">
                    <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                </a>
            </li>
        </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="/assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
                <span>{{Auth::user()->username}}</span>
                <span class="caret caret-tp hidden-xs"></span>
            </a>
            <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                <li class="br-t of-h">
                    <a href="/alumni/profil" class="fw600 p12 animated animated-short fadeInDown">
                        <span class="fa fa-gear pr5"></span> Profil </a>
                </li>
                <li class="br-t of-h">
                <a href="{{ route('logout') }}" class="fw600 p12 animated animated-short fadeInDown"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="fa fa-power-off pr5" ></span>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
        </li>
    </ul>
</header>