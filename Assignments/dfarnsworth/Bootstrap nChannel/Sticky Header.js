$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('header').addClass("sticky");
    $('article').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
    $('article').removeClass("sticky");
  }
});