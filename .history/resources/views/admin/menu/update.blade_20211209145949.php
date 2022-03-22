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
                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                </ol>
            </nav>
        </div>
        <div class="main-wrapper" style="padding-top: 0">
            <div class="row">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh mục</h5>
                            @include('admin.error.alert')
                            <form action="{{"/admin/menus/update/$menu->id"}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control" value="{{$menu->name}}" id="name" name="name" aria-describedby="name" placeholder="nhập tên danh mục">
                                </div>

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0" {{$menu->parent_id == 0 ? ' selected="selected"' : ''}}>Danh mục cha</option>
                                        @foreach($menus as $menuParent)
                                            <option value="{{$menuParent->id}}"
                                                {{$menu->parent_id == $menuParent->id ? ' selected="selected"' : ''}}>
                                                {{$menuParent->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="description" >{{$menu->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả chi tiết</label>
                                    <textarea class="form-control" id="content" name="content" >{{$menu->content}}</textarea>
                                </div>
                                
                                <p class="m-t-sm">Hoạt động:</p>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="active" id="active" value="1" {{$menu->active == 1 ? 'checked' : ''}}>
                                    <label class="custom-control-label" for="active">
                                        Có
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="active" id="no_active" value="0" {{$menu->active == 0 ? 'checked' : ''}}>
                                    <label class="custom-control-label" for="no_active">
                                        Không
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Hoàn tất chỉnh sửa danh mục</button>
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
    </script>
@endsection