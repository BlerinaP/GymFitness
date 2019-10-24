 jQuery(document).ready(function($){
     //Make menu responsive
     $('#menu-main-nav').slicknav({
         //appendTo: '.site-header'
     });

     //Run the bxSlider on testimonials
      $('.testimonials-list').bxSlider({
          controls: false,
          mode: 'horizontal'
      });
});