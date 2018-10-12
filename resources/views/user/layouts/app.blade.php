<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<!-- header -->
<div class="headers">
    <div class="container">
    {{ trans('messages.welcome') }}
        <!-- header -->
        <div class="row col-md-12 lg header-all" style="margin: 0px; padding: 0px">
            <div class="col-md-3 col-xs-12 header-logo">
                <img src="image/logo.PNG" height="150px">
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="col-md-12 header-language">
                    <a href="{{route('user.change-language','en')}}"><img src="/image/en.jpg"></a>&nbsp;
                    <a href="{{route('user.change-language','vn')}}"><img src="/image/vn.jpg"></a>
                </div>
            </div>
        </div>
        <!-- menu -->
        <nav class="navbar navbar-expand-lg navbar-light col-md-12 " style="background-color: #EE9600; ">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto col-md-9">
                    <li class="nav-item">
                        <a id="clnav" class="nav-link" href="index.html" >Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="clnav" class="nav-link" href="vatpham.html" >Vật Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a id="clnav" class="nav-link" href="phongthuy.html" >Phong Thủy</a>
                    </li>
                    <li class="nav-item">
                        <a id="clnav" class="nav-link" href="tuvi.html" >Tử Vi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="clnav" class="nav-link dropdown-toggle" href="sach.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Sách
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a id="clnav" class="nav-link" href="#">Diễn Đàn</a>
                    </li>
                    <li class="nav-item">
                        <a id="clnav" class="nav-link" href="lienhe.html">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- menu -->
        <!-- header -->

        <!-- slide -->
        @yield('slide')
        <!-- slide -->
    </div>
</div>
</div>
<!-- header -->

<br>
<!-- contents -->
<div class="contents">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mobiess">
                <div style="background: #BB0000;">

                    <div class="right">
                        <h3>
                            <span>Vật Phẩm</span>
                        </h3>
                        <a href=""><li>Sức khỏe</li></a>
                        <a href=""><li>Tài lộc,phú quý</li></a>
                        <a href=""><li>Thăng quan,tiến chức</li></a>
                        <a href=""><li>Học hành, khoa bảng</li></a>
                        <a href=""><li>Hôn nhân, hạnh phúc</li>	</a>
                        <a href=""><li>Vượng đinh, Quý tử</li></a>
                        <a href=""><li>Giải ách, trừ tai</li></a>
                        <a href=""><li>Chế sát</li>	</a>
                        <a href=""><li>Dụng cụ Phong thủy</li>	</a>
                        <a href=""><li>Linh Phù</li></a>
                    </div>
                    <div class="right">
                        <h3>
                            <span>Tư vấn</span>
                        </h3>
                        <a href=""><li>Tư Vấn Phong Thủy</li></a>
                        <a href=""><li>Thiết Kế Phong Thủy</li></a>
                        <a href=""><li>Tư Vấn Tử Vi</li></a>
                    </div>
                    <div class="right">
                        <h3>
                            <span>Trang liên kết</span>
                        </h3>
                        <a href=""><li>Blog Laido</li></a>
                        <a href=""><li>Lý Số Việt Nam</li></a>
                        <a href=""><li>Lý Học Phương Đông</li></a>
                        <a href=""><li>Phần mềm Phù Đổng</li></a>
                        <a href=""><li>Việt lý số</li></a>
                        <a href=""><li>Kiến trúc phong thủy Việt Linh</li></a>
                        <a href=""><li>Ngũ Hành</li></a>
                        <a href=""><li>Góc Phong Thủy</li></a>
                        <a href=""><li>Blog SEOer Nghiệp dư</li></a>
                    </div>
                    <div class="right" style="height: 671px;">

                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sx-12">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            <div class="col-md-2 mobiess">
                <div class="tin">
                    <div class="tin-1">
                        <div class="tin-11">
                            <h3>Tin mới nhất</h3>
                            <li><a href="">ẤT MÙI NIÊN, XUẤT HÀNH, XU CÁT TỊ HUNG (tiếp)</a></li>
                            <li><a href="">NĂM 2015 - ẤT MÙI XU CÁT TỊ HUNG</a></li>
                            <li><a href="">XU CÁT TỊ HUNG CHO NĂM 2014 – GIÁP NGỌ</a></li>
                            <li><a href="">LỚP PHONG THỦY SƠ TRUNG CẤP</a></li>
                            <li><a href="">CHU TƯỚC HỮU DƯ TIẾN HÀ ẨM THỦY (Tiếp)</a></li>
                        </div>
                    </div>
                </div>
                <div class="tin">
                    <div class="tin-1">
                        <div class="tin-11">
                            <h3>Sản phẩm mới</h3>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom: 1px dashed;">
                                <tbody>
                                <tr align="center">
                                    <td>
												<span>
													CẦU THẠCH ANH
												</span>
                                        <br>
                                        <a href="">
                                            <img src="image/tanh.jpg">
                                        </a>
                                        <br>
                                        <a href="">gọi điện hỏi giá</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom: 1px dashed;">
                                <tbody>
                                <tr align="center">
                                    <td>
												<span>
													La kinh tiếng việt 2013
												</span>
                                        <br>
                                        <a href="">
                                            <img src="image/lkinh.jpg">
                                        </a>
                                        <br>
                                        <a href="">gọi điện hỏi giá</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tin">
                    <div class="tin-1">
                        <div class="tin-11">
                            <h3>Sản phẩm mới</h3>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                <tr align="center">
                                    <td>
                                        <a href="">
                                            <img src="image/dh.gif">
                                        </a>
                                        <br>
                                        <p>Giỏ của bạn chưa có hàng</p>
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
<!-- contents -->
</div>
<!-- footer -->
<div class="footers" style="padding-left: 30px">
    <div class="container" style="background: #ee9600; ">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="fter col-md-9 col-xs-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                </ul>
                <small style="color: red">
                    Chúng tôi bán hàng trực tuyến. Vui lòng liên hệ: abc@phongthuyvanxuan.vn - 0999999999
                </small>
                <br>
                <small>
                    Copyright &copy; 2018 Phong Thuy Van Xuan. Modified by
                    <a href="">Agriplus.vn</a>
                </small>
                <br>
            </div>
        </div>

    </div>
</div>
<!-- footer -->
</body>
</html>






<script language="javascript">
    $('#myCarousel').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });

    $('#myCarousel').carousel({
        interval: 4000
    });


    $(document).ready(function() {
        /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function(event){
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);
            content.html($(this).html());
            $(".modal-profile").modal({show:true});
        });

    });
</script>