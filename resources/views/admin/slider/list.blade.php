@extends('admin.layout.default')

@section('content')

    <style>
    .table td, .table th{
      padding: 0;
      text-align: center;
      line-height:60px;
    }
    </style>
    
    <div class="page-content">
      <div class="page-info">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">SLIDERSHOW</li>
            <li class="breadcrumb-item active" aria-current="page">DANH SÁCH SLIDERSHOW</li>
          </ol>
        </nav>
      </div>
      @include('admin.alert.alert')

      <div class="main-wrapper" style="padding-top: 0">
        <div class="row">
          <div class="col">
            <div class="page">
              <div class="section-body mt-4">
                <div class="container-fluid">
                  <div class="tab-content">
                    <div class="tab-pane active" id="Student-all">
                      <div class="table-responsive card">
                        <table
                          class="
                            table table-hover table-vcenter table-striped
                            mb-0
                            text-nowrap
                          "
                        >
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Tiêu đề</th>
                              <th>Đường dẩn</th>
                              <th>Ảnh</th>
                              <th>Sắp xếp</th>
                              <th>Trạng thái</th>
                              <th>Update</th>
                              <th>Thao tác</th>
                            </tr>
                          </thead>
                          @foreach ($sliders as $slider)
                            <tbody>
                              <tr>
                                <td>{{$slider->id}}</td>
                                <td style="padding:0">{{$slider->name}}</td>
                                <td>{{$slider->url}}</td>
                                <td>
                                    <a href="{{ $slider->thumbnail }}" target="_blank">
                                        <img src="{{ $slider->thumbnail }}" width="40px">
                                    </a>
                                </td>
                                <td>{{$slider->sort_by}}</td>
                                <td>{!! \App\Helpers\Helper::active($slider->active)!!}</td>
                                <td>{{$slider->updated_at}}</td>
                                <td>
                                  <a href="/admin/slider/update/{{$slider->id}}">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                      title="Edit"
                                    >
                                      <i class="fa fa-edit" style="color:#fff"></i>
                                    </button>
                                  </a>
                                  
                                  <a href="" onclick="removeRow({{$slider->id}},'/admin/slider/destroy')">
                                    <button
                                      type="button"
                                      class="btn btn-danger btn-sm js-sweetalert"
                                      title="Delete"
                                      data-type="confirm"
                                    >
                                      <i class="fa fa-trash text-danger"></i>
                                    </button>
                                  </a>
                                  
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('foot')
  <script>
      var active_page = document.querySelector("li.add-slider");
      active_page.classList.add('active-page');
  </script>
@endsection