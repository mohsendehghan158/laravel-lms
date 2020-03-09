<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block"> خوش آمدید {{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin-index')}}" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                خانه
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('episodes.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-video-camera"></i>
                            <p>
                                ویدیوها
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('episodes.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه ویدیوها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('episodes.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن ویدیو جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('episodes.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-video-camera"></i>
                            <p>
                                دسته بندی ویدیوها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('episode-categories.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه دسته ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('episode-categories.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن دسته جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('users.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                مدیریت کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('users.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه کاربران</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن کاربر جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>