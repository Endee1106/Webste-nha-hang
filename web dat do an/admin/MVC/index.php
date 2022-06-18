<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script
        src="https://kit.fontawesome.com/8c4b870cf3.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <title>Food</title>
    <link rel="stylesheet" href="./public/css/main.css?v=<?php echo time(); ?>" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>

    <title>Food</title>
    
    <link rel="stylesheet" href="./public/css/main.css?v=<?php echo time(); ?>" />
</head>
<body onload="time()" class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
        <ul class="app-nav">
        <!-- User Menu-->
            <li>
                <a class="app-nav__item" href="../?act=logout"><i class='bx bx-log-out bx-rotate-180'></i> </a>
            </li>
        </ul>
    </header>
  <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="public/images/hinhadmin.jpg" width="50px"
                alt="User Image">
                <div>
      <p class="app-sidebar__user-name"><b>Chào <?= $_SESSION['login']['name']?> 
                                    </b></p>
    </div>
    </div>
    <hr>
        <ul class="app-menu">
            <li><a href="../?act=home" class="app-menu__item haha"><i class='app-menu__icon bx bx-cart-alt'></i>
                <span class="app-menu__label">Trang mua hàng</span></a></li>
            <li><a href="?act=admin" class="app-menu__item" href="index.html"><i class='app-menu__icon bx bx-tachometer'></i><span
                    class="app-menu__label">Trang chủ</span></a></li>
            <li><a class="app-menu__item " href="?act=controller&xuli=join"><i class='app-menu__icon bx bx-id-card'></i> <span
                    class="app-menu__label">Quản lý khách hàng</span></a></li>
            
            <li><a class="app-menu__item" href="?act=product&xuli=join"><i
                    class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý món ăn</span></a>
            </li>
            <li><a class="app-menu__item" href="?act=order"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Quản lý đơn hàng</span></a></li>
            
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-dollar'></i><span
                    class="app-menu__label">Gallery</span></a></li>
                    <li><a class="app-menu__item" href="?act=tk&xuli=join"><i
                    class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Thống Kê</span></a>
            </li>
        </ul>
    </aside>
  
    <!-- REDIRECT HERE -->

    <?php 
        $act = isset($_GET['act']) ? $_GET['act'] : 'home';
        switch($act) {
            case 'home':
                require_once('MVC/Views/Home/home.php');
                break;
            case 'controller':
                $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                switch($act) {
                    case 'join':
                        require_once('MVC/Views/customer/customer.php');
                        break;
                    case 'see':
                        require_once('MVC/Views/customer/see_customer.php');
                        break;
                    }
                    break;
            case 'banner':
                $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                switch($act) {
                    case 'add':
                        require_once('MVC/Views/Banner/form-add-bi-cam.php');
                        break;
                    default:
                        require_once('MVC/Views/Banner/table-data-banner.php');
                        break;
                }
                break;
            case 'tk':
                $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                switch($act) {
                    case 'join':
                        require_once('MVC/Views/Thongke/thongke.php');
                        break;
                    default:
                        require_once('MVC/Views/Thongke/thongke.php');
                        break;
                }  
                break;
            case 'order':
                $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                switch($act) {
                    case 'join':
                        require_once('MVC/Views/TableOrder/table-data-order.php');
                        break;
                    case 'chua':
                        require_once('MVC/Views/TableOrder/dhchuaxuly.php');
                        break;
                    case 'dangchua':
                        require_once('MVC/Views/TableOrder/dhdangxuly.php');
                        break;
                    case 'da':
                        require_once('MVC/Views/TableOrder/dhdaxuly.php');
                        break;
                    case 'huy':
                        require_once('MVC/Views/TableOrder/dhhuy.php');
                        break;
                    case 'update':
                        require_once('MVC/Views/TableOrder/xulydonhang.php');
                        break;
                    default:
                        require_once('MVC/Views/TableOrder/table-data-order.php');
                        break;
                    }  
                    break;
            case 'product':
                $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                switch($act) {
                    case 'join':
                        require_once('MVC/Views/product/list_product.php');
                        break;
                    case 'add':
                        require_once('MVC/Views/product/add_pr.php');
                        break;
                    case 'store':
                        $controller->store();
                        break;
                    case 'update':
                        require_once('MVC/Views/product/edit.php');
                        break;
                    case 'edit':
                        $controller->update();
                        break;
                    case 'delete':
                        $controller->delete();
                        break;
                    }  
            
                break;
            default:
                require_once('MVC/Views/Home/home.php');
        }
    ?>

    <!-- END REDIRECT HERE -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    
    <script type="text/javascript">
        //Thời Gian
        function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
            i = "0" + i;
            }
            return i;
        }
        }
    </script>
    
    <!-- <script>
        new Morris.Line({
        // ID of the element in which to draw the chart.
            element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
            data: [
                { year: '2008', value: 20 },
                { year: '2009', value: 10 },
                { year: '2010', value: 13 },
                { year: '2011', value: 5 },
                { year: '2012', value: 20 }
            ],
        // The name of the data record attribute that contains x-values.
            xkey: 'year',
        // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
            labels: ['Value']
        });
    </script> -->
    
</body>
    <script src="public/js/main.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        const images = document.querySelectorAll(".wrapper .image img");
        const gallery = document.querySelector(".gallery");
        const galleryImg = document.querySelector(".gallery-inner img");
        const close = document.querySelector(".gallery .close_ga");

        const next = document.querySelector(".control.next_ga");
        const prev = document.querySelector(".control.prev_ga");

        let currentIndex = 0;

        images.forEach((img, index) => {
        img.addEventListener("click", () => {
            currentIndex = index;
            showGallery();
        });
        });

        function showGallery() {
        currentIndex == images.length - 1
            ? next.classList.add("hide")
            : next.classList.remove("hide");

        currentIndex == 0
            ? prev.classList.add("hide")
            : prev.classList.remove("hide");

        gallery.classList.add("show");
        galleryImg.src = images[currentIndex].src;
        }

        close.addEventListener("click", () => {
        gallery.classList.remove("show");
        });

        next.addEventListener("click", () => {
        currentIndex != images.length - 1 ? currentIndex++ : undefined;
        showGallery();
        });
        prev.addEventListener("click", () => {
        currentIndex != 0 ? currentIndex-- : undefined;
        showGallery();
        });

        // esc click
        document.addEventListener("keydown", (e) => {
        if (e.keyCode == 27) gallery.classList.remove("show");
        });

                function user_name(){
            const toggleMenu = document.querySelector('.user_menu');
            toggleMenu.classList.toggle('user_active')
        }



        //show - hide mật khẩu
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text"
            } else {
                x.type = "password";
            }
        }
        $(".click-eye").click(function() {
            $(this).toggleClass("bx-show bx-hide");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</html>