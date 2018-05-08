<?php 
include("db.php");
if (isset($_REQUEST['id']) ){
	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM `products`  WHERE prod_ID = '$id'";
	$result  = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$prod_Img = $row['prod_Img'];
		$prod_Name = $row['prod_Name'];
		$prod_Description = $row['prod_Description'];
		$prod_Price = $row['prod_Price'];
		$prod_Qnty = $row['prod_Qnty'];
		$prod_date = $row['prod_date'];

        $price_old = $row['prod_Price'] -(0.10 * $row['prod_Price']) ;
        $price_new = $row['prod_Price'];

		if (isset($row['prod_Img'])) {
            $file  = $row['prod_Img'];
            $img = "data:img/jpeg;base64,".base64_encode($file);
            
        } 
        else{
          $img = "img/item-default.jpg";
        }
		?>

		<!--Middle Part Start-->
      <div id="content">
        <h1><?php echo $prod_Name?></h1>
        <div class="product-info">
          <div class="left">
            <div class="image"><a href="<?php echo $img?>" title="<?php echo $prod_Name?>" class="cloud-zoom colorbox" id='zoom1' rel="adjustX: 0, adjustY:0, tint:'#000000',tintOpacity:0.2, zoomWidth:360, position:'inside', showTitle:false"><img src="<?php echo $img?>" title="<?php echo $prod_Name?>" alt="<?php echo $prod_Name?>" id="image" /><span id="zoom-image"><i class="zoom_bttn"></i> Zoom</span></a></div>
            <div class="image-additional"> <a href="<?php echo $img?>" title="<?php echo $prod_Name?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $img?>' "><img src="<?php echo $img?>" width="62" title="<?php echo $prod_Name?>" alt="<?php echo $prod_Name?>" /></a> <a href="<?php echo $img?>" title="<?php echo $prod_Name?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $img?>' "><img src="<?php echo $img?>" width="62" title="<?php echo $prod_Name?>" alt="<?php echo $prod_Name?>" /></a> <a href="<?php echo $img?>" title="<?php echo $prod_Name?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $img?>.png' "><img src="<?php echo $img?>" width="62" title="<?php echo $prod_Name?>" alt="<?php echo $prod_Name?>" /></a> </div>
          </div>
          <div class="right">
            <div class="description"> <span>Brand:</span> <a href="#">Canon</a><br />
              <span>Product Code:</span> Product 3<br />
              <span>Reward Points:</span> 200<br />
              <span>Availability:</span> In Stock</div>
            <div class="price">Price: <span class="price-old">₱<?php echo number_format($price_old,"2")?></span> <span class="price-new">₱<?php echo number_format($price_new,"2")?></span> <br />
              <span class="price-tax">Ex Tax: $80.00</span><br />
            </div>
            <div class="options">
              <h2>Available Options</h2>
              <div id="option-226" class="option"> <span class="required">*</span> <b>Select:</b><br />
                <select name="option">
                  <option value=""> --- Please Select --- </option>
                  <option value="15">Red</option>
                  <option value="16">Blue</option>
                </select>
              </div>
            </div>
            <div class="cart">
              <div>
                <div class="qty"> <strong>Qty:</strong> <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                  <input id="qty" type="text" class="w30" name="quantity" size="2" value="1" />
                  <a class="qtyBtn plus" href="javascript:void(0);">+</a>
                  <input type="hidden" name="product_id" size="2" value="30" />
                  <div class="clear"></div>
                </div>
                <input type="button" value="Add to Cart" id="button-cart" class="button" />
              </div>
              <div><a href="#" class="wishlist" >Add to Wish List</a> <a href="#" class="wishlist" >Add to Compare</a></div>
            </div>
            <div class="review">
              <div><img src="img/stars-3.png" alt="2 reviews" />&nbsp;&nbsp;<a onClick="$('a[href=\'#tab-review\']').trigger('click');">0 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onClick="$('a[href=\'#tab-review\']').trigger('click');">Write a review</a></div>
            </div>
          </div>
        </div>
        <!-- Description and Reviews Tab Start -->
        <div id="tabs" class="htabs"> <a href="#tab-description">Description</a> <a href="#tab-review">Reviews (0)</a> </div>
        <div id="tab-description" class="tab-content">
          <?php 
          echo $prod_Description ;
          ?>
        </div>
        <!-- Description and Reviews Tab Start -->
       
      </div>
      <!--Middle Part End-->
		<?php
	}
	else{}
}


?>
<script type="text/javascript">
(function() {
  // store the slider in a local variable
  var $window = $(window),
      flexslider;
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 320) ? 1 :
       (window.innerWidth < 600) ? 2 :
       (window.innerWidth < 800) ? 3 :
           (window.innerWidth < 900) ? 3 : 4;
  }
  $window.load(function() {
    $('#content #related_pro').flexslider({
      animation: "slide",
      animationLoop: false,
    slideshow: false,
      itemWidth: 210,
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize() // use function to pull in initial value
    });
  });
}());
</script>