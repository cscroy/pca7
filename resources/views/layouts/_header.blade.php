<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <!-- <div class="row"> -->
            <div class="col-md-offset-1 col-md-10">
                <a href="{{ route('home') }}" id="logo">Pca7 App</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="https://bbs.pca7.com" class="nav-link">动态圈</a></li>
                </ul>
                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li><a href="{{ route('users.index') }}">用户列表</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    {{ Auth::user()->name }} <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                                    <li><a href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" id="logout">
                                            <form action="{{ route('logout') }}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('help') }}">帮助</a></li>
                            <li><a href="{{ route('login') }}">登录</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        <!-- </div> -->
    </div>
</header>