@extends('admin.layout.default')

@section('content')
    
    <div class="page-content">
      <div class="page-info">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider</li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
          </ol>
        </nav>
      </div>
      @include('admin.error.alert')

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
                              
                              <form action="" class="card-body" method="post">
                                @csrf
                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label"
                                    >Tiêu đề
                                    <span class="text-danger">*</span></label
                                  >
                                  <div class="col-md-9">
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="name"
                                      value="{{$slider->name}}"
                                    />
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <label class="col-md-3 col-form-label"
                                    >Đường dẩn <span class="text-danger">*</span></label
                                  >
                                  <div class="col-md-9">
                                    <input type="text" class="form-control" name="url" value="{{$slider->url}}"/>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <label class="col-md-3 col-form-label"
                                    >Sắp xếp
                                    <span class="text-danger">*</span></label
                                  >
                                  <div class="col-md-9">
                                    <input type="number" class="form-control" name="sort_by" value="{{$slider->sort_by}}"/>
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
                                        <a href="{{$slider->thumbnail}}">
                                            <img src="{{$slider->thumbnail}}" alt="" width="100px">
                                        </a>
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
                                    >Kích hoạt</label
                                  >
                                  <div class="col-md-9">
                                    <div class="dropify-errors-container">
                                      <ul></ul>
                                    </div>
                                    <div class="custom-control custom-radio">
                                      <input class="custom-control-input" type="radio" name="active" id="active" value="1" {{ $slider->active == 1 ? ' checked=""' : '' }}>
                                      <label class="custom-control-label" for="active">
                                          Có
                                      </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                      <input class="custom-control-input" type="radio" name="active" id="no_active" value="0" value="1" {{ $slider->active == 0 ? ' checked=""' : '' }}>
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
    <script>
        var active_page = document.querySelector("li.add-slider");
        active_page.classList.add('active-page');
    </script>
@endsection