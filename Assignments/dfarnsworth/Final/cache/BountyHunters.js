// Compute down-scrolling header
$(window).scroll(function() {
if ($(this).scrollTop() > 400){  
    $('header').addClass("poof");
    $('#site').addClass("poof");
    $('#msite').addClass("jump");
    $('#mbars').addClass("large");
  }
  else{
    $('header').removeClass("poof");
    $('header').removeClass("show");
    $('#site').removeClass("poof");
    $('#site').removeClass("show");
    $('#msite').removeClass("jump");
    $('#mbars').removeClass("large");
  }
});

// Compute up-scrolling header
var scrollPosition = 400

$(window).scroll(function() {
if ($(this).scrollTop() > 400){
    preScroll=scrollPosition;
    scrollPosition=$(this).scrollTop();
    sshow();
    }
});

// Test for scrolling up
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

function expand() {
    if($('#mbars').hasClass('fa-bars')){
        $('header').addClass("expands");
        $('#site').addClass("show");
        $('#mbars').removeClass('fa-bars');
        $('#mbars').addClass('fa-close');
        $('#msite').addClass('jump');
        $('#mbars').addClass('large');
        document.getElementById('msite').style.color="white";
        document.getElementById('msite').style.marginTop="37px";
        document.getElementById('mbars').style.marginTop="43px";
        document.getElementById('mbars').style.color="white";
        document.getElementById('linky0').style.display="block";
        document.getElementById('linky1').style.display="block";
        document.getElementById('linky2').style.display="block";
        document.getElementById('linky3').style.display="block";
        document.getElementById('linky4').style.display="block";
        document.getElementById('linky0').style.marginTop="101px";
        document.getElementById('linky1').style.marginTop="202px";
        document.getElementById('linky2').style.marginTop="303px";
        document.getElementById('linky3').style.marginTop="404px";
        document.getElementById('linky4').style.marginTop="505px";
    }
    else{
       window.location.reload()
    }
};