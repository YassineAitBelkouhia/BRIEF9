<?php
/*
 * @package My Custom Footer Plugin
 */
/*
Plugin Name: Custom Footer Plugin
Plugin URI: https://github.com/yassineaitbelkouhia/
Description: My first attempt to make a custom footer plugin
Author: Yassine ait belkouhia
Version: 1.0.0
Author URI: https://github.com/yassineaitbelkouhia/
*/
if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'myAdminMenu');

function myAdminMenu()
{
    add_menu_page('Footer title', 'Footer Settings', 1, 'footer_setting_page', 'mt_settings_page', 'dashicons-edit-large
');
}

function mt_settings_page()
{
    echo '<h2>' .   ('Footer Configurations') . '</h2>';
    include_once 'CustomFooterSettings.php';
}
function myCustomFooter()
{
    echo "<!-- Footer -->
<footer class='text-center text-lg-start bg-light text-muted'>
  <!-- Section: Social media -->
  
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class='p-4'>
    <div class='container text-center text-md-start mt-5'>
      <!-- Grid row -->
      <div class='row mt-3'>
        <!-- Grid column -->
        <div class='col-md-3 col-lg-4 col-xl-3 mx-auto mb-4'>
          <!-- Content -->
          <h6 class='text-uppercase fw-bold mb-4'>
            <i class='fas fa-hat-cowboy me-3'></i>  " . get_bloginfo('name') . "
          </h6>
          <p>
          " . get_bloginfo('name') . " a small business founded by Rachid Ait Okhmassi in 2018
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Products
          </h6>
          <p>
            <a href='#!' class='text-reset'>Backpacks</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>T-Shirts</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class='col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Contact
          </h6>
          <p><i class='fas fa-home me-3'></i> Marrakech, Morocco</p>
          <p>
            <i class='fas fa-envelope me-3'></i> 
            Rachid.ait.oukhmassi@gmail.com
          </p>
          <p><i class='fas fa-phone me-3'></i> + 01 234 567 88</p>
          <p><i class='fas fa-print me-3'></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <section
    class='d-flex justify-content-center p-4 m-4 border-top'
  >
    <!-- Left -->
    
    <!-- Left -->

    <!-- Right -->
    <div class ='w-25 d-flex justify-content-between'>
      <a href='" . get_option('facebook-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-facebook-f'></i>
      </a>
      <a href='" . get_option('github-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-github'></i>
      </a>
      <a href='" . get_option('google-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-google'></i>
      </a>
      <a href='" . get_option('instagram-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-instagram'></i>
      </a>
    </div>
    <!-- Right -->
  </section>

  <!-- Copyright -->
  <div class='text-center p-4' style='background-color: rgba(0, 0, 0, 0.05);'>
    © 2021 Copyright:
    <a class='text-reset fw-bold' href='#'>" . get_bloginfo('name') . "</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->";
}
add_action('wp_footer', 'myCustomFooter');
