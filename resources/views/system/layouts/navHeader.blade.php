<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;"
                       data-toggle="dropdown"> <i class="bx bx-bell vertical-align-middle"></i>
                        <span class="msg-count">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <h6 class="msg-header-title">1 New</h6>
                                <p class="msg-header-subtitle">{{translate('System Notifications')}}</p>
                            </div>
                        </a>
                        <div class="header-notifications-list">

                            <a class="dropdown-item" href="javascript:;">
                                <div class="media align-items-center">
                                    <div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="msg-name">24 PDF File<span class="msg-time float-right">19 min
													ago</span></h6>
                                        <p class="msg-info">The pdf files generated</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a href="javascript:;">
                            <div class="text-center msg-footer">{{translate('View All Notifications')}}</div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-language">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                       data-toggle="dropdown">
                        <div class="lang d-flex">
                            <div><i class="flag-icon flag-icon-@if($globalLocale == 'en')um @else{{'np'}}@endif"></i>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                         @foreach($languages as $key=>$language)
                            <a class="dropdown-item" href="{{route('set.lang', $key ?? '')}}"><i
                                    class="flag-icon flag-icon-@if($key == 'en')um @else{{$key}} @endif"></i><span>{{ucwords($language)}}</span></a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                       data-toggle="dropdown">
                        <div class="media user-box align-items-center">
                            <div class="media-body user-info">
                                <p class="user-name mb-0">{{Auth::user()->name}}</p>
                                <p class="designattion mb-0">{{translate('Admin')}}</p>
                            </div>
                            <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:;"><i
                                class="bx bx-user"></i><span>Profile</span></a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="{{route('logout')}}"><i
                                class="bx bx-power-off"></i><span>{{translate('Logout')}}</span></a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
