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

       //When the page is ready add the fixed menu if position is grater than 300px
     const headerScroll = document.querySelector('.navigation-bar');
     const rect = headerScroll.getBoundingClientRect();
     const topDistance = Math.abs(rect.top);
     fixedMenu(topDistance);
});

//Scrolling animation

 window.onscroll = () => {
     const scroll = window.scrollY;
     fixedMenu(scroll);
 }

 // Adds a fixed menu on top

 function fixedMenu(scroll){
     const headerScroll = document.querySelector('.navigation-bar');

     //In case that the scroll is greater than 300px add some classes
     if(scroll > 300){
         headerScroll.classList.add('fixed-top');
     } else{
         headerScroll.classList.remove('fixed-top');
     }
 }