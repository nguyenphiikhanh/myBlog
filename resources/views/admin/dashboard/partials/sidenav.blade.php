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
              <a class="nav-link active" href="{{route('dashboard.index')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.create')}}">
                <i class="ni ni-book-bookmark text-default"></i>
                <span class="nav-link-text">Thêm bài viết mới</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.index')}}"> 
                <i class="ni ni-single-copy-04 text-default"></i>
                <span class="nav-link-text">Danh sách bài viết</span>
              </a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link" href="{{route('tags.index')}}"> 
                <i class="ni ni-tag text-default"></i>
                <span class="nav-link-text">Tags</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('category.index')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Danh mục bài viết</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>