<!DOCTYPE html>
<html lang="en">
<head>

    <title>iEat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">

    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>


    <!-- Links from food truck -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section loading sign ekn e kaj korbe jokon scrool korbo-->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
    <div class="gradient-overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12" >
                <h1 class="wow fadeInDown" data-wow-delay="0.6s">iEat</h1>
                <h3 class="wow fadeInDown" data-wow-delay="1.0s" style="color:white; font-weight:bold">Pizza Ordering Online Restaurant</h3>
                <a href="#feature" class="wow fadeInDown btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Explore</a><br>
            </div>

        </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <!-- <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Daffodil Food House</a>
        </div> -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#top" class="smoothScroll">Home</a></li>
                <li><a href="#feature" class="smoothScroll">Features</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li class="menu"><a href="#menu" class="smoothScroll">Menu</a></li>
                <!-- <li><a href="#gallery" class="smoothScroll">Gallery</a></li> -->
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
                <li><a href="#team" class="smoothScroll">Team</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginmodal" class="smoothScroll">Login</a></li>
                <li><a href="{{route('register')}}" class="smoothScroll">Sign Up</a></li>
                @if(Illuminate\Support\Facades\Auth::check())
                    <li><a href="#">
                        {{'('}}
                        {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                        {{')'}}
                    </a></li>
               @endif
            </ul>
        </div>

    </div>
</div>


<!-- Feature section -->
<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                    <h2>Why Choose Us?</h2>
                    <!-- <h4>iEat Restaurant, Downtown Campus, Concordia University, Montreal.</h4> -->
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-usd"></i></span>
                    </div>
                    <h3>POCKET FRIENDLY</h3>
                    <p>Competitive Prices in Montreal!</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-car"></i></span>
                    </div>
                    <h3>FAST DELIVERY</h3>
                    <p>Pioneer in the Pizza Delivery Industry!</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-cutlery"></i></span>
                    </div>
                    <h3>EXOTIC PIZZA MENU</h3>
                    <p>Delicious, Scrumptious, Fresh Pizzas!</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- About section -->
<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Our Story</h2>
                    <h4>Your Online Restaurant since 2018</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
                <img src="images/about-img.jpg" class="img-responsive" alt="About">
                <h3>We take orders online.</h3>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

                <p>iEat Restaurent serves mouth-watering freshly prepared pizzas. We wont give you a chance of disappointment!!</p>
            </div>


        </div>
    </div>
</section>


<!-- Menu section -->
<section id="menu" class="parallax-section">
    <div class="container">
        {{--<div class="row">--}}

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Menu</h2>
                </div>
            </div>

            <!-- Start of hidden section -->
            <div hidden class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Food Menu</h2>
                    <h4>we have special menus</h4>
                </div>
            </div>

            <div hidden class="row">
                @foreach($value as $item)

                <div class="col-md-6 col-sm-6">
                    <div class="media wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media-object pull-left">
                            <img src="{{'/storage/foodpic/'.$item->photo}}" class="img-responsive" alt="Food Menu">
                            <span class="menu-price">{{$item->price}} tk</span>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{$item->name}}</h3>
                            <p>You Should to test it. It's So much testy</p>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
            <!-- end of hidden section -->

            <!-- New code from Food truck -->
            <?php
/**
 * index.php generates the initial page the user sees when using this app.
 * It uses the class file food.php to instantiate the food objects that store the data for the menu:
 * The food names, description and price.
 *
 * In addition, this page contains a form that has:
 *      dropdown selection of the available food items;
 *      number input field for the quantity
 *      button to add more items
 *      button to submit the order
 *
 * Invalid input(no values) is prevented by HTML required tags,
 * and by checking the input upon submission,
 * notifying the user the selection was invalid and providing the option to go back.
 *
 */

require "food.php";
//Building the form dynamically, from an array of objects

//instantiate initial objects representing the types of food offered
$pizza   = new Food("pizza");
$burrito = new Food("burrito");
$salad   = new Food("salad");
$curry   = new Food("curry");


/** @var array $foodOffer is an array of the available food objects*/
$foodOffer = array(
    $pizza,
    $burrito,
    $salad,
    $curry
);

//include 'includes/header.php';
?>


    <div class="col-sm-6">
    <h3>Menu</h3>
<?php
//iterate through the array of food objects and populate the menu with data from the objects
foreach ($foodOffer as $food) {
    echo '<div class = "menuItem">
              <h5 class="foodName">' . $food->name . '</h5>
              <p class="price"> | $' . $food->price . '</p>
              <p>' . $food->description . '</p>
              </div>';
}

?>
   </div>
<div id="template" class="hide">
    <div class="singleItem">
        <select class="item" name="items[]" required aria-required="true">
            <option value="" disabled selected>I want..</option>
            <?php

//create the food select dropdown
foreach ($foodOffer as $food) {
    echo '<option value="' . $food->type . '">' . $food->name . '</option>';
}
?>

        </select>

        <input type="number" name="quantity[]" min="1" max="10" placeholder="How many?" required>
        <input type="button" class="removeItem" value="-">


        <?php
//create the additional toppings
foreach ($foodOffer as $food) {
    
    
    $availableToppings = $food->extras;
    //           echo var_dump($availableToppings);
    if ($availableToppings) {
        echo '<div class="hide toppings ' . $food->type . '">
                          <p>Additional Toppings - $0.75 each</p>';
        foreach ($availableToppings as $topping) {
            echo '<label><input type="checkbox" value="' . $topping . '">' . $topping . '</label>';
        }//end of foreach
        echo '</div>';
    }//end of if statement
}//end of foreach statement
?>
   </div>
