// Compute disapearing header
$(window).scroll(function() {
if ($(this).scrollTop() > 400){  
    $('header').addClass("poof");
    $('#site').addClass("poof");
  }
  else{
    $('header').removeClass("poof");
    $('header').removeClass("show");
    $('#site').removeClass("poof");
    $('#site').removeClass("show");
  }
});

// Compute scrolling-up header
var scrollPosition = 400

$(window).scroll(function() {
if ($(this).scrollTop() > 400){
	preScroll=scrollPosition;
	scrollPosition=$(this).scrollTop();
	sshow();
	}
});

// Test for scrolling towards top of page
function sshow() {
	if (preScroll>scrollPosition){
		$('header').addClass("show");
		$('#site').addClass("show");
	}
	else{
		$('header').removeClass("show");
		$('#site').removeClass("show");
	}
};



confirm("End");