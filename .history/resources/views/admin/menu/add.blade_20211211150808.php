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
                    <li class="breadcrumb-item active" aria-current="page">Thêm Danh Mục</li>
                </ol>
            </nav>
        </div>
        <div class="main-wrapper" style="padding-top: 0">
            <div class="row">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh mục</h5>
                            @include('admin.alert.alert')
                            <form action="{{route('admin.menus.processAddMenu')}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="nhập tên danh mục">
                                </div>

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Danh mục cha</option>
                                        @foreach($menus as $menu)
                                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="description" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả chi tiết</label>
                                    <textarea class="form-control" id="content" name="content" ></textarea>
                                </div>
                                
                                <p class="m-t-sm">Hoạt động:</p>
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
                                <button type="submit" class="btn btn-primary">Tạo danh mục</button>
                            </form>
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
        var active_page = document.querySelector("li.add-category");
        active_page.classList.add('active-page');
    </script>
@endsection