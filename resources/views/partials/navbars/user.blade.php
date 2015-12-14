<nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle" href="{{ route('ajax.togglesidebar')}}"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-left">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                @if(user()->avatar->size())
                                    <img src="{{ asset(user()->avatar->url()) }}" alt="">
                                @endif
                                    {{ user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-left">
                                    <li><a href="javascript:;">  الصفحة الشخصية</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-left">50%</span>
                                            <span>إعدادات</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">مساعدة</a>
                                    </li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-left"></i> @lang('global.logout')</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                        @if(user()->avatar->size())
                                            <span class="image">
                                        <img src="{{ asset(user()->avatar->url('thumb')) }}" alt="Profile Image" />
                                    </span>
                                    @endif
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                        
                                            @if(user()->avatar->size())
                                            <span class="image">
                                        <img src="{{ asset(user()->avatar->url('thumb')) }}" alt="Profile Image" />
                                    </span>
                                    @endif
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            @if(user()->avatar->size())
                                            <span class="image">
                                        <img src="{{ asset(user()->avatar->url('thumb')) }}" alt="Profile Image" />
                                    </span>
                                    @endif
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            @if(user()->avatar->size())
                                            <span class="image">
                                        <img src="{{ asset(user()->avatar->url('thumb')) }}" alt="Profile Image" />
                                    </span>
                                    @endif
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="inbox.php">See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>