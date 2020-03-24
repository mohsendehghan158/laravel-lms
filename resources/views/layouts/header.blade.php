<header>
    <nav class="rtl navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">همسفران اقیانوس آبی</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">صفحه اصلی <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('all-episodes')}}">همه ویدیو ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">دسته بندی ها</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                @guest
                    <a href="/login" class="btn btn-success mr-2">ورود</a>
                    <a href="/register" class="btn btn-success mr-2">عضویت</a>
                @endguest
                @auth
                    <a href="/panel" class="btn btn-primary mr-2">مشاهده ناحیه کاربری</a>
                @endauth
                <input class="form-control mr-sm-2" type="text" placeholder="جستجو" aria-label="Search">
            </form>
        </div>
    </nav>
</header>