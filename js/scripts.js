console.log('he');

// $slickNavMenu = document.querySelector('div.slicknav_menu');
// console.log($slickNavMenu);

// $slickNavMen = document.querySelector('.home');
// console.log($slickNavMen);

jQuery(document).ready(function($){

  // Make the menu responsive
  $('#menu-main-navigation').slicknav({
    label: '',
  });

  // $('.slicknav_btn').on('click', function() {
  //   console.log('button worked');
    
  //   let $slickNav = $('.slicknav_menu');

  //   if ( $(this).hasClass('slicknav_collapsed') ) {
  //     $(this).removeClass('current');
  //   } else {
  //     $('li a.current').removeClass('current');
  //     $(this).addClass('current');    
  // }

    // // $('.slicknav_menu').toggleClass('showSlick');
    // $('.menu').slicknav('toggle'); // Method to toggle the menu
  // });

  // Run the bxslider on testimonials
  $('.testimonials-list').bxSlider({
    mode: 'fade'
  });
});




