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
    $('#np').addClass("lpad");
  }
  else{
    $('#np').removeClass("lpad");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#np').removeClass("pad");
  }
  else{
    $('#np').addClass("pad");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#hbtn').addClass("smtop");
  }
  else{
    $('#hbtn').removeClass("smtop");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#hbtn').removeClass("btop");
  }
  else{
    $('#hbtn').addClass("btop");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#index').addClass("implode");
  }
  else{
    $('#index').removeClass("implode");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#indey').addClass("implode");
  }
  else{
    $('#indey').removeClass("implode");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#indez').addClass("implode");
  }
  else{
    $('#indez').removeClass("implode");
  }
});

function preheader(){
  $('#hbtn').addClass("btop");
  $('#np').addClass("pad");
};