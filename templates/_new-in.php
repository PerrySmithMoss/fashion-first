<?php 

$product_list = $product->getData();

?>

<div class="section-menu_header">
<h3 class="center">New In</h3>
<div class="underline center"></div>

</div>
    <br>
    <div class="row">
      <div class="col s2">Sort</div>
      <div class="col s2">Category</div>
      <div class="col s2">Product Type</div>
      <div class="col s2">Color</div>
      <div class="col s2">Size</div>
      <div class="col s2">Price Range</div>
    </div>

<div class="row">
<?php foreach ($product_list as $item) { ?>
      <div class="col s6 m4 l3">
      <div class="card">
        <div class="card-image">
       <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']);?>"><img src="<?php echo $item['item_image'] ?? "./assets/images/new-in/new-in1.jpeg";?>"></a>
          <a class="btn-floating halfway-fab waves-effect waves-light black"><i class="material-icons">favorite</i></a>
        </div>
        <div class="card-content">
        <span class="card-title"><?php echo $item['item_name'] ?? "Unknown";?></span>
          <p>£<?php echo $item['item_price'] ?? "Unknown Price"?></p>
          <br>
        <input type="submit" value="Add To Cart" name="add-to-cart" 
            class="btn waves-effect waves-light submit-btn" 
            style="width:100%; white-text">
        </div>
      </div>
      </div>
      <?php } ?>
