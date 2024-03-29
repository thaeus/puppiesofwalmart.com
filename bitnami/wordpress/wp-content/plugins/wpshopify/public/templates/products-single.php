<?php

defined('ABSPATH') ?: die;

get_header('wpshopify');

global $post;

$Products = WP_Shopify\Factories\Render\Products\Products_Factory::build();
$DB_Products = WP_Shopify\Factories\DB\Products_Factory::build();

$Products->products([
   'product_id' => $DB_Products->get_product_ids_from_post_ids($post->ID),
   'dropzone_product_buy_button' => '#product_buy_button',
   'dropzone_product_title' => '#product_title',
   'dropzone_product_description' => '#product_description',
   'dropzone_product_pricing' => '#product_pricing',
   'dropzone_product_gallery' => '#product_gallery',
   'hide_wrapper' => true,
   'limit' => 1
]);

?>

<section class="wps-container">

   <?= do_action('wps_breadcrumbs') ?>

   <div class="wps-product-single row">

      <div class="wps-product-single-gallery col">
         <div id="product_gallery"></div>
      </div>

      <div class="wps-product-single-content col">
         
         <div id="product_title">
            <?php   

            // Renders title server-side for SEO
            $Products->title([
               'post_id' => $post->ID,
               'render_from_server' => true
            ]);

            ?>
         </div>
         
         <div id="product_pricing"></div>
         
         <div id="product_description">

            <?php   

            // Renders description server-side for SEO
            $Products->description([
               'post_id' => $post->ID,
               'render_from_server' => true
            ]);
            
            ?>

         </div>
         
         <div id="product_buy_button"></div>

      </div>

   </div>

</section>
<h2>You may also like: </h2>
<?php
$galleries = ['hoodie-dog','bedding','hoodie-dog'];
$gal = $galleries[rand(0,2)];
echo do_shortcode("[wps_products page_size=3 tag='".$gal."']"); 







//echo do_shortcode('[button link="http://google.com"] Button Text [/button]');

?>

<?php


get_footer('wpshopify');

