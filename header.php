<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('title') ?></title>
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<div class="site-wrapper">
  <header class="header headr-style-2">
    <div class="container">
    <div class="row"> 
      <!-- Menu -->
      <div class="navbar yamm navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
            <a href="<?php echo get_home_url() ?>" class="navbar-brand logo"></a> </div>
          <div class="cart pull-right" style="float:right;" >
            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="icon-basket"></span><span class="cart-info">2</span> </button>
            <div class="dropdown-menu">
              <div class="wrapp-mini-cart">
                <div class="mini-cart">
                  <h3 class="font-color font20">My Cart</h3>
                  <div class="cart-item">
                    <div class="cart-img"><img class="img-responsive" alt="" src="https://placeholdit.imgix.net/~text?txtsize=18&txt=68%C3%9772&w=68&h=72"></div>
                    <div class="cart-content">
                      <h4 class="item-name m-bottom1"><a href="#">Special Hot and Sour Soup</a></h4>
                      <p class="font16 font-color">$8.95</p>
                    </div>
                  </div>
                  <div class="cart-item">
                    <div class="cart-img"><img class="img-responsive" alt="" src="https://placeholdit.imgix.net/~text?txtsize=18&txt=68%C3%9772&w=68&h=72"></div>
                    <div class="cart-content">
                      <h4 class="item-name m-bottom1"><a href="#">Special Sweet Corn Soup</a></h4>
                      <p class="font16 font-color">$5.95</p>
                    </div>
                  </div>
                  <div class="cart-action"><span class="fleft top-checkout-price font20 font-color font-bold">$259.95</span> <a href="#" class="button-cart">View Cart</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
            <nav>
              <ul class="nav navbar-nav">
                <!-- Classic list -->
                <li class="dropdown"><a href="index.html" class="dropdown-toggle">Home <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="../bakery/index.html">Bakery</a></li>
                    <li><a href="../coffee/index.html">Coffee</a></li>
                    <li><a href="../winery/index.html">Winery</a></li>
                    <li><a href="../pizza/index.html">Pizza</a></li>
                    <li><a href="index.html">Restaurant</a></li>
                  </ul>
                </li>
                <li class="yamm-fw"><a href="shop.html">Shop</a></li>
                <li class="dropdown"><a href="about.html" class="dropdown-toggle">Pages <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="our-chef.html">Our Chef</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="login.html">Login Form</a></li>
                    <li><a href="register.html">Registration Form</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="menu.html" class="dropdown-toggle">Menu <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="menu.html">Menu Style 1</a></li>
                    <li><a href="menu-2.html">Menu Style 2</a></li>
                    <li><a href="menu-3.html">Menu Style 3</a></li>
                    <li><a href="menu-4.html">Menu Left Sidebar</a></li>
                    <li><a href="menu-5.html">Menu Right Sidebar</a></li>
                  </ul>
                </li>
                <li class="yamm-fw"><a href="reservation.html">Reservation</a></li>
                <li class="yamm-fw"><a href="gallery.html">Gallery</a></li>
                <li class="dropdown"><a href="blog.html" class="dropdown-toggle">Blog <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="blog.html"> Blog Full Width</a> </li>
                    <li><a href="blog2.html"> Blog Standard</a> </li>
                    <li><a href="blog-post.html"> Single Post</a> </li>
                  </ul>
                </li>
                <li class="yamm-fw"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
            <div class="search-box no-display-phone">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search here...!">
                  <span class="input-group-btn">
                  <button type="reset" class="btn btn-default"><span class="fa fa-close"> <span class="sr-only">Close</span></span> </button>
                  <button type="submit" class="btn btn-default"><span class="fa fa-search"> <span class="sr-only">Search here...!</span></span></button>
                  </span></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</header>