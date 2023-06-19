<?php

use Foodboard\Config;

require_once __DIR__ . '/Config/Config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Food order wizard with online payment">
    <meta name="author" content="UWS">
    <title>Land Expedition</title>
    <!-- Favicon -->
    <link href="../img/favicon.png" rel="shortcut icon">

    <!-- Google Fonts - Jost -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Font Icons -->
    <link href="../vendor/icomoon/css/iconfont.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/dmenu/css/menu.css" rel="stylesheet">
    <link href="../vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
    <link href="../vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
    <link href="../vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="../vendor/float-labels/css/float-labels.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="./../css/style.css" rel="stylesheet">

</head>
<style>
.checked {
  color: orange;
}
.icon {
  display: inline-block;
  margin-right: 5px; /* Adjust this value to control the spacing between the icon and the text */
}
</style>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- Preloader End -->

    <!-- Page -->
    <div id="page">

        <!-- Header -->
        <header class="main-header sticky">
            <a href="#menu" class="btn-mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-6">

                     
                                    <div class="search-wrap">
                                        <input id="search" type="text" class="form-control" placeholder="Search..." />
                                        <i class="icon icon-search"></i>
                                    </div>
                            
                     
       
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- <ul id="menuIcons">
                            <li><a href="#"><i class="icon icon-support"></i></a></li>
                            <li><a href="#"><i class="icon icon-shopping-cart2"></i></a></li>
                        </ul> -->
                        <!-- Menu -->
                        <nav id="menu" class="main-menu">
                            <ul>

                                <li>
                                    <span><a href="#">Retrieve Order </a></span>
                                    <li>
                                        <li>
                                            <span><a href="#">Reset Order</a></span>
                                           
                                        </li>
                                        <li>
                                            <span><a href="#">My Profile</a></span>
                                          
                                        </li>
                                    </ul>
                                </li>
                     
                            </ul>
                        </nav>
                        <!-- Menu End -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Sub Header -->
    
        <!-- Sub Header End -->

        <!-- Main -->
        <main>
            <!-- Order -->
            <div class="order">
                <!-- Container -->
                <div class="container">
                    <!-- Row -->
                    <div class="row">
                        <!-- Left Sidebar -->
                        <div class="col-lg-5" id="mainContent">
                            <!-- Filter Area -->
                            <div class="order-header" style="width: 514px;">
                                <ul style="display:flex">
                                          <li style="margin-left: 10%; ">  <h6 class="wizard-header text-white">
                                            Product Name</h6> </li>

                                            <li  style="margin-left: 12%; ">  <h6 class="wizard-header text-white">
                                           ID</h6></li>

                                           <li  style="margin-left: 15%; "> <h6 class="wizard-header text-white">
                                           Price</h6></li>
                                           <li  style="margin-left: 5%; "><h6 class="wizard-header text-white">
                                           Booked	</h6></li>

                                           <li  style="margin-left: 5%; "><h6 class="wizard-header text-white">
                                           Action</h6></li>
                                </ul>
                            </div>
                            <!-- Filter Area End -->
                            <!-- Grid -->
                            <div class="row grid" id="orderContainer">
                          
                                <!-- Grid Item 01 -->
                               
                                <!-- Grid Item 02 -->
                                <div id="gridItem02" class="col-xl-12 col-lg-12 col-md-6 col-sm-6 isotope-item  pizza">
                                    <div class="row mt-5">
                                        <div class="col-2">
                                        <figure>
                                         
                                            <img src="./assets/images/2.jpg" data-src="./assets/images/2.jpg" class="img-fluid lazy" alt="">
                                       
                                            <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                        </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem02" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Dubai Aquarium</h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                        <h3 style="color:black">002</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                        <h3 style="color:black"> AED 155.00</h3>
                                        </div>
                                        <div class="col-2">  
                                        <h3 style="color:black">5</h3>
                                        </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem02" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Grid Item 03 -->
                                <div id="gridItem03" class="col-xl-12 col-lg-12 col-md-12 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                            <figure>
                                         
                                            <img src="./assets/images/1.jpg" data-src="./assets/images/1.jpg" class="img-fluid lazy" alt="">
                                       
                                                <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                            </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem01" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Desert Safari
                                                    </h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                             <h3 style="color:black">001</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                                 <h3 style="color:black"> AED 100.00</h3>
                                        </div>
                                            <div class="col-2">  
                                                 <h3 style="color:black">5</h3>
                                            </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem01" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Grid Item 04 -->
                                <div id="gridItem04" class="col-xl-12 col-lg-12 col-md-12 col-sm-6 isotope-item  pizza">
                                <div class="row">
                                        <div class="col-2">
                                        <figure>
                                         
                                            <img src="./assets/images/2.jpg" data-src="./assets/images/2.jpg" class="img-fluid lazy" alt="">
                                       
                                            <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                        </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem02" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Dubai Aquarium</h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                        <h3 style="color:black">002</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                        <h3 style="color:black"> AED 155.00</h3>
                                        </div>
                                        <div class="col-2">  
                                        <h3 style="color:black">5</h3>
                                        </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem02" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Grid Item 05 -->
                                <div id="gridItem05" class="col-xl-12 col-lg-12 col-md-6 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                        <figure>
                                         
                                            <img src="./assets/images/2.jpg" data-src="./assets/images/2.jpg" class="img-fluid lazy" alt="">
                                       
                                            <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                        </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem05" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Dubai Aquarium</h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                        <h3 style="color:black">002</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                        <h3 style="color:black"> AED 155.00</h3>
                                        </div>
                                        <div class="col-2">  
                                        <h3 style="color:black">5</h3>
                                        </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem02" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem06" class="col-xl-12 col-lg-12 col-md-12 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                            <figure>
                                         
                                            <img src="./assets/images/1.jpg" data-src="./assets/images/1.jpg" class="img-fluid lazy" alt="">
                                       
                                                <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                            </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem06" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Desert Safari
                                                    </h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                             <h3 style="color:black">001</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                                 <h3 style="color:black"> AED 100.00</h3>
                                        </div>
                                            <div class="col-2">  
                                                 <h3 style="color:black">5</h3>
                                            </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem01" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem07" class="col-xl-12 col-lg-12 col-md-6 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                        <figure>
                                         
                                            <img src="./assets/images/2.jpg" data-src="./assets/images/2.jpg" class="img-fluid lazy" alt="">
                                       
                                            <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                        </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem07" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Dubai Aquarium</h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                        <h3 style="color:black">002</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                        <h3 style="color:black"> AED 155.00</h3>
                                        </div>
                                        <div class="col-2">  
                                        <h3 style="color:black">5</h3>
                                        </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem02" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem08" class="col-xl-12 col-lg-12 col-md-12 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                            <figure>
                                         
                                            <img src="./assets/images/1.jpg" data-src="./assets/images/1.jpg" class="img-fluid lazy" alt="">
                                       
                                                <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                            </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem08" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Desert Safari
                                                    </h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                             <h3 style="color:black">001</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                                 <h3 style="color:black"> AED 100.00</h3>
                                        </div>
                                            <div class="col-2">  
                                                 <h3 style="color:black">5</h3>
                                            </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem01" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem09" class="col-xl-12 col-lg-12 col-md-6 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                        <figure>
                                         
                                            <img src="./assets/images/2.jpg" data-src="./assets/images/2.jpg" class="img-fluid lazy" alt="">
                                       
                                            <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                        </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem09" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Dubai Aquarium</h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                        <h3 style="color:black">002</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                        <h3 style="color:black"> AED 155.00</h3>
                                        </div>
                                        <div class="col-2">  
                                        <h3 style="color:black">5</h3>
                                        </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem02" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem010" class="col-xl-12 col-lg-12 col-md-12 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                            <figure>
                                         
                                            <img src="./assets/images/1.jpg" data-src="./assets/images/1.jpg" class="img-fluid lazy" alt="">
                                       
                                                <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                            </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem010" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Desert Safari
                                                    </h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                             <h3 style="color:black">001</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                                 <h3 style="color:black"> AED 100.00</h3>
                                        </div>
                                            <div class="col-2">  
                                                 <h3 style="color:black">5</h3>
                                            </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem01" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem02" class="col-xl-12 col-lg-12 col-md-6 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                        <figure>
                                         
                                            <img src="./assets/images/2.jpg" data-src="./assets/images/2.jpg" class="img-fluid lazy" alt="">
                                       
                                            <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                        </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem02" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Dubai Aquarium</h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                        <h3 style="color:black">002</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                        <h3 style="color:black"> AED 155.00</h3>
                                        </div>
                                        <div class="col-2">  
                                        <h3 style="color:black">5</h3>
                                        </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem02" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="gridItem03" class="col-xl-12 col-lg-12 col-md-12 col-sm-6 isotope-item  pizza">
                                    <div class="row">
                                        <div class="col-2">
                                            <figure>
                                         
                                            <img src="./assets/images/1.jpg" data-src="./assets/images/1.jpg" class="img-fluid lazy" alt="">
                                       
                                                <!-- <div class="ribbon-size"><span>Size: M</span></div> -->
                                            </figure>
                                        </div>
                                        <div class="col-2">
                                             <a href="#modalDetailsItem01" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3 style="color:black">Desert Safari
                                                    </h3>
                                                    <!-- <small>Ragu, Mozzarella</small> -->
                                                </div>
                                            </a>
                                        </div>   
                                        <div class="col-2">  
                                             <h3 style="color:black">001</h3>
                                        </div>
                        
                                        <div class="col-2">  
                                                 <h3 style="color:black"> AED 100.00</h3>
                                        </div>
                                            <div class="col-2">  
                                                 <h3 style="color:black">5</h3>
                                            </div>
                                        <ul class="col-2" style="display:flex">
                                         
                                            <li>
                                            <a href="#modalDetailsItem01" class="item-body-link modal-opener"><i class="icon icon-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Grid Item 06 -->
                                <!-- <div id="gridItem06" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  vegetarian">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/06.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem06" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3>Greek Salad</h3>
                                                    <small>Tomato, Onion, Olives ... </small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">5.00</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Grid Item 07 -->
                                <!-- <div id="gridItem07" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  vegetarian">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/07.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem07" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3>Grilled Salmon</h3>
                                                    <small>With lime and pasta ...</small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">9.00</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Grid Item 08 -->
                                <!-- <div id="gridItem08" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  vegetarian">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/08.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem08" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3>Sushi</h3>
                                                    <small>Rice, Soy Sauce ... </small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">9.50</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Grid Item 09 -->
                                <!-- <div id="gridItem09" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/09.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem09" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3>Beef Burger</h3>
                                                    <small>Bacon, Cucumber, Cheese ...</small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">9.20</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Grid Item 10 -->
                                <!-- <div id="gridItem10" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/10.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem10" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3>Big Beef Burger</h3>
                                                    <small>Double Meat, Bacon, Cheese ... </small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">10.00</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Grid Item 11 -->
                                <!-- <div id="gridItem11" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/11.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem11" class="item-body-link modal-opener">
                                                <div class="item-title">
                                                    <h3>Chicken Burger</h3>
                                                    <small>Double Cheese, Tomato ... </small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">8.70</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Grid Item 12 -->
                                <!-- <div id="gridItem12" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
                                    <div class="item-body">
                                        <figure>
                                            <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/12.jpg" class="img-fluid lazy" alt="">
                                            <a href="#modalDetailsItem12" class="item-body-link modal-opener">
                                                <small class="red">Hot</small>
                                                <div class="item-title">
                                                    <h3>Mexican Burger</h3>
                                                    <small>Mexican Topping, Onion ... </small>
                                                </div>
                                            </a>
                                        </figure>
                                        <ul>
                                            <li>
                                                <span class="item-price format-price">9.70</span>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <!-- Grid End -->
                        </div>
                        <!-- Left Sidebar End -->
                        <!-- Right Sidebar -->
                        <div class="col-lg-3" id="sidebar">
                            <!-- Order Container -->
                            <div id="orderContainer" class="theiaStickySidebar">
                                <!-- Form -->
                                <form method="POST" id="orderForm" name="orderForm" onsubmit="return confirmGuestOrder(event);">

                                    <!-- Step 1: Order Summary -->
                                    <div id="#orderSummaryStep" class="step">
                                        <div class="order-header">
                                            <h3>Cart</h3>
                                        </div>
                                        <div class="order-body">
                                            <!-- Cart Items -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="order-list">
                                                        <ul id="itemList">
                                                            <!-- Cart Items / will be generated by js -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Cart Items End -->
                                            <!-- Delivery Fee -->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label class="cbx radio-wrapper no-edges">
                                                        <input type="radio" value="delivery" name="transfer" checked> <span class="checkmark"></span>
                                                        <span class="radio-caption">Delivery</span><span class="option-price format-price transfer">10.00</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Delivery Fee -->
                                            <!-- Total -->
                                            <div class="row total-container">
                                                <div class="col-md-12 p-0">
                                                    <span class="totalTitle">Total</span><span class="totalValue format-price float-right">0.00</span>
                                                    <input type="hidden" id="totalOrderSummary" class="total format-price" name="total" value="" data-parsley-errors-container="#totalError" data-parsley-empty-order="" disabled />
                                                </div>
                                            </div>
                                            <div id="totalError"></div>
                                            <!-- Total End -->
                                            <!-- Forward Button -->
                                            <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" name="forward" class="btn-form-func forward">
                                                        <span class="btn-form-func-content">Continue Order</span>
                                                        <span class="icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                    </button>
                                                </div>
                                            </div> -->
                                            <!-- Forward Button End -->
                                        </div>
                                    </div>
                                    <!-- Step 1: Order Summary End -->

                                    <!-- Step 2: Checkout -->
                                    <!-- <div class="step">
                                        <div class="order-header">
                                            <h3>Order Summary 2/2</h3>
                                        </div>
                                        <div id="personalData" data-consumer-key='<?php echo Config::STRIPE_PUBLISHABLE_KEY; ?>' data-create-order-url='<?php echo Config::STRIPE_CREATE_ORDER_URL; ?>' data-return-url='<?php echo Config::THANKYOU_URL; ?>' data-currency='<?php echo Config::CURRENCY; ?>'>
                                            <div class="order-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="userNameOnlinePayment">Full Name</label>
                                                            <input id="userNameOnlinePayment" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="phoneOnlinePayment">Phone +12345</label>
                                                            <input id="phoneOnlinePayment" class="form-control" name="phone" type="text" data-parsley-pattern="^\+{1}[0-9]+$" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="emailOnlinePayment">Email</label>
                                                            <input id="emailOnlinePayment" class="form-control" name="email" type="email" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="addressOnlinePayment">Delivery Address</label>
                                                            <input id="addressOnlinePayment" class="form-control" name="address" type="text" data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="messageOnlinePayment">Message</label>
                                                            <input id="messageOnlinePayment" class="form-control" name="message" type="text" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row total-container">
                                                    <div class="col-md-12 p-0">
                                                        <span class="totalTitle">Total</span><span class="totalValue format-price float-right">0.00</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 pr-0">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="cbxOnlinePayment" class="inp-cbx" name="terms" value="yes" required />
                                                            <label class="cbx terms" for="cbxOnlinePayment">
                                                                <span>
                                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                    </svg>
                                                                </span>
                                                                <span>Accept<a href="../pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pl-0">
                                                        <a href="javascript:;" class="modify-order backward">Modify Order</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" name="submit" id="submitPayment" class="btn-form-func">
                                                            <span class="btn-form-func-content">Submit</span>
                                                            <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        </button>
                                                        <div class="spinner-icon">
                                                            <i class="fa fa fa-cog fa-spin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="button" name="backward" class="btn-form-func btn-form-func-alt-color backward">
                                                            <span class="btn-form-func-content">Back</span>
                                                            <span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row footer">
                                                    <div class="col-md-12 text-center">
                                                        <small>Copyrigth FoodBoard 2021.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Step 2: Checkout End -->

                                </form>
                                <!-- Form End -->
                            </div>
                            <!-- Order Container End -->
                        </div>
                        <!-- Right Sidebar End -->
                        <div class="col-lg-4" id="sidebar">
                            <!-- Order Container -->
                            <div id="orderContainer" class="theiaStickySidebar">
                                <!-- Form -->
                                <form method="POST" id="orderForm" name="orderForm" onsubmit="return confirmGuestOrder(event);">

                                    <!-- Step 1: Order Summary -->
                                   
                                    <!-- Step 1: Order Summary End -->

                                    <!-- Step 2: Checkout -->
                                    <div class="step">
                                        <div class="order-header">
                                            <h3>Checkout</h3>
                                        </div>
                                        <div id="personalData" data-consumer-key='<?php echo Config::STRIPE_PUBLISHABLE_KEY; ?>' data-create-order-url='<?php echo Config::STRIPE_CREATE_ORDER_URL; ?>' data-return-url='<?php echo Config::THANKYOU_URL; ?>' data-currency='<?php echo Config::CURRENCY; ?>'>
                                            <div class="order-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                   
                                                    <span class="totalTitle">Total Products</span><span class=" float-right">0.00</span>
                                                    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mt-2">
                                                    <span class="totalTitle">Total Quantity</span><span class=" float-right">0.00</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mt-2">
                                                    <span class="totalTitle">Sub Total</span><span class="totalValue format-price float-right">0.00</span>
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-12 mt-2">
                                                        <div class="form-group">
                                                            <label for="messageOnlinePayment">Enter Discount Code</label>
                                                            <input id="messageOnlinePayment" class="form-control" name="message" type="text" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row total-container">
                                                    <div class="col-md-12 p-0">
                                                        <span class="totalTitle">Total</span><span class="totalValue format-price float-right">0.00</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 pr-0">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="cbxOnlinePayment" class="inp-cbx" name="terms" value="yes" required />
                                                            <label class="cbx terms" for="cbxOnlinePayment">
                                                                <span>
                                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                    </svg>
                                                                </span>
                                                                <span>Accept<a href="../pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pl-0">
                                                        <a href="javascript:;" class="modify-order backward">Modify Order</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" name="submit" id="submitPayment" class="btn-form-func">
                                                            <span class="btn-form-func-content">Submit</span>
                                                            <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        </button>
                                                        <div class="spinner-icon">
                                                            <i class="fa fa fa-cog fa-spin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="button" name="backward" class="btn-form-func btn-form-func-alt-color backward">
                                                            <span class="btn-form-func-content">Back</span>
                                                            <span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                                        </button>
                                                    </div>
                                                </div> -->
                                                <div class="row footer">
                                                    <div class="col-md-12 text-center">
                                                        <small>Copyrigth FoodBoard 2021.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Step 2: Checkout End -->

                                </form>
                                <!-- Form End -->
                            </div>
                            <!-- Order Container End -->
                        </div>
                        
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Order End -->
        </main>
        <!-- Main End -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="footer-heading">Menu Links</h5>
                        <ul class="list-unstyled nav-links">
                            <li><i class="fa fa-angle-right"></i> <a href="https://ultimatewebsolutions.net/foodboard/" class="footer-link">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="../faq.html" class="footer-link">FAQ</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="../contacts.html" class="footer-link">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="footer-heading">Order Wizard</h5>
                        <ul class="list-unstyled nav-links">
                            <li><i class="fa fa-angle-right"></i> <a href="../pay-with-card-online/" class="footer-link">Pay online</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="../pay-with-cash-on-delivery/" class="footer-link">Pay with cash on delivery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-heading">Contacts</h5>
                        <ul class="list-unstyled contact-links">
                            <li><i class="icon icon-map-marker"></i><a href="https://goo.gl/maps/vKgGyZe2JSRLDnYH6" class="footer-link" target="_blank">Address: 1234 Street Name, City Name, USA</a>
                            </li>
                            <li><i class="icon icon-envelope3"></i><a href="mailto:info@yourdomain.com" class="footer-link">Mail: info@yourdomain.com</a></li>
                            <li><i class="icon icon-phone2"></i><a href="tel:+3630123456789" class="footer-link">Phone: +3630123456789</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5 class="footer-heading">Find Us On</h5>
                        <ul class="list-unstyled social-links">
                            <li><a href="https://facebook.com" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com" class="social-link" target="_blank"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="https://instagram.com" class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
                            <li><a href="https://pinterest.com" class="social-link" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <ul id="subFooterLinks">
                            <li><a href="https://themeforest.net/user/ultimatewebsolutions" target="_blank">With <i class="fa fa-heart pulse"></i> by UWS</a></li>
                            <li><a href="../pdf/terms.pdf" target="_blank">Terms and conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div id="copy">© 2021 FoodBoard</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Notification Messages -->
        <div class="addedToCartMsg">Added to cart</div>
        <div class="alreadyInCartMsg">Already in cart</div>

    </div>
    <!-- Page End -->

    <!-- Modal Warning Qty min. Limit -->
    <div id="modalWarningQtyMinLimit" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Warning</h3>
        </div>
        <div class="content">
            <h6 class="mb-0">Quantity minimum limit is: 1 !</h6>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Got it</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Warning Qty min. Limit End -->

    <!-- Modal Warning Qty max. Limit -->
    <div id="modalWarningQtyMaxLimit" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Warning</h3>
        </div>
        <div class="content">
            <h6 class="mb-0">Quantity maximum limit is: 10 !</h6>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Got it</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Warning Qty max. Limit End -->

    <!-- Modal Options for Item 01 -->
    <div id="modalOptionsItem01" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Aspen</h3>
            <div class="addedToCartMsgInModal">Added to cart</div>
            <div class="alreadyInCartMsgInModal">Already in cart</div>
        </div>
        <div class="content">
            <!-- <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Small: 26cm" name="size-options-item-01">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Small: 26cm</span><span class="option-price format-price">4.30</span>
                    </label>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Medium: 32cm" name="size-options-item-01" checked>
                        <span class="checkmark"></span>
                        <span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">8.00</span>
                    </label>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Large: 45cm" name="size-options-item-01">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Large: 45cm</span><span class="option-price format-price">14.30</span>
                    </label>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="hidden" id="item01ExtraTitle" name="item01ExtraTitle" value="Extra Cheese" />
                    <input type="checkbox" id="item01Extra" class="inp-cbx" name="item01Extra" value="3.50" />
                    <label class="cbx mb-0" for="item01Extra">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span>Extra Cheese</span><span class="option-price format-price">2.00</span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
                <div class="col-8">
                    <button type="button" class="btn-modal add-options-item-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Modal Options for Item 01 End -->

    <!-- Modal Options for Item 02 -->
    <div id="modalOptionsItem02" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Bolognese</h3>
            <div class="addedToCartMsgInModal">Added to cart</div>
            <div class="alreadyInCartMsgInModal">Already in cart</div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Small: 26cm" name="size-options-item-02">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Small: 26cm</span><span class="option-price format-price">4.30</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Medium: 32cm" name="size-options-item-02" checked>
                        <span class="checkmark"></span>
                        <span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">6.80</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Large: 45cm" name="size-options-item-02">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Large: 45cm</span><span class="option-price format-price">13.60</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="hidden" id="item02ExtraTitle" name="item02ExtraTitle" value="Extra Cheese" />
                    <input type="checkbox" id="item02Extra" class="inp-cbx" name="item02Extra" value="3.50" />
                    <label class="cbx" for="item02Extra">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span>Extra Cheese</span><span class="option-price format-price">2.00</span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
                <div class="col-8">
                    <button type="button" class="btn-modal add-options-item-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Modal Options for Item 02 End -->

    <!-- Modal Options for Item 03 -->
    <div id="modalOptionsItem03" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Castello</h3>
            <div class="addedToCartMsgInModal">Added to cart</div>
            <div class="alreadyInCartMsgInModal">Already in cart</div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Small: 26cm" name="size-options-item-03">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Small: 26cm</span><span class="option-price format-price">5.00</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Medium: 32cm" name="size-options-item-03" checked>
                        <span class="checkmark"></span>
                        <span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">8.65</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Large: 45cm" name="size-options-item-03">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Large: 45cm</span><span class="option-price format-price">15.00</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="hidden" id="item03ExtraTitle" name="item03ExtraTitle" value="Extra Cheese" />
                    <input type="checkbox" id="item03Extra" class="inp-cbx" name="item03Extra" value="2.00" />
                    <label class="cbx" for="item03Extra">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span>Extra Cheese</span><span class="option-price format-price">2.00</span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
                <div class="col-8">
                    <button type="button" class="btn-modal add-options-item-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Modal Options for Item 03 End -->

    <!-- Modal Options for Item 04 -->
    <div id="modalOptionsItem04" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Fitness</h3>
            <div class="addedToCartMsgInModal">Added to cart</div>
            <div class="alreadyInCartMsgInModal">Already in cart</div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Small: 26cm" name="size-options-item-04">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Small: 26cm</span><span class="option-price format-price">4.30</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Medium: 32cm" name="size-options-item-04" checked>
                        <span class="checkmark"></span>
                        <span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">7.90</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="cbx radio-wrapper">
                        <input type="radio" value="Large: 45cm" name="size-options-item-04">
                        <span class="checkmark"></span>
                        <span class="radio-caption">Large: 45cm</span><span class="option-price format-price">14.30</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="hidden" id="item04ExtraTitle" name="item04ExtraTitle" value="Extra Cheese" />
                    <input type="checkbox" id="item04Extra" class="inp-cbx" name="item04Extra" value="2.00" />
                    <label class="cbx" for="item04Extra">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span>Extra Cheese</span><span class="option-price format-price">2.00</span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
                <div class="col-8">
                    <button type="button" class="btn-modal add-options-item-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Modal Options for Item 04 End -->

    <!-- Modal Details for Item 01 -->
    <div id="modalDetailsItem01" class="modal-popup zoom-anim-dialog mfp-hide">
   
           
            <div class="container-fluid">
              <div class="featured_image">
                <img src="./assets/images/1.jpg"  style="width:100%
                ">
              </div>

              <div class="row gx-lg-8 gx-xl-12" style="text-align: left;">
                <div class="col-lg-8">
                  <div class="blog classic-view">
                    <article class="post">
                      <div class="card">
                        <div class="card-body">
                          <div class="post-header">
                            <!-- /.post-category -->
                            <h2 class="post-title mt-1 mb-0">
                              Dubai Aquarium Tour
                              <span class="fa fa-star checked"></span>
