
<?php 
session_start();
 if (isset($_SESSION['item_cart_count'])) {
	$item_cart_count = $_SESSION['item_cart_count'];
 }
  if (isset( $_SESSION['item_total_sum'])) {
	$item_total_sum = $_SESSION['item_total_sum'];
 }
?><!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
 <script src="bootstrap-3.3.7/dist/js/jquery-1.12.4.min.js"></script>
 <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
 <script src="custom.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid" style="background-image: url('img/bg-pattern.png');color:#fff;height:150px; padding: 0px;">
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="border-radius: 0px; background-image: url('img/bg-pattern1.png') ;">
   <div class="container-fluid pull-right">
    <ul class="nav navbar-nav">
      <li><a href="#">Wishlist(0)</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu " style="width: 100%;">
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
	<div class="dropdown ">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php 
	  if (isset($item_cart_count)) {
	  	echo $item_cart_count;
	  }
	  else{
	  	echo 0;
	  }
	  ?> Item(s)<?php 
	  if (isset($item_total_sum)) {
	  	echo " - ₱".$item_total_sum;
	  }
	  else{

	  }
	  ?>
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu" style="color: black; width: 250px;">
	    
		<div id="thediv"></div>
	  </ul>
	</div>
	
  
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="border-radius: 0px;">
   <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sportsware</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Categories</a></li>
      <li><a href="#">Information</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/banner-c1.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/banner-c2.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <section class="box">
          <div class="box-heading" style="background-color: white;">Featured</div>
          <div class="box"></div>
          <div class="box-content">
            <div class="box-product">
              <div class="flexslider featured_carousel">

                <ul class="slides">
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="img/item-default.jpg" alt="Lotto Sports Shoes" /></a></div>
                      <div class="name"><a href="http://localhost/polishop/index.php?route=product/product&amp;product_id=43">Lotto Sports Shoes</a></div>
                      <div class="price"> ₱589.50 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/iphone_1-210x210.jpg" alt="iPhone 4s" /></a></div>
                      <div class="name"><a href="product">iPhone 4s</a></div>
                      <div class="price"> ₱120.68 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="rating"><img src="image/stars-4.png" alt="Based on 1 reviews." /></div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/apple_cinema_30-210x210.jpg" alt="Apple Cinema 30&quot;" /></a></div>
                      <div class="name"><a href="product">Apple Cinema 30&quot;</a></div>
                      <div class="price"> <span class="price-old">₱119.50</span><span class="price-new">₱107.75</span> </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/sony_vaio_1-210x210.jpg" alt="Friendly Jewelry" /></a></div>
                      <div class="name"><a href="product">Friendly Jewelry</a></div>
                      <div class="price"> ₱1,177.00 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/Jeep-Casual-Shoes-210x210.jpg" alt="Jeep-Casual-Shoes" /></a></div>
                      <div class="name"><a href="product">Jeep-Casual-Shoes</a></div>
                      <div class="price"> ₱131.25 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/htc_touch_hd_1-210x210.jpg" alt="iPhone 5s" /></a></div>
                      <div class="name"><a href="product">iPhone 5s</a></div>
                      <div class="price"> ₱119.50 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/ipod_touch_1-210x210.jpg" alt="Sunglass" /></a></div>
                      <div class="name"><a href="product">Sunglass</a></div>
                      <div class="price"> ₱1,177.00 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/reebok-men-sports-shoes-210x210.jpg" alt="Reebok Men Sports Shoes" /></a></div>
                      <div class="name"><a href="product">Reebok Men Sports Shoes</a></div>
                      <div class="price"> ₱119.50 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/samsung_tab_1-210x210.jpg" alt="Eagle Print Top" /></a></div>
                      <div class="name"><a href="product">Eagle Print Top</a></div>
                      <div class="price"> ₱236.99 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/nikon_d300_1-210x210.jpg" alt="Nikon D300" /></a></div>
                      <div class="name"><a href="product">Nikon D300</a></div>
                      <div class="price"> ₱942.00 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/samsung_syncmaster_941bw-210x210.jpg" alt="Samsung SyncMaster 941BW" /></a></div>
                      <div class="name"><a href="product">Samsung SyncMaster 941BW</a></div>
                      <div class="price"> ₱237.00 </div>
                      <div class="cart">
                        <input type="button" value="Add to Cart" class="button" />
                      </div>
                      <div class="clear"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>        
<script type="text/javascript">

</script>

<div class="container-fluid" style="height:1000px">
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
</div>
<footer id="footer">
    <div class="fpart-inner">
      <div class="social-part">
       
      </div>
      <div class="column">
        <h3>Information</h3>
        <ul>
          <li><a href="about-us">About Us</a></li>
          <li><a href="about-us">Delivery Information</a></li>
          <li><a href="about-us">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="column">
        <h3>Customer Service</h3>
        <ul>
          <li><a href="contact-us">Contact Us</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="sitemap">Site Map</a></li>
        </ul>
      </div>
      <div class="column">
        <h3>Extras</h3>
        <ul>
          <li><a href="#">Brands</a></li>
        </ul>
      </div>
      <div class="column">
        <h3>My Account</h3>
        <ul>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wish List</a></li>
        </ul>
      </div>
      <!-- Contact Details Start-->
      <div class="contact contact_icon">
        <h3>Contact Us</h3>
        <ul>
          <li class="address">Cavite State University</li>
          <li class="mobile">+91 9896989598</li>
          <li class="email"><a href="mailto:info@contact.com">info@contact.com</a></li>
        </ul>
      </div>
      <!-- Contact Details End-->
      <div class="clear"></div>
      <div id="powered">
        <!-- Payment Images Icon Start-->
        <div class="payments_types part3"> <img src="img/payment_paypal.png" alt="paypal" title="PayPal"> <img src="img/payment_american.png" alt="american-express" title="American Express"> <img src="img/payment_2checkout.png" alt="2checkout" title="2checkout"> <img src="img/payment_maestro.png" alt="maestro" title="Maestro"> <img src="img/payment_discover.png" alt="discover" title="Discover"> </div>
        <!-- Payment Images Icon End-->
        <!-- Powered by Text Start-->
        <div class="powered_text part3">
          <p>Ecom Site © 2018<br>
        </div>
        <!-- Powered by Text End-->
        <!-- Follow Social Icons Start-->
        <div class="social part3" style="margin-top: -25px;"> <a href="http://facebook.com/ " target="_blank"><img src="img/facebook.png" alt="Facebook" title="Facebook"></a> <a href="https://twitter.com/#!/ " target="_blank"><img src="img/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img src="img/googleplus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img src="img/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img src="img/rss.png" alt="RSS" title="RSS"> </a> <a href="http://www.vimeo.com/#" target="_blank"> <img src="img/vimeo.png" alt="Vimeo" title="Vimeo"> </a> </div>
        <!-- Follow Social Icons End-->
        <div class="clear"></div>
      </div>
      <!-- Back to Top Button Start-->
      <div class="back-to-top" id="back-top" style="display: block;"><a title="Back to Top" href="javascript:void(0)" class="backtotop">Top</a></div>
      <!-- Back to Top Button End-->
    </div>
  </footer>
</body>

<script type="text/javascript">
  function updateContent(){

  $("#thediv").load('try2.php'); 
  }
  setInterval(function() {updateContent()}, 1000);
  
</script>

</html>
