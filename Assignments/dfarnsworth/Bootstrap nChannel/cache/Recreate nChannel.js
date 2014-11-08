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

//1st scrollbar range 900-1340:
//2nd scrollbar range ~2060-~2560:
/*
$(window).scroll(function() {
if ($(this).scrollTop() > 800 and ($(this).scrollTop() < 1300){  
    $incriments = -900;
    $margin = -1170;
    $incriments += (this.scrolltop();
    $margin += 2.25 * incriments;
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

// var test = prompt("Enter a number greater or less than 10.");

// console.log(test);

var margin = -1170;
var scrollPosition = 900;

$(window).scroll(function() {
  if($(this).scrollTop() > 1340){
    scrollPosition=$(this).scrollTop();
    console.log("Scroll Position:",scrollPosition);
    margin = 0;
    var strip = margin;
    var setMargin = document.getElementById('dwf');
    margin += 'px';
    setMargin.style.marginLeft = margin;
    margin = strip;
  }else if($(this).scrollTop() > 900){
    x = scrollPosition;
    console.log("x:",x);
    console.log("margin0:",margin);
    scrollPosition=$(this).scrollTop();
    console.log("Scroll Position:",scrollPosition);
    incriment = 2.6590909090909 * (scrollPosition - x);
    console.log("Incriment (scrollPosition - x):", incriment);
    margin += incriment;
    var strip = margin;
    console.log("Margin + Incriment",margin);
    var setMargin = document.getElementById('dwf');
    console.log("setMargin",setMargin);
    margin += 'px';
    setMargin.style.marginLeft = margin;
    margin = strip;
  }else{
    margin=-1170;
    console.log(margin);
    var strip = margin;
    var setMargin = document.getElementById('dwf');
    margin += 'px';
    setMargin.style.marginLeft = margin;
    margin = strip;
  }
});

margin0 = -1170;
scrollPosition0=2160;

$(window).scroll(function() {
  if($(this).scrollTop() > 2600){
    margin0 = 0;
    console.log(margin0);
    var strip0 = margin0;
    console.log("Margin0",margin0);
    var setMargin0 = document.getElementById('dwf0');
    console.log("setMargin0",setMargin0);
    margin0 += 'px';
    setMargin0.style.marginRight = margin0;
    margin0 = strip0;
  }else if($(this).scrollTop() > 2160){
    x0 = scrollPosition0;
    console.log("x0:",x0);
    console.log("margin00:",margin0);
    scrollPosition0=$(this).scrollTop();
    console.log("ScrollPosition0:",scrollPosition0);
    incriment0 = 2.6590909090909 * (scrollPosition0 - x0);
    console.log("Incriment0 (scrollPosition0 - x0):", incriment0);
    margin0 += incriment0;
    var strip0 = margin0;
    console.log("Margin0 + Incriment0",margin0);
    var setMargin0 = document.getElementById('dwf0');
    console.log("setMargin0",setMargin0);
    margin0 += 'px';
    setMargin0.style.marginRight = margin0;
    margin0 = strip0;
  }else{
    margin0=-1180;
    console.log(margin0);
    var strip0 = margin0;
    var setMargin0 = document.getElementById('dwf0');
    margin0 += 'px';
    setMargin0.style.marginRight = margin0;
    margin0 = strip0;
  }
});

var margin1 = -1170;
var scrollPosition1 = 3436;

$(window).scroll(function() {
  if($(this).scrollTop() > 3876){
    scrollPosition1=$(this).scrollTop();
    console.log("ScrollPosition1:",scrollPosition1);
    margin1 = 0;
    var strip1 = margin1;
    var setMargin1 = document.getElementById('dwf1');
    margin1 += 'px';
    setMargin1.style.marginLeft = margin1;
    margin1 = strip1;
  }else if($(this).scrollTop() > 3436){
    x1 = scrollPosition1;
    console.log("x1:",x1);
    console.log("margin10:",margin1);
    scrollPosition1=$(this).scrollTop();
    console.log("ScrollPosition1:",scrollPosition1);
    incriment1 = 2.6590909090909 * (scrollPosition1 - x1);
    console.log("Incriment1 (scrollPosition1 - x1):", incriment1);
    margin1 += incriment1;
    var strip1 = margin1;
    console.log("Margin1 + Incriment1",margin1);
    var setMargin1 = document.getElementById('dwf1');
    console.log("setMargin1",setMargin1);
    margin1 += 'px';
    setMargin1.style.marginLeft = margin1;
    margin1 = strip1;
  }else{
    margin1=-1170;
    console.log(margin1);
    var strip1 = margin1;
    var setMargin1 = document.getElementById('dwf1');
    margin1 += 'px';
    setMargin1.style.marginLeft = margin1;
    margin1 = strip1;
  }
});


// $(window).scroll(function() {
//   if($(this).scrollTop() < 900){
//     var margin = -1170;
//     console.log(margin);
//   }else if($(this).scrollTop() > 1340){
//     var margin = 0;
//     console.log(margin);
//   }else{
//     console.log(margin);
//     // var margin = scrollMargin();
//     console.log(margin);
//   }
// });

// function scrollMargin(){
//   margin += 1;
// }

// if (console.log(test > 100))
// {
//   confirm("Greater than 100.");
// }

// else
// {
//   confirm("Less than 10 or greater than 100.");
// }

// $(window).scroll(function() {
// if ($(this).scrollTop() > 2000){  
//     console.log($(this).scrollTop());
//     scrollPosition=$(this).scrollTop();
//     console.log("scrollPosition:", scrollPosition);
//   }
//   else{
//     console.log("Less than 2000.");
//   }
// });

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