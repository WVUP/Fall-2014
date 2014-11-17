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

// Compute the margin for a scroll-bar-responsive webpage image

// 1. Significant constants
//    2.659: ratio of horizontal scrolling image pixels to vertical scroll bar units

// 2. Variable definitions
//    margin: value to be inserted into image style for scrolling image
//    scrollPosition: scroll bar position value
//    setMargin: stores retrieved image for margin insertion
//    preScroll: previous scroll bar position value to be subtracted from current scroll bar position value
//    increment: value for margin adjustment in relation to a change in scroll bar position
//    strip: numeric representation of adjusted relational margin

// 3. Computations
//    1170px / 440 scroll bar position units = 2.659px/scrollbar position unit
//    increment = 2.659 * change in scroll bar position
//    margin += increment + 'px'

// Initialize scrolling image variables
var margin = -1170; // Sets initial margin value for full image retraction
var scrollPosition = 900; // Sets initial arbitrary scroll bar position value for preScroll in the increment equation

$(window).scroll(function() {

  // Fully extend image when scroll bar position value is greater than 1340
  if($(this).scrollTop() > 1340){ // Retrieves scroll bar position value and tests conditional statement
    margin = 0; // Sets margin value for full image extension
    var setMargin = document.getElementById('dwf'); // Stores retrieved image in a variable
    setMargin.style.marginLeft = margin; // Inserts a margin of 0 into image style for full image extension

  // Scroll image when scroll bar position value is exclusively between 900 and 1340
  }else if($(this).scrollTop() > 900){ // Retrieves scroll bar position value and tests conditional statement
    preScroll = scrollPosition; // Preserves previous scroll bar position value to be subtracted from current scroll bar position value
    scrollPosition=$(this).scrollTop(); // Sets current scroll bar position value
    // The ratio of horizontal scrolling image pixels to vertical scroll bar units is 2.659
    increment = 2.6590909090909 * (scrollPosition - preScroll); // Calculates margin adjustment in relation to a change in scroll bar position
    margin += increment; // Adjusts previous scrolling image margin in relation to current scroll bar position
    var strip = margin; // Preserves numeric representation of adjusted relational margin
    margin += 'px'; // Adds html syntax to numeric representation of current relational margin
    var setMargin = document.getElementById('dwf'); // Stores retrieved image in a variable
    setMargin.style.marginLeft = margin; // Inserts relational margin data into image style for scrolling image
    margin = strip; // Restores numeric representation of relational margin for calculational continuity

// Fully retract image when scroll bar position value is less than 900
  }else{
    margin=-1170; // Sets margin value for full image retraction
    var strip = margin; // Preserves numeric representation of fully retracted margin
    margin += 'px'; // Adds html syntax to numeric representation of fully retracted margin
    var setMargin = document.getElementById('dwf'); // Stores retrieved image in a variable
    setMargin.style.marginLeft = margin; // Inserts a margin of -1170px into image style for full image retraction
    margin = strip; // Restores numeric representation of fully retracted margin for calculational continuity
  }
});


// Refer to previous documentation for further explanation...
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


// Refer to previous documentation for further explanation...
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