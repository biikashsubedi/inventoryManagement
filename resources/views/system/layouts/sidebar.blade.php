<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon-2" alt=""/>
        </div>
        <div>
            <h4 class="logo-text">{{env('APP_NAME', 'Bikki')}}</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('home.index')}}">
                <div class="parent-icon icon-color-2"><i class="bx bx-home"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-10"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">User Management</div>
            </a>
            <ul>
                <li><a href="#"><i class="bx bx-right-arrow-alt"></i>Users</a>
                </li>
            </ul>
        </li>


    </ul>
    <!--end navigation-->
</div>
