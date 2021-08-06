  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('admin-nguyenphikhanh.net/assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-book-bookmark text-default"></i>
                <span class="nav-link-text">Thêm bài viết mới</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('category.index')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Danh mục bài viết</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Đăng ký thành viên mới</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">User trên Blog</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons(For Deverloper)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>