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
              <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
              <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
    
            </ol>
          </nav>
        </div>
        <div class="main-wrapper" style="padding-top: 0">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-6">
              <div class="page">
                <div class="section-body mt-4">
                  <div class="container-fluid ">
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
                                <th>STT</th>
                                <th>ID_ORDER</th>
                                <th>ID_PRODUCT</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                              </tr>
                            </thead>
                            @php $total = 0; $index = 0 @endphp
                            @foreach ($carts as $cart)
                                  @php $index++ @endphp
                              <tbody>
                                <tr>
                                  <td>{{$index}}</td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>1></td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>1</td>
                                </tr>
                              </tbody>
                            @endforeach
    
                            <thead>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Thành tiền</th>
                                <th><?= $total?></th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="page">
                <div class="section-body mt-4">
                  <div class="container-fluid ">
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
                              <tbody>
                                <tr>
                                  <th>Tên</th>
                                  <th>{{$customer->name}}</th>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td>Địa chỉ</td>
                                  <td>{{$customer->address}}</td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td>SĐT</td>
                                  <td>{{$customer->phone}}</td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td>Email</td>
                                  <td>{{$customer->email}}</td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td>
                                    <a href="">
                                      <button
                                          type="button"
                                          class="btn btn-icon btn-sm"
                                          title="Chấp nhận"
                                        >
                                        <i class="far fa-calendar-check"></i>
                                        </button>
                                    </a>
                                  </td>
                                  <td>
                                  <a href="">
                                    <button
                                      type="button"
                                      class="btn btn-icon btn-sm js-sweetalert"
                                      title="Delete"
                                      data-type="confirm"
                                    >
                                      <i class="fa fa-trash text-danger"></i>
                                    </button>
                                  </a>
                                  </td>
                                </tr>
                              </tbody>
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
  <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
  <script>
      CKEDITOR.replace( 'content' );
      var active_page = document.querySelector(".accordion-menu li:nth-child(5)");
      active_page.classList.add('active-page');
  </script>
@endsection