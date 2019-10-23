<?php
/*
 * Plugin Name: Gym Fitness-Location with Leaflet
 * Plugin Uri:
 * Description: Creates a shortcode do display the location
 * Version: 1.0
 * Author: Blerina Pllana
 * Author Uri:
 * Text Domain: gymfitness
 */
if(!defined('ABSPATH')) die();

//Shortcode API

function gymfitness_location_shortcode() {
    $location = get_field('location');
 ?>
    <div class="location">
       <input type="hidden" id="lat" value="<?php echo $location['lat'];?>"/>
       <input type="hidden" id="lng" value="<?php echo $location['lng'];?>"/>
       <input type="hidden" id="address" value="<?php echo $location['address'];?>"/>

        <div id="map"></div>
   </div>
<?php
}
add_shortcode('gymfitness_location','gymfitness_location_shortcode');//[gymfitness_location]

 //Enqueues the CSS and JS Files
     function gymfitness_location_scripts(){

         if(is_page('contact-us')):
      //leaflet css
      wp_enqueue_style('leafletcss','https://unpkg.com/leaflet@1.5.1/dist/leaflet.css',array(),'1.5.1');

      //leaflet js
      wp_enqueue_script('leafletjs','https://unpkg.com/leaflet@1.5.1/dist/leaflet.js',array(),'1.5.1', true );
      endif;

 }
add_action('wp_enqueue_scripts','gymfitness_location_scripts');