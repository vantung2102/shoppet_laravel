@extends('admin.layout.default')

@section('content')
<div class="page-content">
    <div class="page-info">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
          <li class="breadcrumb-item active" aria-current="page">Thú cưng </li>
          <li class="breadcrumb-item active" aria-current="page"> {{$title}}</li>
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
                  <div class="tab-pane active" id="Student-add">
                    <div class="row clearfix">
                      <div class="col">
                        <div class="card">
                            
                            <form action="/admin/products/update/{{$product->id}}" class="card-body" method="post">
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
                                    value="{{$product->name}}"
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
                                  <input type="text" class="form-control" name="count" value="{{$product->count}}"/>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <label class="col-md-3 col-form-label">Mô tả</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="description" value="{{$product->description}}"/>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <label class="col-md-3 col-form-label">Mô tả chi tiết</label>
                                <div class="col-md-9">
                                  <textarea class="form-control" id="content" name="content">{{$product->content}}</textarea>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <label class="col-md-3 col-form-label"
                                  >Danh mục
                                  <span class="text-danger">*</span></label
                                >
                                <div class="col-md-9">
                                  <select class="form-control" name="menu_id">
                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}" {{$product->menu_id == $menu->id ? 'selected' : ''}}>
                                          {{$menu->name}}
                                        </option>
                                    @endforeach
                                </select>
                                </div>
                              </div>

                              {{-- <div class="form-group row">
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <label class="col-md-3 col-form-label"
                                  >Giới tính <span class="text-danger">*</span></label
                                >
                                <div class="col-md-9">
                                  <select
                                    class="form-control input-height"
                                    name="sex"
                                    value="{{old('sex')}}"
                                  >
                                    <option value="0">Đực</option>
                                    <option value="1">Cái</option>
                                  </select>
                                </div>
                              </div> --}}

                              <div class="form-group row">
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <label class="col-md-3 col-form-label"
                                  >Giá
                                  <span class="text-danger">*</span></label
                                >
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="price" value="{{$product->price}}"/>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <label class="col-md-3 col-form-label"
                                  >Giá sale
                                  <span class="text-danger">*</span></label
                                >
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="price_sale" value="{{$product->price_sale}}"/>
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
                                    <input type="file"  class="form-control" value="{{$product->thumbnail}}"id="upload" onchange="uploadFile()">
                                    <div id="image_show">
                                      <a href="{{ $product->thumbnail }}" target="_blank">
                                        <img src="{{ $product->thumbnail }}" width="100px">
                                      </a>
                                    </div>
                                    <input type="hidden" name="thumbnail" id="thumbnail" value="{{ $product->thumbnail }}">
                                    <div class="dropify-errors-container">
                                      <ul></ul>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-md-3 col-form-label"
                                  >Kích hoạt</label
                                >
                                <div class="col-md-9">
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="active" id="active" value="1" {{ $product->active == 1 ? ' checked=""' : '' }}>
                                    <label class="custom-control-label" for="active">
                                        Có
                                    </label>
                                  </div>
                                  <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="active" id="no_active" value="0" {{ $product->active == 0 ? ' checked=""' : '' }}>
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
        CKEDITOR.replace('content');
    </script>
@endsection
