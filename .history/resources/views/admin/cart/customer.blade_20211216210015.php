@extends('admin.layout.default')

@section('content')

    <style>
    .table td, .table th{
      padding: 0;
      text-align: center;
      line-height:37px;
    }
    </style>
    
    <div class="page-content">
      <div class="page-info">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách khách hàng</li>
          </ol>
        </nav>
      </div>
      @include('admin.alert.alert')

      <div class="main-wrapper" style="padding-top: 0">
        <div class="row">
          <div class="col">
            <div class="page">
              <div class="section-body">
                <div class="container-fluid">
                  <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          data-toggle="tab"
                          href="#Student-all"
                          >Danh sách thú cưng</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Student-add"
                          >Thêm thú cưng</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
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
                              <th>Tên Khách Hàng</th>
                              <th>SĐT</th>
                              <th>Email</th>
                              <th>Giới tính</th>
                              <th>Ngày đặt</th>
                              <th>Giá </th>
                              <th>Giá Sale</th>
                              <th>Hoạt động</th>
                              <th>Thao tác</th>
                            </tr>
                          </thead>
                          @foreach ($customers as $customer)
                            <tbody>
                              <tr>
                                <td>{{$customers->id}}</td>
                                <td style="padding:0">{{$customers->name}}</td>
                                <td>{{$customers->count}}</td>
                                <td>{!! \App\Helpers\Helper::sex($customers->sex)!!}</td>
                                <td>{{$customers->menu->name}}</td>
                                <td>{{$customers->price}}</td>
                                <td>{{$customers->price_sale}}</td>
                                <td>{!! \App\Helpers\Helper::active($customers->active)!!}</td>
                                <td>
                                  <a href="/admin/customerss/update/{{$customers->id}}">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                      title="Edit"
                                    >
                                      <i class="fa fa-edit" style="color:#fff"></i>
                                    </button>
                                  </a>
                                  
                                  <a href="" onclick="removeRow({{$customers->id}},'/admin/customerss/destroy')">
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

                        <nav aria-label="Page navigation example">
                          <ul class="pagination pagination-circle">
                             {!!$customerss->links()!!}
                          </ul>
                      </nav>

                      </div>
                    </div>

                    <div class="tab-pane" id="Student-add">
                      <div class="row clearfix">
                        <div class="col">
                          <div class="card">
                              
                              <form action="/admin/index" class="card-body" method="post">
                                @csrf
                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label"
                                    >Tên thú cưng
                                    <span class="text-danger">*</span></label
                                  >
                                  <div class="col-md-9">
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="name"
                                      value="{{old('name')}}"
                                    />
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <label class="col-md-3 col-form-label"
                                    >Số lượng <span class="text-danger">*</span></label
                                  >
                                  <div class="col-md-9">
                                    <input type="text" class="form-control" name="count" value="{{old('count')}}"/>
                                  </div>
                                </div>
                                
                                <div class="form-group row">
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <label class="col-md-3 col-form-label">Mô tả</label>
                                  <div class="col-md-9">
                                    <input type="text" class="form-control" name="description" value="{{old('description')}}"/>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <label class="col-md-3 col-form-label">Mô tả chi tiết</label>
                                  <div class="col-md-9">
                                    <textarea class="form-control" id="content" name="content" value="{{old('content')}}"></textarea>
                                  </div>
                                </div>

                               

                                

                               

                                

                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label"
                                    >Ảnh </label
                                  >
                                  <div class="col-md-9">
                                    <div class="dropify-wrapper">
                                      <div class="dropify-loader"></div>
                                      <div class="dropify-errors-container">
                                        <ul></ul>
                                      </div>
                                      <input type="file"  class="form-control" id="upload" onchange="uploadFile()">
                                      <div id="image_show">

                                      </div>
                                      <input type="hidden" name="thumbnail" id="thumbnail">
                                      <div class="dropify-errors-container">
                                        <ul></ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label"
                                    >Hoạt động </label
                                  >
                                  <div class="col-md-9">
                                    <div class="dropify-errors-container">
                                      <ul></ul>
                                    </div>
                                    <div class="custom-control custom-radio">
                                      <input class="custom-control-input" type="radio" name="active" id="active" value="1" checked>
                                      <label class="custom-control-label" for="active">
                                          Có
                                      </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                      <input class="custom-control-input" type="radio" name="active" id="no_active" value="2">
                                      <label class="custom-control-label" for="no_active">
                                          Không
                                      </label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label"> </label>
                                  <div class="col-md-9">
                                    <div class="dropify-wrapper">
                                      <div class="dropify-loader"></div>
                                      <div class="dropify-errors-container">
                                        <ul></ul>
                                      </div>
                                      <button type="submit" class="dropify-clear btn btn-primary">
                                        Xác nhận
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </form>
    
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
      </div>
    </div>

@endsection

@section('foot')
  <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
  <script>
      CKEDITOR.replace( 'content' );
      var active_page = document.querySelector(".accordion-menu li:nth-child(4)");
      active_page.classList.add('active-page');
  </script>
@endsection