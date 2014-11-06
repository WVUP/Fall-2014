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
    $('#poof').addClass("show");
  }
  else{
    $('#poof').removeClass("show");
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

//1st scrollbar range 800-1300:
//2nd scrollbar range 2060-2560:
/*
$(window).scroll(function() {
if ($(this).scrollTop() > 800 and ($(this).scrollTop() < 1300){  
    $x = -800;
    $margin = -1180;
    $x += (this.scrolltop();
    $margin += 2.25 * x;
//Insert margin value into offscreen image margin:
  }
  else{
    $margin = -1180;
  }
});
*/

$(window).scroll(function() {
if ($(this).scrollTop() > 900){  
    $('#lscroll').addClass("ex1");
  }
  else{
    $('#lscroll').removeClass("ex1");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 965){  
    $('#lscroll').addClass("ex2");
  }
  else{
    $('#lscroll').removeClass("ex2");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1040){  
    $('#lscroll').addClass("ex3");
  }
  else{
    $('#lscroll').removeClass("ex3");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1115){  
    $('#lscroll').addClass("ex4");
  }
  else{
    $('#lscroll').removeClass("ex4");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1190){  
    $('#lscroll').addClass("ex5");
  }
  else{
    $('#lscroll').removeClass("ex5");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1265){  
    $('#lscroll').addClass("ex6");
  }
  else{
    $('#lscroll').removeClass("ex6");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1340){  
    $('#lscroll').addClass("ex7");
  }
  else{
    $('#lscroll').removeClass("ex7");
  }
});