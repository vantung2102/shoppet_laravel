@extends('admin.layout.default')

@section('content')

  <div class="page-content">
    <div class="page-info">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="#">Bảng điều khiển</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
              <li class="breadcrumb-item active" aria-current="page">Danh Sách Danh Mục</li>
          </ol>
      </nav>
    </div>

    <div class="table-responsive card">
      @include('admin.error.alert')
      <table
        class="
          table table-hover table-vcenter table-striped
          mb-0
          text-nowrap
        "
      >
        <thead>
          <tr>
            <th style="width:50px">ID</th>
            <th style="width:150px">Tên</th>
            <th style="width:50px">Hoạt động</th>
            <th style="text-align:center">Cập nhật</th>
            <th>Hành Động</th>
          </tr>
        </thead>

          <tbody>
              {!! \App\Helpers\Helper::menu($menus) !!}
          </tbody>
      </table>
    </div>
  </div>

@endsection
