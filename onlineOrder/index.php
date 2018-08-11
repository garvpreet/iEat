<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $sql_p = "SELECT * FROM products WHERE id={$id}";
        $query_p = mysqli_query($con, $sql_p);
        if (mysqli_num_rows($query_p) != 0) {
            $row_p = mysqli_fetch_array($query_p);
            $_SESSION['cart'][$row_p['id']] = array("quantity" => 1, "price" => $row_p['productPrice']);
            header('location:index.php');
        } else {
            $message = "Product ID is invalid";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>iEat - Online Pizza Restaurant</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/orange.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>
<body class="cnt-home">


<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
    <?php include('includes/top-header.php'); ?>
    <?php include('includes/main-header.php'); ?>
    <?php include('includes/menu-bar.php'); ?>
</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="furniture-container homepage-container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                </div><!-- /.sidemenu-holder -->

                <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="hero" class="homepage-slider3">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            <div class="full-width-slider">
                                <div class="item" style="background-image: url(assets/images/sliders/slider1.jpg);">
                                </div>
                            </div>

                            <div class="full-width-slider">
                                <div class="item full-width-slider" style="background-image: url(assets/images/sliders/slider2.jpg);">
                                </div>
                            </div>

                            <div class="full-width-slider">
                                <div class="item full-width-slider" style="background-image: url(assets/images/sliders/slider3.jpg);">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                </div><!-- /.homebanner-holder -->

            </div><!-- /.row -->

            <div class="row"></div>

            <!-- ============================================== SCROLL TABS ============================================== -->
            <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
                <div class="more-info-tab clearfix">
                    <h3 class="new-product-title pull-left">Featured Items</h3>
                    <!--<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                        <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                        <li><a href="#books" data-toggle="tab">Books</a></li>
                        <li><a href="#furniture" data-toggle="tab">Furniture</a></li>
                    </ul>-->
                </div>

                <div class="tab-content outer-top-xs">
                    <div class="tab-pane in active" id="all">
                        <div class="product-slider">
                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                <?php
                                $ret = mysqli_query($con, "select * from products where category !=0");
                                while ($row = mysqli_fetch_array($ret)) {
                                    # code...


                                    ?>


                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
                                                            <img class="img-circle" src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
                                                                 data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
                                                                 width="180" height="180" alt=""></a>
                                                    </div>


                                                </div>


                                                <div class="product-info text-center">
                                                    <h3 class="name"><a
                                                                href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a>
                                                    </h3>
                                                    <!--<div class="rating rateit-small"></div>-->
                                                    <div class="description"></div>

                                                    <div class="product-price">
				                                        <span class="price">&dollar;<?php echo htmlentities($row['productPrice']); ?></span>
                                                        <!--<span class="price-before-discount">&dollar;<?php /*echo htmlentities($row['productPriceBeforeDiscount']); */?>	</span>-->

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================== TABS ============================================== -->

            <!-- ============================================== TABS : END ============================================== -->
        </div>
    </div>
    <?php include('includes/footer.php'); ?>

    <script src="assets/js/jquery-1.11.1.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- For demo purposes – can be removed on production -->

    <script src="switchstylesheet/switchstylesheet.js"></script>

    <script>
        $(document).ready(function () {
            $(".changecolor").switchstylesheet({seperator: "color"});
            $('.show-theme-options').click(function () {
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function () {
            $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
    <!-- For demo purposes – can be removed on production : End -->


</body>
</html>