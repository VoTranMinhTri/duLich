@extends('layout.app')
@section('content')
    <div class="conten">
        <div class="bannerMain">
            <div class="caroufredsel_wrapper"
                style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 1691px; height: 626px; margin: 0px; overflow: hidden; cursor: move;">
                <div class="banner"
                    style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 21983px; height: 626px; z-index: auto; opacity: 1;">
                    {{-- <li style="width: 1691px;">
                        <img src="{{ asset('assets/datafiles/setone/1592377744_Bia-xe-da-chinh.png') }}"
                            alt="Cho Thuê Xe Du Lịch Từ 4 Đến 45 Chỗ">
                        <div class="pagewrap">

                            <div class="box_title_banner">

                                <ul>

                                    <h3><a href="" target="">Cho Thuê Xe Du Lịch Từ 4 Đến 45 Chỗ</a></h3>

                                    <p>Chúng tôi cam kết làm hài lòng khách hàng bằng chất lượng dịch vụ vượt trội và tinh
                                        thần chuyên nghiệp</p>

                                </ul>

                            </div>

                        </div>

                    </li> --}}
                    <li style="width: 1691px;">
                        <img src="{{ asset('assets/datafiles/setone/2.png') }}"
                            alt="">
                        {{-- <div class="pagewrap">

                            <div class="box_title_banner">

                                <ul>

                                    <h3><a href="" target="">TOUR DÀNH CHO KHÁCH ĐOÀN</a></h3>

                                    <p>Chúng tôi cam kết làm hài lòng khách hàng bằng chất lượng dịch vụ vượt trội và tinh
                                        thần chuyên nghiệp</p>

                                </ul>

                            </div>

                        </div> --}}

                    </li>
                    <li style="width: 1691px;">
                        <img src="{{ asset('assets/datafiles/setone/3.png') }}"
                            alt="">
                        {{-- <div class="pagewrap">

                            <div class="box_title_banner">

                                <ul>

                                    <h3><a href="" target="">TEAM BUILDING CHUYÊN NGHIỆP</a>
                                    </h3>

                                    <p>Chúng tôi cam kết làm hài lòng khách hàng bằng chất lượng dịch vụ vượt trội và tinh
                                        thần chuyên nghiệp</p>

                                </ul>

                            </div>

                        </div> --}}

                    </li>
                    <li style="width: 1691px;">
                        <img src="{{ asset('assets/datafiles/setone/1.png') }}"
                            alt="">
                        {{-- <div class="pagewrap">

                            <div class="box_title_banner">

                                <ul>

                                    <h3><a href="" target="">TỔ CHỨC SỰ KIỆN CHUYÊN NGHIỆP</a>
                                    </h3>

                                    <p>Chúng tôi cam kết làm hài lòng khách hàng bằng chất lượng dịch vụ vượt trội và tinh
                                        thần chuyên nghiệp</p>

                                </ul>

                            </div>

                        </div> --}}

                    </li>
                    {{-- <li style="width: 1691px;">
                        <img src="{{ asset('assets/datafiles/setone/1592190087_Bia-bac.png') }}"
                            alt="Tour Miền Bắc - Khởi Hành Hàng Tuần">
                        <div class="pagewrap">
                            <div class="box_title_banner">
                                <ul>
                                    <h3><a href="" target="">Tour Miền Bắc - Khởi Hành Hàng
                                            Tuần</a></h3>
                                    <p>Chúng tôi cam kết làm hài lòng khách hàng bằng chất lượng dịch vụ vượt trội và tinh
                                        thần chuyên nghiệp</p>

                                </ul>

                            </div>

                        </div>

                    </li> --}}
                    {{-- <li style="width: 1691px;">
                        <img src="{{ asset('assets/datafiles/setone/1592205482_bia-ve-may-bay.png') }}"
                            alt="Đại lý vé máy bay trên toàn quốc">
                        <div class="pagewrap">

                            <div class="box_title_banner">

                                <ul>

                                    <h3><a href="" target="">Đại lý vé máy bay
                                            trên toàn quốc</a></h3>

                                    <p>Chúng tôi cam kết làm hài lòng khách hàng bằng chất lượng dịch vụ vượt trội và tinh
                                        thần chuyên nghiệp</p>

                                </ul>

                            </div>

                        </div>

                    </li> --}}
                </div>
            </div>
            <ul class="pagiBanner" style="display: block;">

                <a href="#" class=""><span>1</span></a><a href="#" class=""><span>2</span></a><a
                    href="#" class=""><span>3</span></a><a href="#" class=""><span>4</span></a><a
                    href="#" class=""><span>5</span></a><a href="#" class="selected"><span>6</span></a>
            </ul>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $(".banner").carouFredSel({
                        circular: true,
                        infinite: true,
                        responsive: true,
                        pagination: '.pagiBanner',
                        auto: {
                            pauseDuration: 2000,
                            pauseOnHover: true,
                            duration: 1200,
                            fx: "crossfade",
                        },
                        scroll: {
                            fx: "slide",
                            items: 1,
                            onBefore: function(data) {
                                $('.banner li').not(data.items.visible[0]).find('.caption').animate({
                                    opacity: 0,
                                    visibility: 'hidden',
                                    bottom: -50
                                });
                                $(data.items.visible[0]).find('.caption').animate({
                                    opacity: 1,
                                    visibility: 'visible',
                                    bottom: 0
                                }, {
                                    queue: false,
                                    duration: 1000
                                });
                            },
                        },
                        prev: ".placeNav.prev1",
                        next: ".placeNav.next1",
                        swipe: {
                            onMouse: true,
                            onTouch: true
                        },
                        items: {
                            height: "variable",
                            visible: {
                                min: 1,
                                max: 1
                            }
                        }
                    });

                });
            </script>
            <div class="clr"></div>
        </div>
        <div class="tour_hot_home">
            <div class="pagewrap">
                <!--<div class="dv-tort-nbhome" style="display:none">TOUR NỔI BẬT</div>-->
                <div class="title_bs">TOUR NỔI BẬT
                    <div class="xemall"><a href="">Xem tất cả<i class="fa fa-long-arrow-right"></i></a></div>
                </div>
                <div class="tour_id tintuc_home_id_slider no_box">
                    <!--  -->
                    <div class="owl-auto owl-carousel owl-theme flex" data0="1" data1="1" data2="2"
                        data3="3" data4="4" data5="4" is_slidespeed="1000" is_navigation="1" is_dots="1"
                        is_autoplay="1" style="opacity: 1; display: block;">
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                                    target="">
                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1680083745_Thiet-ke-chua-co-ten-39.png') }}"
                                            alt="TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia"></li>
                                    <h3>TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia</h3>
                                    <p><i class="fa fa-clock-o"></i>Thời gian: 4 NGÀY 3 ĐÊM</p>
                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>
                                    <h4> <span class="gia_ban">2,940,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">3,200,000 <span class="dvt">đ</span></span>
                                    </h4>
                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1680083745_Thiet-ke-chua-co-ten-39.png') }}"
                                            alt="TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia"></li>

                                    <h3>TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 4 NGÀY 3 ĐÊM</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">2,940,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">3,200,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-10%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1678071797_Thiet-ke-chua-co-ten-42.png') }}"
                                            alt="TOUR NHA TRANG 4 NGÀY - KHÁCH SẠN 4* TTC - Michelia"></li>

                                    <h3>TOUR NHA TRANG 4 NGÀY - KHÁCH SẠN 4* TTC - Michelia</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 4 Ngày 3 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">2,890,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">3,200,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-4%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1675475852_9.jpg') }}"
                                            alt="TOUR ĐẮK NÔNG - TÀ ĐÙNG TOPVIEW 3 NGÀY - RESORT 3 SAO + Homestay">
                                    </li>

                                    <h3>TOUR ĐẮK NÔNG - TÀ ĐÙNG TOPVIEW 3 NGÀY - RESORT 3 SAO + Homestay</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 2 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">2,548,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">2,650,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1675320438_8.jpg') }}"
                                            alt="NINH BÌNH - TRÀNG AN - BÁI ĐÍNH - HANG MÚA - TUYỆT TÌNH CỐC">
                                    </li>

                                    <h3>NINH BÌNH - TRÀNG AN - BÁI ĐÍNH - HANG MÚA - TUYỆT TÌNH CỐC</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 ngày 2 đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">3,380,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">3,550,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1682476455_Thiet-ke-chua-co-ten-23.png') }}"
                                            alt="PHÚ YÊN - QUY NHƠN 4 NGÀY 4 ĐÊM - BẰNG TÀU LỬA - GALA DINNER">
                                    </li>

                                    <h3>PHÚ YÊN - QUY NHƠN 4 NGÀY 4 ĐÊM - BẰNG TÀU LỬA - GALA DINNER</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 4 ngày 4 đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">3,878,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">4,050,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-4%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1618389584_phu-yen.jpg') }}"
                                            alt="TOUR PHÚ YÊN - GÀNH ĐÁ DĨA - VỊNH VŨNG RÔ 3 NGÀY 3 ĐÊM - BẰNG TÀU LỬA">
                                    </li>

                                    <h3>TOUR PHÚ YÊN - GÀNH ĐÁ DĨA - VỊNH VŨNG RÔ 3 NGÀY 3 ĐÊM - BẰNG TÀU LỬA
                                    </h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 03 ngày 03 đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">2,688,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">2,800,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1594624973_Bai-Dai-03.png') }}"
                                            alt="TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia"></li>

                                    <h3>TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 2 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">2,282,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">2,500,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-6%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685326478_Thiet-ke-chua-co-ten-10.png') }}"
                                            alt="TOUR ĐẢO BÌNH HƯNG - NINH CHỮ 3 NGÀY - TIỆC BBQ TÔM HÙM - CHECK-IN VƯỜN NHO - RESORT TTC PREMIUM 4*">
                                    </li>

                                    <h3>TOUR ĐẢO BÌNH HƯNG - NINH CHỮ 3 NGÀY - TIỆC BBQ TÔM HÙM - CHECK-IN VƯỜN
                                        NHO - RESORT TTC PREMIUM 4*</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 03 Ngày 02 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">2,550,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">2,700,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-8%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1680684339_Thiet-ke-chua-co-ten-5.png') }}"
                                            alt="TOUR NINH CHỮ - CÔNG VIÊN NƯỚC  - VỊNH VĨNH HY - HANG RÁI 3 NGÀY - RESORT TTC PREMIUM 4*">
                                    </li>

                                    <h3>TOUR NINH CHỮ - CÔNG VIÊN NƯỚC - VỊNH VĨNH HY - HANG RÁI 3 NGÀY - RESORT
                                        TTC PREMIUM 4*</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 ngày 2 đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo yêu cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: Khởi hành từ TP. Hồ Chí
                                        Minh</p>

                                    <h4> <span class="gia_ban">2,970,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">3,200,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-4%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1582193577_Untitled.jpg') }}"
                                            alt="TOUR 2 ĐẢO, BÌNH BA - BÌNH HƯNG 3 NGÀY - TIỆC BBQ TÔM HÙM - CHECK-IN VƯỜN NHO">
                                    </li>

                                    <h3>TOUR 2 ĐẢO, BÌNH BA - BÌNH HƯNG 3 NGÀY - TIỆC BBQ TÔM HÙM - CHECK-IN
                                        VƯỜN NHO</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 03 Ngày 02 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">2,700,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">2,800,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-3%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685771542_Thiet-ke-chua-co-ten-2.png') }}"
                                            alt="TOUR ĐẢO BÌNH BA 2 NGÀY - TIỆC BBQ TÔM HÙM (1 khách 1 con tôm hùm) - CHÙA TỪ VÂN - CHECK-IN VƯỜN NHO">
                                    </li>

                                    <h3>TOUR ĐẢO BÌNH BA 2 NGÀY - TIỆC BBQ TÔM HÙM (1 khách 1 con tôm hùm) -
                                        CHÙA TỪ VÂN - CHECK-IN VƯỜN NHO</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 2 Ngày 2 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">1,650,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">1,700,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685166615_Thiet-ke-chua-co-ten-19.png') }}"
                                            alt="TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH - BÀU SEN 3 NGÀY - Team Building + Gala Dinner">
                                    </li>

                                    <h3>TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH - BÀU SEN 3 NGÀY - Team
                                        Building + Gala Dinner</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 2 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">1,789,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">1,950,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685155148_Thiet-ke-chua-co-ten-1.png') }}"
                                            alt="TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH - BIKINI BEACH 3 NGÀY - Team Building + Gala Dinner">
                                    </li>

                                    <h3>TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH - BIKINI BEACH 3 NGÀY -
                                        Team Building + Gala Dinner</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 2 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">1,950,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">2,050,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685087100_Thiet-ke-chua-co-ten-4.png') }}"
                                            alt="TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH 2 NGÀY - Team Building + Gala Dinner">
                                    </li>

                                    <h3>TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH 2 NGÀY - Team Building +
                                        Gala Dinner</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 2 Ngày 1 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">1,330,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">1,450,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-6%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1682476455_Thiet-ke-chua-co-ten-23.png') }}"
                                            alt="TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH - BIỂN ĐỔI DƯƠNG 3 NGÀY - Team Building + Gala Dinner">
                                    </li>

                                    <h3>TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH - BIỂN ĐỔI DƯƠNG 3 NGÀY -
                                        Team Building + Gala Dinner</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 2 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">1,750,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">1,850,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-8%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685153270_Thiet-ke-chua-co-ten-15.png') }}"
                                            alt="TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH 2 NGÀY - BIỂN ĐỒI DƯƠNG - TEAM - GALA">
                                    </li>

                                    <h3>TOUR PHAN THIẾT - LÀNG CHÀI XƯA - HANNA BEACH 2 NGÀY - BIỂN ĐỒI DƯƠNG -
                                        TEAM - GALA</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 02 ngày 01 đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                                    <h4> <span class="gia_ban">1,150,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">1,250,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <div class="icon_label_giam_gia">Giảm<br>-22%<span>Mới</span></div> <a href=""
                                    target="">

                                    <li><img src="{{ asset('assets/datafiles/setone/thumb_1685153866_Thiet-ke-chua-co-ten-9.png') }}"
                                            alt="TOUR PHAN THIẾT - HANNA BEACH - BÀU SEN 2 NGÀY - Team Building + Gala Dinner">
                                    </li>

                                    <h3>TOUR PHAN THIẾT - HANNA BEACH - BÀU SEN 2 NGÀY - Team Building + Gala
                                        Dinner</h3>

                                    <p><i class="fa fa-clock-o"></i>Thời gian: 2 Ngày 1 Đêm</p>

                                    <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                                    <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                                    <h4> <span class="gia_ban">1,170,000 <span class="dvt">đ</span></span>
                                        <span class="gia_km">1,500,000 <span class="dvt">đ</span></span>
                                    </h4>

                                </a>

                            </ul>
                        </div>
                    </div>
                    <div class="clr"></div>
                    <!--  -->
                </div>
            </div>
        </div>
        <div class="box_tour_home">

            <div class="pagewrap">

                <div class="title_bs">Tour <span>Khách Đoàn</span>
                    <div class="xemall"><a href="" target="">Xem tất cả<i
                                class="fa fa-long-arrow-right"></i></a></div>

                </div>

                <div class="tour_id no_box flex">
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1680083745_Thiet-ke-chua-co-ten-39.png') }}"
                                    alt="TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia"></li>

                            <h3>TOUR NHA TRANG 4 ĐẢO - KHÁCH SẠN 4* TTC - Michelia</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 4 NGÀY 3 ĐÊM</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                            <h4> <span class="gia_ban">2,940,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">3,200,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-10%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1678071797_Thiet-ke-chua-co-ten-42.png') }}"
                                    alt="TOUR NHA TRANG 4 NGÀY - KHÁCH SẠN 4* TTC - Michelia"></li>

                            <h3>TOUR NHA TRANG 4 NGÀY - KHÁCH SẠN 4* TTC - Michelia</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 4 Ngày 3 Đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                            <h4> <span class="gia_ban">2,890,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">3,200,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-4%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1675475852_9.jpg') }}"
                                    alt="TOUR ĐẮK NÔNG - TÀ ĐÙNG TOPVIEW 3 NGÀY - RESORT 3 SAO + Homestay"></li>

                            <h3>TOUR ĐẮK NÔNG - TÀ ĐÙNG TOPVIEW 3 NGÀY - RESORT 3 SAO + Homestay</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 2 Đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,548,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">2,650,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1675320438_8.jpg') }}"
                                    alt="NINH BÌNH - TRÀNG AN - BÁI ĐÍNH - HANG MÚA - TUYỆT TÌNH CỐC"></li>

                            <h3>NINH BÌNH - TRÀNG AN - BÁI ĐÍNH - HANG MÚA - TUYỆT TÌNH CỐC</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 3 ngày 2 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">3,380,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">3,550,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1620699193_nh7.jpg') }}"
                                    alt="TOUR QUY NHƠN 3 Ngày 3 Đêm - Tàu Lửa"></li>

                            <h3>TOUR QUY NHƠN 3 Ngày 3 Đêm - Tàu Lửa</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 3 Ngày 3 Đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,868,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">3,000,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1677725381_Thiet-ke-chua-co-ten-23.png') }}"
                                    alt="PHÚ YÊN - QUY NHƠN 4 NGÀY 4 ĐÊM - BẰNG TÀU LỬA - GALA DINNER">
                            </li>

                            <h3>PHÚ YÊN - QUY NHƠN 4 NGÀY 4 ĐÊM - BẰNG TÀU LỬA - GALA DINNER</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 4 ngày 4 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                            <h4> <span class="gia_ban">3,878,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">4,050,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <a href="" target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1619431473_1.jpg') }}"
                                    alt="ĐÀ NẴNG – BÀ NÀ – HỘI AN 3 ngày 2 đêm"></li>

                            <h3>ĐÀ NẴNG – BÀ NÀ – HỘI AN 3 ngày 2 đêm</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 3 ngày 2 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: </p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                            <h4> <span class="gia_ban">3,038,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km"></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-4%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1618389584_phu-yen.jpg') }}"
                                    alt="TOUR PHÚ YÊN - GÀNH ĐÁ DĨA - VỊNH VŨNG RÔ 3 NGÀY 3 ĐÊM - BẰNG TÀU LỬA"></li>

                            <h3>TOUR PHÚ YÊN - GÀNH ĐÁ DĨA - VỊNH VŨNG RÔ 3 NGÀY 3 ĐÊM - BẰNG TÀU LỬA</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 03 ngày 03 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Theo Yêu Cầu</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP HỒ CHÍ MINH</p>

                            <h4> <span class="gia_ban">2,688,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">2,800,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="bottom_more">
                    <h3><a href="" target="">Xem thêm tour<i class="fa fa-long-arrow-right"></i></a></h3>
                </div>

            </div>
        </div>
        <div class="box_tour_home">

            <div class="pagewrap">

                <div class="title_bs">Tour <span>Ghép Đoàn</span>
                    <div class="xemall"><a href="" target="">Xem tất cả<i
                                class="fa fa-long-arrow-right"></i></a></div>

                </div>

                <div class="tour_id no_box flex">
                    <ul>
                        <a href="" target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1682678103_Thiet-ke-chua-co-ten-8.png') }}"
                                    alt="TOUR ĐẢO PHÚ QUÝ - MALDIVES VIỆT NAM 2 NGÀY 2 ĐÊM"></li>

                            <h3>TOUR ĐẢO PHÚ QUÝ - MALDIVES VIỆT NAM 2 NGÀY 2 ĐÊM</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 2 ngày 2 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Rạng sáng thứ 7 hàng tuần</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP. Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,450,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km"></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-3%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1682649207_Thiet-ke-chua-co-ten-12.png') }}"
                                    alt="TOUR ĐẢO BÌNH HƯNG 2 NGÀY - TIỆC BBQ HẢI SẢN (Mỗi khách 1  con Tôm Hùm)"></li>

                            <h3>TOUR ĐẢO BÌNH HƯNG 2 NGÀY - TIỆC BBQ HẢI SẢN (Mỗi khách 1 con Tôm Hùm)</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 2 Ngày 1 Đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Rạng Sáng Thứ 7 Hàng Tuần</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP. Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">1,650,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">1,700,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-4%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1682068440_Thiet-ke-chua-co-ten.png') }}"
                                    alt="CHECK-IN CẦU HÔN - KISS BRIDGE - GRAND WORLD - CÁP TREO HÒN THƠM"></li>

                            <h3>CHECK-IN CẦU HÔN - KISS BRIDGE - GRAND WORLD - CÁP TREO HÒN THƠM</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 4 ngày 3 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Hằng Ngày</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,500,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">2,600,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-5%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1675396053_5.jpg') }}"
                                    alt="CHECK-IN CẦU HÔN - KISS BRIDGE - GRAND WORLD - CÁP TREO HÒN THƠM"></li>

                            <h3>CHECK-IN CẦU HÔN - KISS BRIDGE - GRAND WORLD - CÁP TREO HÒN THƠM</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 3 ngày 2 đêm</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Hằng Ngày</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,050,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">2,150,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-10%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1667268570_bangia_tour_r2_c2.jpg') }}"
                                    alt="BẢNG GIÁ TOUR GHÉP ĐOÀN MIỀN BẮC, KHỞI HÀNH HÀNG TUẦN"></li>

                            <h3>BẢNG GIÁ TOUR GHÉP ĐOÀN MIỀN BẮC, KHỞI HÀNH HÀNG TUẦN</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: Hàng Tuần</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Hàng Tuần</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,000,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">2,200,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-3%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1667268781_1.jpg') }}"
                                    alt="ĐÀ NẴNG - SƠN TRÀ - CÙ LAO CHÀM/RỪNG DỪA BẢY MẪU - BÀ NÀ - HUẾ"></li>

                            <h3>ĐÀ NẴNG - SƠN TRÀ - CÙ LAO CHÀM/RỪNG DỪA BẢY MẪU - BÀ NÀ - HUẾ</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 4 NGÀY 3 ĐÊM</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Hằng Ngày</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">3,790,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">3,890,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-6%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1667268876_1.jpg') }}"
                                    alt="ĐÀ NẴNG - SƠN TRÀ - HỘI AN - BÀ NÀ - HUẾ - ĐỘNG PHONG NHA/THIÊN ĐƯỜNG"></li>

                            <h3>ĐÀ NẴNG - SƠN TRÀ - HỘI AN - BÀ NÀ - HUẾ - ĐỘNG PHONG NHA/THIÊN ĐƯỜNG</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 5 NGÀY 4 ĐÊM</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Thứ 4 Và Thứ Bảy Hàng Tuần</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">4,050,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">4,300,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <ul>
                        <div class="icon_label_giam_gia">Giảm<br>-9%<span>Mới</span></div> <a href=""
                            target="">

                            <li><img src="{{ asset('assets/datafiles/setone/thumb_1667271398_1.jpg') }}"
                                    alt="ĐÀ NẴNG - SƠN TRÀ - CÙ LAO CHÀM/RỪNG DỪA BẢY MẪU - HỘI AN - BÀ NÀ"></li>

                            <h3>ĐÀ NẴNG - SƠN TRÀ - CÙ LAO CHÀM/RỪNG DỪA BẢY MẪU - HỘI AN - BÀ NÀ</h3>

                            <p><i class="fa fa-clock-o"></i>Thời gian: 03 NGÀY 02 ĐÊM</p>

                            <p><i class="fa fa-calendar"></i>Ngày khởi hành: Hẵng Ngày</p>
                            <p><i class="fa fa-map-marker"></i>Khởi hành từ: TP Hồ Chí Minh</p>

                            <h4> <span class="gia_ban">2,550,000 <span class="dvt">đ</span></span> <span
                                    class="gia_km">2,800,000 <span class="dvt">đ</span></span></h4>

                        </a>

                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="bottom_more">
                    <h3><a href="" target="">Xem thêm tour<i class="fa fa-long-arrow-right"></i></a></h3>
                </div>

            </div>
        </div>
        {{-- <div class="dichvu_home"
            style="background: url({{ asset('assets/datafiles/setone/1577814362_bg_1.jpg') }}) center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -ms-background-size: cover;">

            <div class="pagewrap">
                <div class="flex">
                    <ul>

                        <div class="title_bs">VÉ <span>MÁY BAY</span></div>
                        <div class="nd">
                            <p style="text-align:center"><img alt="" height="300"
                                    src="{{ asset('assets//datafiles/img_data/images/ve may bay.jpg') }}" width="500">
                            </p>

                            <p>Phòng&nbsp;Vé máy bay&nbsp;công ty&nbsp;Du Lịch&nbsp;Ngọc Việt&nbsp;là một trong những đại lý
                                được ủy quyền của nhiều hãng hàng không trong nước và quốc tế. Quý khách có thể&nbsp;đặt vé
                                máy bay giá rẻ trực tuyến đơn giản, an toàn, tiết kiệm&nbsp;ngay tại&nbsp;Website Du Lịch
                                Ngọc Việt. Đồng thời cũng có thể&nbsp;so sánh vé máy bay nội địa, quốc tế trực tiếp từ các
                                hãng hàng.</p>
                            <div class="clr"></div>
                        </div>

                        <h3>
                            <a href="" target="">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
                        </h3>

                        <div class="clr"></div>

                    </ul>
                    <ul>

                        <div class="title_bs">CHO <span>THUÊ XE</span></div>
                        <div class="nd">
                            <p style="text-align:center"><img alt="" height="300"
                                    src="{{ asset('assets//datafiles/img_data/images/thue xe.jpg') }}" width="500">
                            </p>

                            <p>Để có thể lựa chọn cho mình dịch vụ&nbsp;thuê xe giá rẻ và hợp lý nhất,&nbsp; Quý khách có
                                thể tham khảo thêm thông tin các loại xe du lịch,<a href="">&nbsp;</a>thuê xe dịch
                                vụ&nbsp;cùng&nbsp;bảng giá thuê xe ngay tại Website và đặt thuê xe tuyến để nhận được nhiều
                                ưu đãi hấp dẫn. Tham khảo&nbsp;Bảng giá&nbsp;thuê xe du lịch&nbsp;mà&nbsp;Du Lịch
                                Ngọc&nbsp;Việt<strong>&nbsp;</strong>đang cung cấp</p>
                            <div class="clr"></div>
                        </div>

                        <h3>
                            <a href="" target="">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
                        </h3>

                        <div class="clr"></div>

                    </ul>
                    <div class="clr"></div>
                </div>
            </div>

        </div> --}}
        <div class="box_ttvb_home">
            <div class="pagewrap">
                <div class="title_bs">TIN TỨC <span>&amp; SỰ KIỆN</span>
                    <div class="xemall"><a href="" target="">Xem tất cả<i
                                class="fa fa-long-arrow-right"></i></a></div>
                </div>

                <div class="ttvb_home_l">

                    <ul>

                        <li><a href="" target=""><img src=""
                                    class="isload isload_full isload_full_1"
                                    data-original="{{ asset('assets/datafiles/setone/1679709193_1.jpg') }}"
                                    alt="Các lễ hội và sự kiện nổi bật tại Thái Lan trong mùa hè"></a></li>

                        <h3><a href="" target="">Các lễ hội và sự kiện nổi bật tại Thái Lan trong mùa hè</a>
                        </h3>

                        <p><span class="lm_4">Đến với Thái Lan, là đến với vùng đất của những lễ hội rực rỡ sắc màu, náo
                                nhiệt vui vẻ. Tham khảo ngay bài viết này để không bỏ lỡ nhé!</span></p>

                    </ul>

                </div>

                <div class="ttvb_home_c">
                    <ul>

                        <li><a href="" target=""><img src=""
                                    class="isload isload_full isload_full_1"
                                    data-original="{{ asset('assets/datafiles/setone/thumb_1679034594_1.jpg') }}"
                                    alt="Kinh nghiệm du lịch Phú Quốc dịp lễ 30-4 và những lưu ý"></a></li>

                        <h3><a href="" target="">Kinh nghiệm du lịch Phú Quốc dịp lễ 30-4 và những lưu ý</a>
                        </h3>

                    </ul>
                    <ul>

                        <li><a href="" target=""><img src=""
                                    class="isload isload_full isload_full_1"
                                    data-original="{{ asset('assets/datafiles/setone/thumb_1679034270_1.jpg') }}"
                                    alt="Điểm du lịch nổi tiếng không thể bỏ qua ở Thái Lan dịp lễ 30/4"></a></li>

                        <h3><a href="" target="">Điểm du lịch nổi tiếng không thể bỏ qua ở Thái Lan dịp lễ
                                30/4</a></h3>

                    </ul>

                </div>

                <div class="ttvb_home_r">
                    <ul>
                        <h3><a href="" target="">Kinh nghiệm du lịch Phú Quốc dịp lễ 30-4 và những lưu ý</a>
                        </h3>
                        <p><i class="fa fa-calendar"></i>Ngày 17/03/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">Điểm du lịch nổi tiếng không thể bỏ qua ở Thái Lan dịp lễ
                                30/4</a></h3>
                        <p><i class="fa fa-calendar"></i>Ngày 17/03/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">4 điểm du lịch Tây Bắc nổi tiếng nhất định phải đến một lần
                                trong đời</a>
                        </h3>
                        <p><i class="fa fa-calendar"></i>Ngày 24/02/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">Du lịch Mỹ cần bao nhiêu tiền - Cập nhật 2023</a></h3>
                        <p><i class="fa fa-calendar"></i>Ngày 24/02/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">Tất tần tật những kinh nghiệm du lịch Thái Lan tự túc dịp 8-3
                                mà bạn nên
                                biết</a></h3>
                        <p><i class="fa fa-calendar"></i>Ngày 21/02/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">Du lịch Sapa nên mặc gì để có những tấm hình cực chất</a>
                        </h3>
                        <p><i class="fa fa-calendar"></i>Ngày 21/02/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">Kinh nghiệm đi tour du lịch Nhật Bản tháng 3 chi tiết
                                2023</a></h3>
                        <p><i class="fa fa-calendar"></i>Ngày 18/02/2023</p>

                    </ul>
                    <ul>
                        <h3><a href="" target="">Một số điều cần biết trước khi đến du lịch Hoa Kỳ</a></h3>
                        <p><i class="fa fa-calendar"></i>Ngày 18/02/2023</p>

                    </ul>
                </div>

                <div class="clr"></div>

            </div>

        </div>
        <div class="box_home_2"
            style="background: url({{ asset('assets/datafiles/setone/1577813835_bg_2.jpg') }}) center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -ms-background-size: cover;padding:50px">

            <div class="pagewrap">

                <ul>

                    <h3>BẠN CẦN TƯ VẤN</h3>
                    <p>VUI LÒNG ĐỂ LẠI THÔNG TIN ĐỂ CHÚNG TÔI CÓ THỂ TƯ VẤN RÕ HƠN !</p>

                    <form action="" method="post" name="dk_email_nhantin" id="dk_email_nhantin"
                        enctype="multipart/form-data">
                        <div class="">
                            <div class="col-md-7 row-frm">
                                <input type="text" name="ip_sentmail_name" id="ip_sentmail_name" class="form-control"
                                    placeholder="Họ &amp; tên">
                            </div>
                            <div class="col-md-7 row-frm">
                                <input type="text" name="ip_sentmail_phone" id="ip_sentmail_phone"
                                    class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="col-md-7 row-frm">
                                <input type="text" name="ip_sentmail" id="ip_sentmail" class="form-control"
                                    placeholder="Email *">
                            </div>
                            <h4><a onclick="DANGKY_email('')" class="cur">Đăng ký ngay <img src=""
                                        class="ajax_img_loading ajax_img_loading_mail"></a></h4>
                            <input name="" type="hidden" id="" value="90303">
                            <div class="clr"></div>
                        </div>
                    </form>

                </ul>

            </div>

        </div>
        <div class="camket_home">

            <div class="pagewrap">
                <div class="flex">
                    <ul class="box_color box_color_1">

                        <li><img src="" class="isload isload_full isload_full_1"
                                data-original="{{ asset('assets/datafiles/setone/1577887579_i-ads-1.svg') }}"
                                alt="Đặt Khách Sạn"></li>

                        <h3>Đặt Khách Sạn<span>Đặt khách sạn tốt nhất tại các địa điểm du lịch nổi tiếng
                                Liên hệ: Ms Vy: 077.265.7127</span></h3>

                        <div class="clr"></div>

                    </ul>
                    <ul class="box_color box_color_2">

                        <li><img src="" class="isload isload_full isload_full_1"
                                data-original="{{ asset('assets/datafiles/setone/1577887628_i-ads-2.svg') }}"
                                alt="Cho Thuê Xe"></li>

                        <h3>Cho Thuê Xe<span>Dịch vụ thuê xe 4 đến 45 chỗ,&nbsp;giá tốt nhất&nbsp;uy tín và chu đáo
                                Liên hệ: Ms Vy:&nbsp;077.265.7127</span></h3>

                        <div class="clr"></div>

                    </ul>
                    <ul class="box_color box_color_3">

                        <li><img src="" class="isload isload_full isload_full_1"
                                data-original="{{ asset('assets/datafiles/setone/1577887668_i-ads-3.svg') }}"
                                alt="Visa &amp; Hộ Chiều"></li>

                        <h3>Visa &amp; Hộ Chiếu<span>Dịch vụ Hộ Chiếu và&nbsp;Visa nhanh, rẻ. Visa trọn gói, thủ tục đơn
                                giản

                                Liên hệ: Ms Vy:&nbsp;077.265.7127</span></h3>

                        <div class="clr"></div>

                    </ul>
                    <ul class="box_color box_color_4">

                        <li><img src="" class="isload isload_full isload_full_1"
                                data-original="{{ asset('assets/datafiles/setone/1577887698_i-ads-4.svg') }}"
                                alt="Đại Lý Vé Máy Bay"></li>

                        <h3>Đại Lý Vé Máy Bay<span>Vé máy bay giá rẻ nhất, nhiều khuyến mãi hấp dẫn
                                Liên hệ: Ms Vy: 077.265.7127</span></h3>

                        <div class="clr"></div>

                    </ul>
                    <div class="clr"></div>
                </div>
            </div>

        </div>
        <div class="clr"></div>
    </div>
@endsection
