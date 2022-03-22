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
                              <th>Ngày đặt</th>
                              <th>Địa chỉ</th>
                              <th>Thao tác</th>
                            </tr>
                          </thead>
                          @foreach ($customers as $customer)
                            <tbody>
                              <tr>
                                <td style="padding:0">{{$customer->name}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->created_at}}</td>
                                <td>{{$customer->address}}</td>
                                <td>
                                  <a href="/admin/customers/update/{{$customer->id}}">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                      title="Edit"
                                    >
                                      <i class="fa fa-edit" style="color:#fff"></i>
                                    </button>
                                  </a>
                                  
                                  <a href="" onclick="removeRow({{$customer->id}},'/admin/customerss/destroy')">
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
                             {!!$customers->links()!!}
                          </ul>
                      </nav>

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