<span class="fa fa-star checked "></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked "></span>
<span class="fa fa-star checked"></span>
 
                            </h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-content">
                            
                            <p>
                            Explore the desert terrains of Dubai on an ultimate desert safari with the thrills of an optional quad bike ride and camel ride at the exclusive Al Khayma Camp. Be amazed at the desert sports including dune bashing and sandboarding.
                            </p>

                            <h5>About this activity</h5>
                            <div class="row">
                              <div class="col-sm-7">
                                <ul>
   <li><span class="icon"><i class="fas fa-ban"> Free Cancellation</li></i></span>
                                  <p>Cancel up to 24 hours in advance for a full refund</p>
                                 

                                  <li><span class="icon"><i class="fas fa-bookmark"> Reserve now & pay later</li></i></span>
                                  <p>Keep your travel plans flexible — book your spot and pay nothing today.</p>

                                  <li><span class="icon"><i class="fas fa-clock"> Duration 4 - 7 hours</li></i></span>
                                  <p>Check availability to see starting times.</p>

                                  <li><span class="icon"><i class="fas fa-man"> Live tour guide</li></i></span>
                                  <p>English</p>
                                </ul>
                              </div>
                              <div class="col-sm-5">
                                <div class="price-container">
                                  <h5>From AED 125.00</h5>
                                  <p>Land Expeditions Price Guarantee</p>
                                  <a class="btn btn-sm btn-danger center-block" data-bs-toggle="modal" data-bs-target="#select-product" style="display: block;">Add</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!-- /.post-content -->
                        </div>
                        <!--/.card-body -->
                        
                      </div>
                      <!-- /.card -->
                    </article>
                  </div>
                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-8 mt-lg-6" style="padding-left: 0px;">
                  <div class="widget">
                    <h4 class="widget-title mb-3">Package Description</h4>
                    <hr>
                    <h5>Inclusions</h5>
                    <hr>
                    <ul>
                      <li>Photo Opportunity</li>
                      <li>90 Min Ride</li>
                      <li>Instructions by Professional</li>
                      <li>Safety Instructions</li>
                    </ul>
                    <h5>Exclusions</h5>
                    <hr>
                    <ul>
                      <li>Personal Expense</li>
                      <li>Transfers</li>
                      <li>Food</li>
                    </ul>
                    <h5>Pick Drop Timing</h5>
                    <hr>
                    <p>
                      Fusce dapibus, tellus ac cursus commodo, tortor mauris
                      condimentum nibh, ut fermentum. Nulla vitae elit libero, a
                      pharetra augue. Donec id elit non mi porta gravida at eget
                      metus.
                    </p>
                  </div>
                </aside>
                <!-- /column .sidebar -->
              </div>
            </div>
        
        </div>
        
    </div>
    <!-- Modal Details for Item 1 End -->

    <!-- Modal Details for Item 02 -->
    <div id="modalDetailsItem02" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Dubai Aquarium Tour</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="./assets/images/2.jpg" alt="" class="img-fluid"></figure>
 
        </div>
        <article class="post">
                      <div class="card">
                        <div class="card-body">
                          <div class="post-header">
                            <!-- /.post-category -->
                            <h2 class="post-title mt-1 mb-0">
                              Dubai Aquarium Tour
                              <span class="fa fa-star checked"></span>
