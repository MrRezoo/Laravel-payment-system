<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="index.html"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle" src="{{asset('/assets/images/user/1.jpg')}}" alt="#">
                <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a></div>
            </div>
            <h6 class="mt-3 f-14">پارادایم</h6>
            <p></p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>داشبورد</span><span class="badge badge-pill badge-primary">6</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="index.html"><i class="fa fa-circle"></i><span>مدیریت</span></a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>@lang('users.panel')</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>@lang('users.manage users')</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>@lang('users.manage roles')</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
