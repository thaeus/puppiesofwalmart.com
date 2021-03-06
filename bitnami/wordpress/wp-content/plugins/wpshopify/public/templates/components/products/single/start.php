<?php

/*

@description   Opening tag for product single page (both columns)

@version       2.0.0
@since         1.0.49
@path          templates/components/products/single/start.php

@docs          https://wpshop.io/docs/templates/products/single/start

*/

defined('ABSPATH') ?: exit;

?>

<div
   itemscope
   itemtype="https://schema.org/Product"
   class="wps-product-single wps-row wps-contain <?= apply_filters('wps_products_single_start_class', ''); ?>"
   data-wps-product-wrapper="true"
   data-wps-is-component-wrapper="true"
   data-wps-render-from="server">
