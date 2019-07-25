
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="profile_photo">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ auth()->user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li><a href="{{ route('dashboard') }}"><em class="fa fa-dashboard">&nbsp;</em> Inicio</a></li>

        <li><a href="{{ route('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Salir</a></li>
    </ul>
</div>