<span class="fa fa-star checked "></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked "></span>
<span class="fa fa-star checked"></span>
 
                            </h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-content">
                            <h4>Overview</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus.</p>
                       
                            <div class="row">
                              <div class="col-sm-7">
                                <ul>
                                <li><span class="icon"><i class="fas fa-wifi">Free Wifi</li></i></span>
                                  
                                 

                                  <li><span class="icon"><i class="fas fa-ac">Air Conditioning</li></i></span>
                      

                                  <li><span class="icon"><i class="fas fa-parking"> Parking Available</li></i></span>
                                 

                                  <li><span class="icon"><i class="fas fa-service">Business Service</li></i></span>
                                 
                                </ul>
                              </div>
                              <div class="col-sm-5">
                                <div class="price-container">
                                  <h5>From AED 125.00</h5>
                                  <p>Land Expeditions Price Guarantee</p>
                                  <a class="btn btn-sm btn-danger center-block" data-bs-toggle="modal" data-bs-target="#select-product" style="display: block;">Add</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!-- /.post-content -->
                        </div>
                        <!--/.card-body -->
                        
                      </div>
                      <!-- /.card -->
                    </article>
                  </div>
                </div>
                <!-- /column -->
            

                </div>
            </div>
        
        </div>
     
    </div>
    <!-- Modal Details for Item 02 End -->

    <!-- Modal Details for Item 03 -->
    <div id="modalDetailsItem03" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Castello</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/03.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Bacon, Sausage, Jalapeno, Onion, Mozzarella</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 03 End -->

    <!-- Modal Details for Item 04 -->
    <div id="modalDetailsItem04" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Fitness</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/04.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Tomato, Corn, Broccoli, Paprika, Feta Cheese, Mozzarella</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 04 End -->

    <!-- Modal Details for Item 05 -->
    <div id="modalDetailsItem05" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Caesar Salad</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/05.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Lettuce, Grilled Chicken, Toasted Bread, Garlic Dressing</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 05 End -->

    <!-- Modal Details for Item 06 -->
    <div id="modalDetailsItem06" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Greek Salad</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/06.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Tomato, Onion, Olives, Cucumber, Feta Cheese</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 06 End -->

    <!-- Modal Details for Item 07 -->
    <div id="modalDetailsItem07" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Grilled Salmon</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/07.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Salmon, Lime, Pasta</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 07 End -->

    <!-- Modal Details for Item 08 -->
    <div id="modalDetailsItem08" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sushi</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/08.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Sushi, Rice, Soy Sauce, Toasted Sesame Seeds</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 08 End -->

    <!-- Modal Details for Item 09 -->
    <div id="modalDetailsItem09" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Beef Burger</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/09.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Beaf Meat, Bacon, Cucumber, Cheese, Caramelized Onion Jam</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 09 End -->

    <!-- Modal Details for Item 10 -->
    <div id="modalDetailsItem10" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Double Beef Burger</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/10.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Double Beaf Meat, Bacon, Cucumber, Cheese, Caramelized Onion Jam</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 10 End -->

    <!-- Modal Details for Item 11 -->
    <div id="modalDetailsItem11" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Chicken Burger</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/11.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Chicken Meat, Double Cheese, Tomato, Cucumber, Parsley, Caramelized Onion Jam</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 11 End -->

    <!-- Modal Details for Item 12 -->
    <div id="modalDetailsItem12" class="modal-popup zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Mexican Burger</h3>
        </div>
        <div class="content pb-1">
            <figure><img src="../img/gallery/grid-items-large/12.jpg" alt="" class="img-fluid"></figure>
            <h6 class="mb-1">Ingredients</h6>
            <p>Chicken Meat, Mexican Topping, Bacon, Onion, Cheese</p>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-4 pr-0">
                    <button type="button" class="btn-modal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details for Item 12 End -->

    <!-- Back to top button -->
    <div id="toTop">
        <i class="icon icon-chevron-up"></i>
    </div>

    <!-- Vendor Javascript Files -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/easing/js/easing.min.js"></script>
    <script src="../vendor/parsley/js/parsley.min.js"></script>
    <script src="../vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../vendor/price-format/js/jquery.priceformat.min.js"></script>
    <script src="../vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
    <script src="../vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>
    <script src="../vendor/mmenu/js/mmenu.min.js"></script>
    <script src="../vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="../vendor/float-labels/js/float-labels.min.js"></script>
    <script src="../vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js"></script>
    <script src="../vendor/jquery-wizard/js/jquery.wizard.js"></script>
    <script src="../vendor/isotope/js/isotope.pkgd.min.js"></script>
    <script src="../vendor/scrollreveal/js/scrollreveal.min.js"></script>
    <script src="../vendor/lazyload/js/lazyload.min.js"></script>
    <script src="../vendor/sticky-kit/js/sticky-kit.min.js"></script>

    <!-- Stripe Javascript Files -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="assets/js/stripe-func.js"></script>

    <!-- Main Javascript File -->
    <script src="../js/scripts.js"></script>

</body>

</html>