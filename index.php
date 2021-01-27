<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/check.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Web bán hàng Write by HuyK3</title>
</head>

<body>

    <div class="container">
        <!--Head-->
        <div class="container__head">
            <div class="container__head__logo">
                <a href="index.html">
                    <h3>WebHuyK3</h3>
                </a>
            </div>
            <div class="container__head__search">
                <p>Vui lòng tìm kiếm sản phẩm ở đây !!!</p>
                <input type="text" placeholder="Search">
                <button>Tìm kiếm</button>
                <br>
                <small>Ví dụ: Dell,laptop,điện thoại...</small>
            </div>
            <div class="container__head__cart">
                <p>Thông tin giỏ hàng</p>
                <a href="./cart.php"><i class="fas fa-cart-plus"></i></a>
                <small>0sp</small>
            </div>
            <div class="container__head__log">
                <a href="sign.php">
                    <h2 id="login">Log in</h2>
                </a>

            </div>
        </div>
        <div class="container__headnav" id="nav">
            <nav>
                <ul id="main_menu">
                    <li><a href="#"><i class="fas fa-home"></i></a></li>
                    <li><a href="#">Giới thiệu <i class="fas fa-pager"></i></a></li>
                    <li><a href="#">Xe xịn <i class="fas fa-mobile"></i></a>
                        <ul class="sub_menu">
                            <li><a href="./customer/iphone8.html">Iphone8</a></li>
                            <li><a href="">IphoneX</a></li>
                            <li><a href="">Ipad</a></li>
                            <li><a href="">Galaxy</a></li>
                            <li><a href="">Oppo</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Xe Cùi <i class="fas fa-desktop"></i></a>
                        <ul class="sub_menu">
                            <li><a href="">Samsung</a></li>
                            <li><a href="">Asus</a></li>
                            <li><a href="">Lenove</a></li>
                            <li><a href="">Apple</a></li>
                            <li><a href="">Oppo</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Xe Vừa Vừa <i class="fas fa-laptop"></i></a></li>
                    <li><a href="#">Phụ Kiện <i class="fas fa-keyboard"></i></a></li>
                    <li><a href="#">Hỗ trợ <i class="far fa-question-circle"></i></a>
                        <ul class="sub_menu">
                            <li><a href="https://www.facebook.com/NothingFormeRN/">Facebook</a></li>
                            <li><a href="#">About:</a></li>
                            <li><a href="gamecaro.html">Game Caro</a></li>
                        </ul>
                    </li>
                </ul>

            </nav>
        </div>
        <!--body-->
        <div class="container__body">
            <!--Layout trên-->
            <div class="container__body__top">
                <div class="container__body__top__left">
                    <div class="container__body__top__left__first">
                        <div class="container__body__top__left__first__top">
                            <a href="#">Picture 1</a>
                        </div>
                        <div class="container__body__top__left__first__mid">
                            <a href="#">Picture 2</div>
                        <div class="container__body__top__left__first__down">
                            <a href="#">Picture 3</a>
                        </div>
                    </div>
                    <div class="container__body__top__left__second">
                        <div class="container__body__top__left__second__top">
                            <a href="#">â</a>
                        </div>
                        <div class="container__body__top__left__second__mid">
                            <div class="container__body__top__left__second__mid__left">
                                <a href="#">a</a>
                            </div>
                            <div class="container__body__top__left__second__mid__right">
                                <a href="#">a</a>
                            </div>
                        </div>
                        <div class="container__body__top__left__second__down">
                            <a href="#">a</a>
                        </div>
                    </div>
                    <div class="container__body__top__left__third">
                        <div class="container__body__top__left__third__top">
                            <a href="#">a<img src="" alt=""></a>
                        </div>
                        <div class="container__body__top__left__third__mid">
                            <a href="#">a<img src="" alt=""></a>
                        </div>
                        <div class="container__body__top__left__third__down">
                            <a href="#">a<img src="" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--SlidesShow-->
                <div class="container__body__top__right">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <img src="img/slide1.png" style="width:100%">
                            <div class="text">Anime 1</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <img src="img/slide2.png" style="width:100%">
                            <div class="text">Anime 2</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <img src="img/slide3.png" style="width:100%">
                            <div class="text">Anime 3</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">4 / 4</div>
                            <img src="img/slide4.png" style="width:100%">
                            <div class="text">Anime 4</div>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>








            <!--layout dưới-->






        </div>
        <div class="container__body__down">
            <div class="container__body__down__left">
                <div class="container__body__down__left__time" id="time"></div>
                <div class="container__body__down__left__content">
                    <div class="container__body__down__left__content__Fcontact">
                        <b>Nhân viên bán hàng 1</b>
                        <p>Ms: Xuân <b>Sdt: 0987827555</b></p>
                    </div>
                    <div class="container__body__down__left__content__Scontact">
                        <b>Nhân viên bán hàng 2</b>
                        <p>Mr: Long <b>Sdt: 0987469359</b></p>
                    </div>
                </div>

            </div>
            <div class="container__body__down__right">
                <div class="container__body__down__right__top">
                    <marquee scrollamount="12" width="95%" direction="right" height="100px">Chào mừng bạn đến với website của chúng tôi,chúc bạn có một buổi mua sắm vui vẻ !!!</marquee>
                </div>
                <div class="container__body__down__right__down">
                    <div class="container__body__down__right__down__title">
                        <span>Sản phẩm nổi bật</p>
                    </div>
                    <div class="container__body__down__right__down__item">
                        <?php
                        // Create connection
                        $conn = new mysqli("localhost", "root", "", "webds");
                        // get Data from database product
                        $result = $conn->query("SELECT * FROM `product`");
                        while ($row = $result->fetch_array()) {
                            $product_id = $row["ProductID"];
                            $product_name = $row["ProductName"];
                            $product_price = $row["ProductPrice"];
                            $product_Description = $row["ProductDescription"];
                            $CategoryID = $row["CategoryID"];
                            $product_image = $row["product_image"];


                            echo "
                            <div class='single_product'>
                                <h3>$product_name</h3>
                                <img src='$product_image' width='180' height='180' />
                                
                                <p><b> Price: $product_price </b></p>
                                
                                </a>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer"></div>
    </div>
    <script>
        function checkcustomer() {
            alert("vui lòng đăng nhậP trước khi mua sản phẩm");
        }
    </script>
    <script src="script/index.js"></script>
</body>

</html>