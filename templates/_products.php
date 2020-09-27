<?php

$item_id = $_GET['item_id'] ?? 1;
foreach($product->getData() as $item) :
    if($item['item_id'] == $item_id) :
?>

<div class="container">
<section id="product" class="">
    <div class="row center">
        <div class="col s12 m12 l12">
            <div class="section-menu_header">
                <h5 class="center"> <?php echo $item['item_name'] ?? "Unkown"; ?></h5>
                <div class="underline center"></div>
            </div>
                <div class="product-image_container">   
                    <img src=" <?php echo $item['item_image'] ?? "./assets/images/new-in/new-in1.jpeg"; ?>" 
                    alt="product" class="_product-image">
                </div>
                    <button type="submit" class="btn btn-danger form-control red ">Proceed to Buy</button>
                    <button type="submit" class="btn btn-danger form-control blue ">Add to Cart</button>
        </div>
    <!-- End of row-->
    </div>
<!-- End of section-->
</section>
</div>

<?php 
    endif;
    endforeach;
?>