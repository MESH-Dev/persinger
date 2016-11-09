jQuery(document).ready(function($){

	//Hamburger icon
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');

	});





	//Sidr funcitonality
$('.sidr-trigger').sidr({
      name: 'sidr-main',
      source: '.main-navigation',
      renaming: false,
      side: 'right',
      displace: false
  });

 $('#nav-icon.open').click(
    function(){
      $.sidr('close', 'sidr-main');
       //console.log("Sidr should be closed");
    });
//---------------------------------------------


//If sidr menu item has a .sub-menu (children), append the open button

 $('.sidr ul.menu > li').has('.sub-menu').append('<span class="open menu-arrow-down"> </span>');

//This handles the open/close function on the nav
//One click opens, 2nd click closes
//If another list item is opened, the prior opened nav item closes.

 $('.sidr .open').toggle(function(){
  //Set every .sub-menu back to initial state on click
  $('ul.sub-menu')
    .slideUp()
    .removeClass('sidr-active');

  //Remove any .fa-minus classes and return to initial fa-plus class on each click
  $('.open')
    .removeClass('rotate');

  //On click find the nearest ul.sub-menu and open it
  $(this)
    .closest('li')
    .find('ul.sub-menu')
    .addClass('sidr-active')
    .slideDown();

  //On click find the .open button and change the symbol from closed to open
  $(this)
    .addClass('rotate');
},
function(){
  //Close the .sub-menu
  $(this)
    .closest('li')
    .find('ul.sub-menu')
    .removeClass('sidr-active')
    .slideUp();
  $(this)
    .removeClass('rotate');
 

});
//----------------------------------------------------------------------------------------------------------------------------------------------------

   //Smooth page scroll
  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          //'top-50' is custom.  limits the offset to top of window plus 50px
          scrollTop: (target.offset().top)
        }, 800);
        return false;
      }
    }
  });
});



});
