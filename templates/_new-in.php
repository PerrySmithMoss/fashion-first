<?php 

$product_list = $product->getData();

?>

<h3 class="center">New In</h3>
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
        <img src="<?php echo $item['item_image'] ?? "./assets/images/new-in/new-in1.jpeg"?>">
          <a class="btn-floating halfway-fab waves-effect waves-light black"><i class="material-icons">favorite</i></a>
        </div>
        <div class="card-content">
        <span class="card-title">Olive open dress</span>
          <p>£22</p>
          <br>
        <input type="submit" value="Add To Cart" name="add-to-cart" 
            class="btn waves-effect waves-light submit-btn" 
            style="width:100%; white-text">
        </div>
      </div>
      </div>
      <?php } ?>
