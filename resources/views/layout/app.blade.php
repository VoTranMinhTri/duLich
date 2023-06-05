<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/menu_mb/css.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/shake.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/unleash.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/galleria.folio.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery.carouFredSel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.masonry.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/js/flexcroll.js') }}"></script>
    <script src="{{ asset('assets/js/galleria-1.2.8.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.unleash.js') }}"></script>
    <script>
        $(document).ready(function() {

            // hide #back-top first

            $("#back-top").hide();



            // fade in #back-top

            $(function() {

                $(window).scroll(function() {

                    if ($(this).scrollTop() > 100) {

                        $('#back-top').fadeIn();

                    } else {

                        $('#back-top').fadeOut();

                    }

                });



                // scroll body to 0px on click

                $('#back-top a').click(function() {

                    $('body,html').animate({

                        scrollTop: 0

                    }, 800);

                    return false;

                });

            });



        });
    </script>
    <style>
        * {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
        }

        input,
        textarea {
            -webkit-touch-callout: auto;
            -webkit-user-select: auto;
            -moz-user-select: auto;
            -ms-user-select: auto;
            -o-user-select: auto;
            user-select: auto;
            -webkit-touch-callout: auto;
        }
    </style>

    <title></title>
</head>

<body>
    <div id="nav-mobile" style="display: block;" class="mm-menu mm-offcanvas">
        <div class="mm-panels">
            <div class="mm-panel mm-hasnavbar mm-opened mm-current" id="mm-1">
                <div class="mm-navbar"><a class="mm-title">Menu</a></div>
                <ul class="mm-listview">
                    <li class="is_step_0  hide_2"><a class="active_mn_01 acti" href="" icons="›">TRANG
                            CHỦ</a></li>
                    <li class="is_step_1  hide_3"><a class=" active_mn_1" href="" icons="›">GIỚI THIỆU</a>
                    </li>
                    <li class="is_step_3  hide_5"><a class="mm-next" href="#mm-2" data-target="#mm-2"></a><a
                            class=" active_mn_3" href="" icons="›">TOUR
                            KHÁCH ĐOÀN</a></li>
                    <li class="is_step_5  hide_7"><a class="mm-next" href="#mm-11" data-target="#mm-11"></a><a
                            class=" active_mn_5" href="" icons="›">TOUR
                            GHÉP ĐOÀN</a></li>
                    <li class="is_step_6  hide_8"><a class="mm-next" href="#mm-12" data-target="#mm-12"></a><a
                            class=" active_mn_6" href="" icons="›">TỔ
                            CHỨC SỰ KIỆN</a></li>
                    <li class="is_step_7  hide_9"><a class="mm-next" href="#mm-13" data-target="#mm-13"></a><a
                            class=" active_mn_7" href="" icons="›">ĐẠI LÝ VÉ
                            MÁY BAY</a></li>
                    <li class="is_step_8  hide_10"><a class="mm-next" href="#mm-14" data-target="#mm-14"></a><a
                            class=" active_mn_8" href="" icons="›">CHO THUÊ
                            XE</a></li>
                    <li class="is_step_0  hide_11"><a class="mm-next" href="#mm-15" data-target="#mm-15"></a><a
                            class="active_mn_01 acti" href="" icons="›">THƯ VIỆN</a></li>
                    <li class="is_step_9  hide_14"><a class="mm-next" href="#mm-16" data-target="#mm-16"></a><a
                            class=" active_mn_9" href="" icons="›">TIN TỨC</a>
                    </li>
                    <li class="is_step_12  hide_15"><a class=" active_mn_12" href="" icons="›">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-2">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">TOUR KHÁCH ĐOÀN</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="mm-next" href="#mm-3" data-target="#mm-3"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 1
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-4" data-target="#mm-4"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 2
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-5" data-target="#mm-5"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 3
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-6" data-target="#mm-6"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 4
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-7" data-target="#mm-7"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 5
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-8" data-target="#mm-8"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 6
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-9" data-target="#mm-9"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH 7
                            NGÀY</a></li>
                    <li class=" "><a class="mm-next" href="#mm-10" data-target="#mm-10"></a><a class=""
                            href="" icons="›">TOUR DU LỊCH
                            8 NGÀY TRỞ LÊN</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-3">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 1 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Vũng Tàu 1 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Long Hải 1 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Phan Thiết 1 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Miền Tây 1 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Tây Ninh 1 Ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-4">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 2 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Vũng Tàu 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Long Hải 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Phước Hải 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Hồ Tràm 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch La Gi 2 Ngày</a>
                    </li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Hàm Thuận Nam 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Phan Thiết 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Ninh Chữ 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đảo Bình Hưng 2 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đảo Bình Ba 2 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đảo Phú Quý 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Miền Tây 2 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đảo Nam Du 2 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Côn Đảo 2 ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-5">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 3 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Vũng Tàu 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Long Hải - Phước
                            Hải 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Hồ Tràm - Bình
                            Châu - Hồ Cốc 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour
                            Du Lịch La Gi - Thầy Thím 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Hàm Thuận Nam 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Phan Thiết 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Ninh Chữ 3 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đảo Bình Hưng 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Tà Đùng 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Đà Nẵng 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Phú Quốc 3 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đảo Phú Quý 3 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Phú Yên 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Quy Nhơn 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Nha Trang 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Đà Lạt 3
                            Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Quảng Bình 3 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Ninh Bình 3 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Miền Tây 3 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Côn Đảo 3 ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-6">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 4 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Phú Quốc 4 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Bình Hưng - Ninh
                            Chữ 4 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Nha Trang 4 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Phú Yên 4 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Quy Nhơn 4 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Đà Lạt 4
                            Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Buôn Mê Thuột 4 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Đà Nẵng - Bà Nà
                            - Hội An 4 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Miền Tây 4 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Hà Giang 4 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Hà Nội 4
                            ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-7">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 5 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour
                            Du Lịch Nha Trang - Đà Lạt 5 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du
                            Lịch Đà Nẵng - Huế 5 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Hà Nội - Hạ Long - Yên
                            Tử - Sa Pa 5 ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Cao Bằng - Bắc Cạn - Hà
                            Giang 5 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour
                            Du Lịch 6 Tỉnh Miền Tây 5 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Hà Nội - Ninh Bình - Đảo
                            Cát Bà - Hạ Long 5 Ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-8">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 6 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Phan Thiết - Nha
                            Trang - Đà Lạt 6 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Nha Trang - Phú
                            Yên - Quy Nhơn 6 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Phú Yên - Quy
                            Nhơn - Đà Nẵng 6 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Đà Nẵng - Bà Nà
                            - Huế - Quảng Bình 6 Ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-9">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 7 NGÀY</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch
                            Miền Tây 7 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Hành Trình Di Sản Miền
                            Trung 7 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour
                            Du Lịch Đông Bắc + Tây Bắc 7 Ngày</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-10">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-2" data-target="#mm-2"></a><a
                        class="mm-title" href="#mm-2">TOUR DU LỊCH 8 NGÀY TRỞ LÊN</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Tour
                            Du Lịch Đông Bắc + Tây Bắc 8 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Các Tỉnh Miền
                            Tây 8 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Du Lịch Các Tỉnh Miền
                            Trung 8 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Hà Nội - Ninh Bình - Hải
                            Phòng - Cát Bà - Hạ Long 8 Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Miền Trung + Miền Bắc +
                            Đông Bắc 20 Ngày (Bằng ô tô)</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-11">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">TOUR GHÉP ĐOÀN</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">Bảng Giá Tour Ghép Đoàn Khởi
                            Hành Hàng Tuần</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Miền
                            Bắc Hàng Tuần 2023</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Miền
                            Trung Hàng Tuần 2023</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour
                            Phú Quốc Ghép Đoàn, Hằng Ngày</a></li>
                    <li class=" "><a class="" href="" icons="›">Tour Đảo Bình Hưng, Đảo Phú
                            Quý Hàng Tuần</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-12">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">TỔ CHỨC SỰ KIỆN</a></div>
                <ul class="mm-listview">
                    <li class=""><a class="" href="" icons="›">Giới Thiệu, Hình Ảnh</a></li>
                    <li class=""><a class="" href="" icons="›">Cho Thuê Nhà Bạt, Sân
                            Khấu</a></li>
                    <li class=""><a class="" href="" icons="›">Cho Thuê Âm Thanh, Ánh
                            Sáng</a></li>
                    <li class=""><a class="" href="" icons="›">Cho Thuê MC, Lễ Tân</a></li>
                    <li class=""><a class="" href="" icons="›">Cho Thuê Nhóm Múa</a></li>
                    <li class=""><a class="" href="" icons="›">Cho Thuê Đội Lân</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-13">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">ĐẠI LÝ VÉ MÁY BAY</a></div>
                <ul class="mm-listview">
                    <li class=""><a class="" href="" icons="›">Trong nước</a></li>
                    <li class=""><a class="" href="" icons="›">Ngoài nước</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-14">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">CHO THUÊ XE</a></div>
                <ul class="mm-listview">
                    <li class=""><a class="" href="" icons="›">BẢNG GIÁ CHO THUÊ XE 2023</a>
                    </li>
                    <li class=""><a class="" href="" icons="›">Xe 7 Chỗ Đời Mới Cao Cấp</a>
                    </li>
                    <li class=""><a class="" href="" icons="›">Xe 29 chỗ xe và 33 chỗ</a>
                    </li>
                    <li class=""><a class="" href="" icons="›">Xe 45 chỗ cao cấp đời mới</a>
                    </li>
                    <li class=""><a class="" href="" icons="›">Xe 4 chỗ, xe hoa từ bình
                            thường đến xe cao cấp</a></li>
                    <li class=""><a class="" href="" icons="›">Xe 35 Chỗ Đời Mới Cao Cấp</a>
                    </li>
                    <li class=""><a class="" href="" icons="›">Xe 16 chỗ đời mới thích hợp
                            cho mọi gia đình</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-15">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">THƯ VIỆN</a></div>
                <ul class="mm-listview">
                    <li class=""><a class=" active_mn_10" href="" icons="›">Thư viện hình ảnh</a>
                    </li>
                    <li class=""><a class=" active_mn_11" href="" icons="›">Thư viện video</a>
                    </li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-16">
                <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a><a
                        class="mm-title" href="#mm-1">TIN TỨC</a></div>
                <ul class="mm-listview">
                    <li class=" "><a class="" href="" icons="›">cẩm nang du lịch</a></li>
                    <li class=" "><a class="" href="" icons="›">Tin Tức Trong Nước</a></li>
                    <li class=" "><a class="" href="" icons="›">Tin Khuyến Mãi</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11168664354');
    </script>
    <div>
        <article>
            <section>
                <div>
                    <div class="header_top">
                        <div class="pagewrap">
                            <ul class="left_id_top">
                                <li><i class="fa fa-map-marker"></i>86 Đường Số 42, Phường 10, Quận 6, TP.HCM</li>
                                <li><a href="index.php" title="Email"><i class="fa fa-envelope"></i></a><a
                                        href="mailto:info@ngocviettravel.com">info@ngocviettravel.com</a></li>
                                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Hotline: <a
                                        href="tel:028.2216.6688">028.2216.6688</a> - <a
                                        href="tel:0908.816.779">0908.816.779</a> - <a
                                        href="tel:0966.837.937">0966.837.937</a></li>
                            </ul>
                            <ul class="right_id_top">
                                <li><a onclick="LOAD_popup_new('/pa-size-child/dang-ky/', '400px')" class="cur"><i
                                            class="fa fa fa-user-circle-o"></i>Đăng Ký</a></li>
                                <li><a onclick="LOAD_popup_new('/pa-size-child/dang-nhap/', '400px')"
                                        class="cur"><i class="fa fa-user-plus"></i>Đăng Nhập</a></li>
                                <div class="clr"></div>

                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="header">
                        <div class="pagewrap">
                            <div class="logo_top">
                                <li><a href=""><img src="" alt=""></a></li>
                                <ul>
                                    <h2>CÔNG TY GOLDEN LOTUS TRAVEL</h2>
                                    <h3>Chất Lượng Làm Nên Thương Hiệu</h3>
                                </ul>
                                <div class="clr"></div>
                            </div>
                            <div class="right_header">
                                <div class="timkiem_top no_box">
                                    <div class="search"><a
                                            onclick="SEARCH_timkiem('http://ngocviettravel.net/search/?key=','.input_search_enter'); if($('.input_search_enter').val() == '') $('.timkiem_top').removeClass('acti') "
                                            style="cursor:pointer"> <i class="fa fa-search"
                                                aria-hidden="true"></i></a>
                                        <input class="input_search input_search_enter" type="text" value=""
                                            data=".input_search_enter" data-href=""
                                            placeholder="Nhập từ khóa tìm kiếm...">
                                    </div>
                                </div>
                                <div class="giohang_top"> <a href=""><i class="fa fa-cart-plus"
                                            aria-hidden="true"></i>
                                        <h3>Giỏ hàng<span>0</span></h3>
                                    </a> </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="box_menu" style="top: 70px;">

                        <div class="pagewrap">

                            <ul class="menu no_box" id="menu">
                                <li class="homepage"><a href=""><i class="fa fa-home"></i></a></li>
                                <li class="is_step_0 li_sp hide_2"><a class="active_mn_01 acti" href=""
                                        icons="›">TRANG CHỦ</a></li>
                                <li class="is_step_1 li_sp hide_3"><a class=" active_mn_1" href=""
                                        icons="›">GIỚI THIỆU</a>
                                </li>
                                <li class="is_step_3 li_sp hide_5"><a class=" active_mn_3" href=""
                                        icons="›" addok="ok">TOUR KHÁCH ĐOÀN<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="">
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 1 NGÀY<i class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Vũng Tàu 1 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Long Hải 1 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phan Thiết 1 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Miền Tây 1 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Tây Ninh 1 Ngày</a></li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 2 NGÀY<i class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Vũng Tàu 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Long Hải 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phước Hải 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Hồ Tràm 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch La Gi 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Hàm Thuận Nam 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phan Thiết 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Ninh Chữ 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đảo Bình Hưng 2 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đảo Bình Ba 2 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đảo Phú Quý 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Miền Tây 2 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đảo Nam Du 2 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Côn Đảo 2 ngày</a></li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 3 NGÀY<i class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Vũng Tàu 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Long Hải - Phước Hải 3 ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Hồ Tràm - Bình Châu - Hồ Cốc 3
                                                        ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch La Gi - Thầy Thím 3 ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Hàm Thuận Nam 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phan Thiết 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Ninh Chữ 3 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đảo Bình Hưng 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Tà Đùng 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đà Nẵng 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phú Quốc 3 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đảo Phú Quý 3 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phú Yên 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Quy Nhơn 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Nha Trang 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đà Lạt 3 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Quảng Bình 3 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Ninh Bình 3 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Miền Tây 3 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Côn Đảo 3 ngày</a></li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 4 NGÀY<i class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phú Quốc 4 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Bình Hưng - Ninh Chữ 4 ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Nha Trang 4 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phú Yên 4 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Quy Nhơn 4 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đà Lạt 4 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Buôn Mê Thuột 4 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đà Nẵng - Bà Nà - Hội An 4
                                                        ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Miền Tây 4 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Hà Giang 4 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Hà Nội 4 ngày</a></li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 5 NGÀY<i class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Nha Trang - Đà Lạt 5 ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đà Nẵng - Huế 5 ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Hà Nội - Hạ Long - Yên Tử - Sa Pa 5
                                                        ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Cao Bằng - Bắc Cạn - Hà Giang 5
                                                        Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch 6 Tỉnh Miền Tây 5 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Hà Nội - Ninh Bình - Đảo Cát Bà - Hạ
                                                        Long 5 Ngày</a></li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 6 NGÀY<i class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phan Thiết - Nha Trang - Đà
                                                        Lạt 6 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Nha Trang - Phú Yên - Quy Nhơn
                                                        6 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Phú Yên - Quy Nhơn - Đà Nẵng 6
                                                        Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đà Nẵng - Bà Nà - Huế - Quảng
                                                        Bình 6 Ngày</a></li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 7 NGÀY<i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Miền Tây 7 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Hành Trình Di Sản Miền Trung 7
                                                        Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đông Bắc + Tây Bắc 7 Ngày</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›"
                                                addok="ok">TOUR DU LỊCH 8 NGÀY TRỞ LÊN<i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="">
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Đông Bắc + Tây Bắc 8 Ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Các Tỉnh Miền Tây 8 Ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Du Lịch Các Tỉnh Miền Trung 8 Ngày</a>
                                                </li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Hà Nội - Ninh Bình - Hải Phòng - Cát
                                                        Bà - Hạ Long 8 Ngày</a></li>
                                                <li class="li_sp "><a class="" href=""
                                                        icons="›">Tour Miền Trung + Miền Bắc + Đông Bắc 20
                                                        Ngày (Bằng ô tô)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="is_step_5 li_sp hide_7"><a class=" active_mn_5" href=""
                                        icons="›" addok="ok">TOUR GHÉP ĐOÀN<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="">
                                        <li class="li_sp "><a class="" href="" icons="›">Bảng
                                                Giá Tour Ghép Đoàn Khởi Hành Hàng Tuần</a>
                                        </li>
                                        <li class="li_sp "><a class="" href="" icons="›">Tour
                                                Miền Bắc Hàng Tuần 2023</a></li>
                                        <li class="li_sp "><a class="" href="" icons="›">Tour
                                                Miền Trung Hàng Tuần 2023</a></li>
                                        <li class="li_sp "><a class="" href="" icons="›">Tour
                                                Phú Quốc Ghép Đoàn, Hằng Ngày</a></li>
                                        <li class="li_sp "><a class="" href="" icons="›">Tour
                                                Đảo Bình Hưng, Đảo Phú Quý Hàng Tuần</a></li>
                                    </ul>
                                </li>
                                <li class="is_step_6 li_sp hide_8"><a class=" active_mn_6" href=""
                                        icons="›" addok="ok">TỔ CHỨC SỰ KIỆN<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="">
                                        <li class="li_sp"><a class="" href="" icons="›">Giới
                                                Thiệu, Hình Ảnh</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Cho
                                                Thuê Nhà Bạt, Sân Khấu</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Cho
                                                Thuê Âm Thanh, Ánh Sáng</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Cho
                                                Thuê MC, Lễ Tân</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Cho
                                                Thuê Nhóm Múa</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Cho
                                                Thuê Đội Lân</a></li>
                                    </ul>
                                </li>
                                <li class="is_step_7 li_sp hide_9"><a class=" active_mn_7" href=""
                                        icons="›" addok="ok">ĐẠI LÝ VÉ MÁY BAY<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="">
                                        <li class="li_sp"><a class="" href="" icons="›">Trong
                                                nước</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Ngoài
                                                nước</a></li>
                                    </ul>
                                </li>
                                <li class="is_step_8 li_sp hide_10"><a class=" active_mn_8" href=""
                                        icons="›" addok="ok">CHO THUÊ XE<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="">
                                        <li class="li_sp"><a class="" href="" icons="›">BẢNG
                                                GIÁ CHO THUÊ XE 2023</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Xe 7
                                                Chỗ Đời Mới Cao Cấp</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Xe 29
                                                chỗ xe và 33 chỗ</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Xe 45
                                                chỗ cao cấp đời mới</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Xe 4
                                                chỗ, xe hoa từ bình thường đến xe cao cấp</a>
                                        </li>
                                        <li class="li_sp"><a class="" href="" icons="›">Xe 35
                                                Chỗ Đời Mới Cao Cấp</a></li>
                                        <li class="li_sp"><a class="" href="" icons="›">Xe 16
                                                chỗ đời mới thích hợp cho mọi gia đình</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="is_step_0 li_sp hide_11"><a class="active_mn_01 acti" href=""
                                        icons="›" addok="ok">THƯ VIỆN<i class="fa fa-angle-down"></i></a>
                                    <ul class=" ">
                                        <li class="li_sp"><a class=" active_mn_10" href=""
                                                icons="›">Thư viện hình ảnh</a></li>
                                        <li class="li_sp"><a class=" active_mn_11" href=""
                                                icons="›">Thư viện video</a></li>
                                    </ul>
                                </li>
                                <li class="is_step_9 li_sp hide_14"><a class=" active_mn_9" href=""
                                        icons="›" addok="ok">TIN TỨC<i class="fa fa-angle-down"></i></a>
                                    <ul class="">
                                        <li class="li_sp "><a class="" href="" icons="›">cẩm
                                                nang du lịch</a></li>
                                        <li class="li_sp "><a class="" href="" icons="›">Tin
                                                Tức Trong Nước</a></li>
                                        <li class="li_sp "><a class="" href="" icons="›">Tin
                                                Khuyến Mãi</a></li>
                                    </ul>
                                </li>
                                <li class="is_step_12 li_sp hide_15"><a class=" active_mn_12" href=""
                                        icons="›">LIÊN HỆ</a>
                                </li>
                            </ul>
                            <div class="mn-mobile">
                                <a href="" class="a_trangchu_mb"><i class="fa fa-home"></i></a>
                                <!-- <a href="http://ngocviettravel.net" class="a_trangchu_mb">Trang Chủ</a> -->
                                <div class="menu-bar hidden-md hidden-lg">
                                    <a href="#nav-mobile">
                                        <!-- <img src="images/menu-mobile-lh.png" alt=""> -->
                                        <span>&nbsp;</span>
                                        <span>&nbsp;</span>
                                        <span>&nbsp;</span>
                                    </a>
                                </div>


                            </div>
                            <script>
                                $(function() {
                                    $(".menu  li").each(function() {
                                        if ($("ul", this).length > 0) {
                                            var a_ok = $("a", this).eq(0).attr('addok');
                                            if (a_ok != "ok") {
                                                $("a", this).eq(0).append('<i class="fa fa-angle-down"></i>');
                                                $("a", this).eq(0).attr("addok", "ok");
                                            }
                                        }
                                    });
                                });
                            </script>

                            <div class="clr"></div>

                        </div>

                    </div>
                    <div class="dv-popup-new no_box">
                        <div class="dv-popup-new-child actiok" style="width: 400px;">
                            <a class="popup-close"></a>
                            <div class="dv-nd-popup"></div>
                        </div>
                    </div>
                    @yield('content')
                    <div class="footer_bottom">
                        <div class="pagewrap">
                            <div class="footer_company">
                                <ul>
                                    <h3>CÔNG TY TNHH DV VẬN TẢI VÀ DU LỊCH GOLDEN LOTUS TRAVEL</h3>
                                    <div>
                                        <p><span class="fa fa-map-marker" style="color:rgb(0, 0, 0);"></span>Địa
                                            chỉ: 86&nbsp;Đường Số 42, Phường 10, Quận 6, TP.HCM</p>
                                        <p><span class="fa fa-phone" style="color:rgb(0, 0, 0);"></span>Điện
                                            thoại: 028.2216.6688&nbsp;Fax: 028.2216.6688</p>
                                        <p><span class="fa fa-phone-square" style="color:rgb(0, 0, 0);"></span>Di
                                            Động: <a href="tel:0908.816.779">0908.816.779</a> - <a
                                                href="tel:0966.837.937">0966.837.937</a>&nbsp;- Zalo: <a
                                                href="tel:0966.837.937">0966.837.937</a></p>
                                        <p><span class="fa fa-envelope" style="color:rgb(0, 0, 0);"></span>Email: <a
                                                href="mailto:info@goldenlotustravel.net">info@goldenlotustravel.net</a> - <a
                                                href="mailto:info@goldenlotustravel.net">info@goldenlotustravel.com</a>
                                        </p>
                                        <p><span class="fa fa-globe" style="color:rgb(0, 0, 0);"></span>Web:&nbsp;<a
                                                href="">goldenlotustravel.net</a> -&nbsp;<a
                                                href="">goldenlotustravel.net</a> - <a
                                                href="">dulichgoldenlotustravel.net</a>&nbsp;-&nbsp;<a
                                                href="">goldenlotustravel.com</a><br>
                                            GPKD số 0312181030 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 12/03/2013<br>
                                            GĐ/Sở hữu website: Thúy Vy</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="map_footer">
                                <!-- <iframe class="iframe_load" iframe-src="https://www.google.com/maps/place/86+%C4%90%C6%B0%E1%BB%9Dng+s%E1%BB%91+42,+Ph%C6%B0%E1%BB%9Dng+10,+Qu%E1%BA%ADn+6,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh/@10.7383352,106.6200375,16.03z/data=!4m5!3m4!1s0x31752dd98f15cc25:0x46d25e9af4cac76a!8m2!3d10.7369556!4d106.6237065" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                <div class="dv-nd-footer">
                                    <h3>Chính sách và Quy định</h3>
                                    <ul>
                                        <li>
                                            <a href="" target="">Chính sách quy định chung</a>
                                        </li>
                                        <li>
                                            <a href="" target="">Chính sách bảo hành</a>
                                        </li>
                                        <li>
                                            <a href="" target="">Chính sách bảo mật thông tin</a>
                                        </li>
                                        <li>
                                            <a href="" target="">Chính sách vận chuyển</a>
                                        </li>
                                        <li>
                                            <a href="" target="">Chính sách về quy trình xử lý khiếu
                                                nại</a>
                                        </li>
                                        <li>
                                            <a href="" target="">Điều khoản và quy định</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dangkynhantin_footer">
                                {{-- <div class="fb-page fb_iframe_widget"
                                    data-href="https://www.facebook.com/www.ngocviettravel.net/"
                                    data-tabs="timeline" data-width="290" data-height="190"
                                    data-small-header="false" data-adapt-container-width="true"
                                    data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered"
                                    fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=322&amp;height=190&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fwww.ngocviettravel.net%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=290">
                                    <span style="vertical-align: bottom; width: 290px; height: 190px;"><iframe
                                            name="f3a7ad4a9621f3" width="290px" height="190px"
                                            data-testid="fb:page Facebook Social Plugin"
                                            title="fb:page Facebook Social Plugin" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true" scrolling="no"
                                            allow="encrypted-media"
                                            src="https://www.facebook.com/v2.12/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df326f14da900884%26domain%3Dngocviettravel.net%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fngocviettravel.net%252Ff1ca4d883c0aa9%26relation%3Dparent.parent&amp;container_width=322&amp;height=190&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fwww.ngocviettravel.net%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=290"
                                            style="border: none; visibility: visible; width: 290px; height: 190px;"
                                            class=""></iframe></span>
                                </div> --}}
                            </div>
                            <div class="clr"></div>

                            <div class="copyright_bottom">

                                <p>Bản quyền thuộc về CÔNG TY VẬN TẢI, SỰ KIỆN VÀ DU LỊCH GOLDEN LOTUS TRAVEL | <a
                                        href="" title="thiết kế website" target="_blank">Thiết kế và
                                        phát triển bởi</a> <a href="" target="_blank"> GOLDEN LOTUS TRAVEL</a></p>
                                <p><a href="" target=""><img
                                            src="{{ asset('assets/datafiles/setone/1577813789_icon_bct.png') }}"
                                            class="isload isload_full isload_full_1" data-original=""
                                            alt="Hình ảnh" style="display: inline; opacity: 1;"></a></p>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </article>
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"
            media="all">
        <script type="text/javascript" src="{{ asset('assets/js/js_slider_new.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('assets/menu_mb/jquery.mmenu.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" src="{{ asset('assets/js/me.js') }}"></script>

        <script>
            $(function() {
                $("#nav-mobile").mmenu();
                $("#nav-mobile").show();
            });
        </script>
        <script>
            $(".active_mn_01").addClass("acti")
        </script>
    </div>
    </div>
</body>

</html>
