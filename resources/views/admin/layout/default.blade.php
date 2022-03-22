<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.layout.head')

  </head>
  <body>
    <div class="loader">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only"></span>
      </div>
    </div>

    <div class="connect-container align-content-stretch d-flex flex-wrap">

      @include('admin.layout.sidebar')

      <div class="page-container">
        <div class="page-header">
          <nav class="navbar navbar-expand">
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item small-screens-sidebar-link">
                <a href="#" class="nav-link"
                  ><i class="material-icons-outlined">menu</i></a
                >
              </li>
              <li class="nav-item nav-profile dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="{{asset('admin/images/avatar.png')}}"
                    alt="profile image"
                  />
                  <span>Thanh Tâm</span>
                  <i class="material-icons dropdown-icon"
                    >keyboard_arrow_down</i
                  >
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"
                    >Công việt hôm nay
                    <span class="badge badge-pill badge-info float-right"
                      >2</span
                    ></a
                  >
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <div class="dropdown-divider"></div>
                  <a href="" class="dropdown-item" href="#">Đăng xuất</a>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"
                  ><i class="material-icons-outlined">mail</i></a
                >
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"
                  ><i class="material-icons-outlined">notifications</i></a
                >
              </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#" class="nav-link">Dự án</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Nhiệm vụ</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Báo cáo</a>
                </li>
              </ul>
            </div>
            <div class="navbar-search">
              <form>
                <div class="form-group">
                  <input
                    type="text"
                    name="search"
                    id="nav-search"
                    placeholder="Search..."
                  />
                </div>
              </form>
            </div>
          </nav>
        </div>

        @yield('content')
      </div>
    </div>

    @include('admin.layout.foot')
  </body>
</html>
