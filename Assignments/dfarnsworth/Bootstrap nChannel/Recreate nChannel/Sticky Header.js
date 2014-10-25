$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('header').addClass("shrink");
  }
  else{
    $('header').removeClass("shrink");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#poof').addClass("show");
  }
  else{
    $('#poof').removeClass("show");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#np').addClass("nopad");
  }
  else{
    $('#np').removeClass("nopad");
  }
});