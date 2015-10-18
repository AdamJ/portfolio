$(function(){
   // See if this is a touch device
   if ('ontouchstart' in window)
   {
      // Set the correct [touchscreen] body class
      $('body').removeClass('no-touch').addClass('touch');
     
      // Add the touch toggle to show text when tapped
      $('div.box-inner img').click(function(){
         $(this).closest('.box-inner').toggleClass('touch-focus');
      });
   }
});