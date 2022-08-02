<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-3">
        <div class="d-flex align-items-center">
            <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2">
                <i class="feather-shopping-bag text-white h4 mb-0"></i>
            </span>
            <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em;"></i>
        </button>
    </div>
    <div class="nav-menu">
        <ul>
            <x-menu-spacer></x-menu-spacer>
            <x-menu-item link="{{ route('home') }}" class="feather-home" name="Home"></x-menu-item>
            <x-menu-item class="feather-shopping-bag" name="today orders"></x-menu-item>
            <x-menu-item class="feather-grid" name="recent items"></x-menu-item>
            <x-menu-item class="feather-pie-chart" name="data analysis"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>

            @if(Auth::user()->role == 0)
            <x-menu-title title="user manager"></x-menu-title>
            <x-menu-item link="{{ route('user-manager.index') }}" class="feather-users" name="users"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>
            @endif

            <x-menu-title title="user profile"></x-menu-title>
            <x-menu-item link="{{ route('profile') }}" class="feather-user" name="your profile"></x-menu-item>
            <x-menu-item link="{{ route('profile.update-photo') }}" class="feather-image" name="Update Photo"></x-menu-item>
            <x-menu-item link="{{ route('profile.update-nameEmail') }}" class="feather-message-square" name="Update info"></x-menu-item>
            <x-menu-item link="{{ route('profile.change-password-show') }}" class="feather-refresh-ccw" name="change password"></x-menu-item>
            <x-menu-item class="feather-server" name="item lists" counter="58"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>
            <li class="menu-item">
                <a class="btn btn-danger w-100" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                     <span>
                    <i class="feather-log-out"></i>
                    Log out
                </span>
                </a>
            </li>


            {{--            <li class="menu-title">--}}
{{--                <span>User Management</span>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-user-plus"></i>--}}
{{--                                Create User--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="item_list.html" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-users"></i>--}}
{{--                                Manage User--}}
{{--                            </span>--}}
{{--                    <span class="badge badge-pill bg-white shadow-sm text-primary">100</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-user-minus"></i>--}}
{{--                                Baned User--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-bar-chart"></i>--}}
{{--                                User Analysis--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-spacer"></li>--}}


{{--            <li class="menu-title">--}}
{{--                <span>Inventory</span>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-file-plus"></i>--}}
{{--                                Create New Stock--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-list"></i>--}}
{{--                                All Stock--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="item_list.html" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-file-minus"></i>--}}
{{--                                Out of Stock--}}
{{--                            </span>--}}
{{--                    <span class="badge badge-pill bg-white shadow-sm text-primary">16</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-bar-chart-2"></i>--}}
{{--                                Stock Analysis--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-spacer"></li>--}}

{{--            <li class="menu-title">--}}
{{--                <span>Your Profile</span>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-lock"></i>--}}
{{--                                Change Password--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a href="" class="menu-item-link">--}}
{{--                            <span>--}}
{{--                                <i class="feather-user-check"></i>--}}
{{--                                Edit Profile--}}
{{--                            </span>--}}
{{--                </a>--}}
{{--            </li>--}}

        </ul>
    </div>
</div>
