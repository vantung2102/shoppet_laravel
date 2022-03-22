<div class="page-sidebar">
    <div class="logo-box">
        <a href="{{route('admin.index')}}" class="logo-text">TP&SHOPPET</a
        ><a href="#" id="sidebar-close"><i class="material-icons">close</i></a>
        <a href="#" id="sidebar-state"
            ><i class="material-icons">adjust</i
            ><i class="material-icons compact-sidebar-icon"
                >panorama_fish_eye</i
            ></a
        >
    </div>
    <div
        class="slimScrollDiv"
        style="position: relative; overflow: hidden; width: auto; height: 250px"
    >
        <div
            class="page-sidebar-inner slimscroll"
            style="overflow: hidden; width: auto; height: 250px"
        >
            <ul class="accordion-menu">
                <li class="sidebar-title">BẢNG ĐIỀU KHIỂN</li>
                <li>
                    <a href="{{route('admin.index')}}" class="active"
                        ><i class="material-icons-outlined">pets</i
                        >THÚ CƯNG</a
                    >
                </li>
                <li>
                    <a href="mailbox.html"
                        ><i class="material-icons-outlined">dashboard</i>SẢN PHẨM</a
                    >
                </li>
                <li>
                    <a href=""
                        ><i class="material-icons-outlined">account_circle</i
                        >TÀI KHOẢN</a
                    >
                </li>
                <li>
                    <a href="admin/customer"
                        ><i class="material-icons">calendar_today</i>
                        ĐƠN HÀNG</a
                    >
                </li>
                <li class="add-category">
                    <a>
                        <i class="material-icons">category</i>
                        DANH MỤC
                        <i class="material-icons has-sub-menu">add</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('admin.menus.add')}}">THÊM DANH MỤC</a>
                        </li>
                        <li>
                            <a href="{{route('admin.menus.list')}}"
                                >DANH SÁCH DANH MỤC</a
                            >
                        </li>
                    </ul>
                </li>
                <li class="add-slider">
                    <a>
                        <i class="material-icons">slideshow</i>
                        SLIDESHOW
                        <i class="material-icons has-sub-menu">add</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('admin.slider.add')}}">THÊM SLIDE</a>
                        </li>
                        <li>
                            <a href="{{route('admin.slider.list')}}"
                                >DANH SÁCH SLIDE</a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div
            class="slimScrollBar"
            style="
                background: rgb(204, 204, 204);
                width: 6px;
                position: absolute;
                top: 0px;
                opacity: 0.4;
                display: none;
                border-radius: 0px;
                z-index: 99;
                right: 0px;
                height: 387.609px;
            "
        ></div>
        <div
            class="slimScrollRail"
            style="
                width: 6px;
                height: 100%;
                position: absolute;
                top: 0px;
                display: none;
                border-radius: 0px;
                background: rgb(51, 51, 51);
                opacity: 0.2;
                z-index: 90;
                right: 0px;
            "
        ></div>
    </div>
</div>
