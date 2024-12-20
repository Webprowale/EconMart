<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>EconMart</title>
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css">
      <link rel="stylesheet" href="<?=base_url() ?>css/responsive.css">
      <link rel="icon" href="<?=base_url() ?>images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="<?=base_url() ?>css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="<?=base_url() ?>css/owl.carousel.min.css">
      <link rel="stylesoeet" href="<?=base_url() ?>css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <div class="banner_bg_main">
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="<?=base_url() ?>"><h1>EconMart</h1></a></div>
                  </div>
               </div>
            </div>
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="<?=base_url() ?>">Home</a>
                     <a href="<?=base_url('fashion') ?>">Fashion</a>
                     <a href="<?=base_url('electronic') ?>">Electronic</a>
                     <a href="<?=base_url('jawellery') ?>">Jewellery</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= base_url('?category=fashion')?>">Fashion</a>
                        <a class="dropdown-item" href="<?= base_url('?category=electronic')?>">Electronic</a>
                        <a class="dropdown-item" href="<?= base_url('?category=jellewary')?>">Jellewery</a>
                     </div>
                  </div>
                  <div class="main">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search any product..">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul class="d-flex gap-5 ">
                           <li><a  data-bs-toggle="modal" data-bs-target="#cartModal">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span>Cart</span></a>
                           </li>
                           <li>
                                  <i class="fa fa-user" aria-hidden="true"></i>
                                  <?php if (session()->get('user_id')): ?>
                                     <span class="fs-6"><?= esc(session()->get('username')) ?></span>
                                   <?php else: ?>
                                    <a href="<?= base_url('/login') ?>">
                                      <span>Account</span>
                                   <?php endif; ?>
                                </a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt "><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                
               </div>
            </div>
         </div>
      </div>
 
      <div class="fashion_section mt-4">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man T -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Woman Scart</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man T -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Woman Scart</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man T -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Woman Scart</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Laptop</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mobile</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Computers</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/computer-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Laptop</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mobile</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Computers</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/computer-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Laptop</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mobile</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Computers</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/computer-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jumkas</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Necklaces</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kangans</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jumkas</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Necklaces</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kangans</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jumkas</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Necklaces</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kangans</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Add Cart</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>


<!-- Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartModalLabel">Your Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if (isset($cart) && !empty($cart)): ?>
          <div class="container-fluid">
            <?php foreach ($cart as $item): ?>
              <div class="row align-items-center py-2 border-bottom">
                <div class="col-4">
                  <strong><?= esc($item['name']) ?></strong>
                </div>
                <div class="col-2">
                  <span>Quantity: <?= esc($item['quantity']) ?></span>
                </div>
                <div class="col-3">
                  <span>Price: $<?= esc($item['price']) ?></span>
                </div>
                <div class="col-2">
                  <span>Total: $<?= esc($item['price'] * $item['quantity']) ?></span>
                </div>
                <div class="col-1">
                  <a href="/cart/remove/<?= $item['id'] ?>" class="btn btn-danger btn-sm">Remove</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-3 text-end">
            <a href="/checkout" class="btn btn-success">Proceed to Checkout</a>
          </div>
        <?php else: ?>
          <p>Your cart is empty.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>




      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"> <div class="col-sm-12">
                     <div class="logo"><a href="<?=base_url() ?>"><h1>EconMart</h1></a></div>
                  </div></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2024 All Rights Reserved. Design by <a href="https://webprowale.netlify.app/">webprowale</a></p>
         </div>
      </div>
    
      <script src="<?=base_url() ?>js/jquery.min.js"></script>
      <script src="<?=base_url() ?>js/popper.min.js"></script>
      <script src="<?=base_url() ?>js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="<?=base_url() ?>js/jquery-3.0.0.min.js"></script>
      <script src="<?=base_url() ?>js/plugin.js"></script>
      <script src="<?=base_url() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?=base_url() ?>js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>