</div>

<form method="post" action="formhandler.php">
    <div id = "food" class="col-sm-6">
        <img src="images/foodtruck.jpg" alt="Image of FoodTruck" class="img-responsive center-block img-thumbnail">
        <h4 class="text-center">What do you feel like eating today?</h4>
        <div class="form-group buttons">
            <input type="button" id="addItem" value="Add More">
            <input type="submit" value=" Place Order">
        </div>
    </div>

</form>

<?php
//include 'includes/footer.php';
?>
            <!-- End of code from Food truck -->

        </div>
    {{--</div>--}}
</section>

<!-- Gallery section 
<section id="gallery" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                        <h2>Food Gallery</h2>
                        <h4>we have special foods</h4>
                    </div>
                </div>

                <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

                    <ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".breakfast">Breakfast</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".pizza">Snacks</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".lunch">Lunch</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".dinner">Dinner</a></li>
                    </ul>

                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                        <div class="iso-box-wrapper col4-iso-box">

                            <div class="iso-box breakfast pizza lunch col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img1.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Sankes</h3>
                            </div>

                            <div class="iso-box breakfast lunch dinner col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img2.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img2.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Chicken</h3>
                            </div>

                            <div class="iso-box dinner col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img3.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img3.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Nuduls</h3>
                            </div>

                            <div class="iso-box breakfast col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img4.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img4.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Chilly Beef Curry </h3>
                            </div>

                            <div class="iso-box lunch col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img5.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img5.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Beef Vegetable</h3>
                            </div>

                            <div class="iso-box pizza lunch col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img6.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img6.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Sea Fish</h3>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section> -->

<!-- Contact section -->
<section id="contact" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Hello Foodies</h2>
                    <h4>we are always ready to serve you!</h4>
                </div>
                <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
                    <form id="contact-form" method="post" action="#">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                        <textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
                        <input type="submit" class="form-control submit" value="SEND MESSAGE">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Team section -->
<section id="team" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Developers</h2>
                    <h4>We are from Concordia University.</h4>
                </div>
            </div>

            

            <!-- <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-thumb">
                    <img src="images/chef3.jpg" class="img-responsive" alt="Team">
                    <div class="team-des">
                        <h3>Tamim</h3>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->

            
        </div>
    </div>
</section>


<!-- Footer section -->
<footer>
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1.3s">
                <h3>iEat restaurant</h3>
                <p>This restaurant is located in Concordia University's downtown campus.</p>
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1.6s">
                <h3>Contact Details</h3>
                <p>Amanpreet, Anisul, Garv, Mostakim, Munesh, Rahul</p>
                <p><a href="tel:1-408-555-5555">Call</a></p>
                <p><a href="mailto:info@ieat.ca">Email</a></p>
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1.9s">
                <h3>Restaurant Hours</h3>
                <strong>Monday - Sunday</strong>
                <p>10:00 AM - 10:00 PM</p>
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1.9s">
                <h3>Kitchen Hours</h3>
                <strong>Monday - Sunday</strong>
                <p>11:00 AM - 9:00 PM</p>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright section -->
<section id="copyright">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-8 col-xs-8">
                <p>Copyright © 2018, Team L, SOEN 6011, Concordia University</p>
            </div>

            <!-- <div class="col-md-4 col-sm-4 text-right">
                <a href="#top"><img src="images/RightBrainTechBD.jpg" width="150" height="150"></a>
            </div> -->

        </div>
    </div>
</section>
    
<div class="modal fade " id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="contact-form-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h5 class="modal-title">Login view</h5>
            </div>
            <div class="modal-body">
                
                

                <div class="contact-form">
                    <div class="alert alert-danger alt-login" style="display:none">
                        <label>Invalid Information </label>
                    </div>
                        <div class="form-group">
                            <input  type="email" name="usermail" id="usermail" class="form-control " placeholder="Input Email" autofocus  required>
                        </div>
                        <div class="form-group">
                            <input  type="password"  name="password" id="password" class="form-control " placeholder="Input Password"  required>
                        </div>
                        <p class="text-left">Don't Have Account yet ? <a href="{{url('register')}}">SIGN UP</a> </p>
                        <button type="button"  class="btn btn-primary" onclick="doLogin();">SUBMIT</button>
                </div>


            </div>
        </div>
    </div>
</div>
    
    
<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

<!-- javscript js from Food truck -->
<script src="script.js"></script>
<script>
    var login_path = "{{route('auth.login')}}";
    function doLogin(){
        var email = $("#usermail").val();
        var pass = $("#password").val();
        $(".form-group").removeClass('has-error');
        if(email==''){
            $("#usermail").parent().addClass('has-error');
            return false;
        }
        if(pass==''){
            $("#password").parent().addClass('has-error');
            return false;
        }
        
        $.ajax({
            url:login_path,
            type:'post',
            data:{email:email,password:pass},
            dataType:'json',
            success:function(resp){
                
                if(resp)
                    {
                        
                        $("#loginmodal").modal('hide');
                       
                    }
                else
                    {
                       $(".alt-login").fadeIn().delay('1000').fadeOut();
                        
                    }
            }
        });
    }
</script>
</body>
</html>