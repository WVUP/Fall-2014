var progress = 0;

function updateProgress() {
   document.getElementById("Progress").innerHTML = progress;
}

function updateMyPictars(x,y,z) {
   if(x==1){
      if(y==1){
         document.getElementById("firstGlyph").src = "FIRST_2.png";
      }else{
         document.getElementById("firstGlyph").src = "FIRST.png";
         updateMyPictars(z,0,z-1);
         if(document.getElementById("lockOnTheDoor").hasAttribute("href")){
            document.getElementById("lockOnTheDoor").removeAttribute("href");
            document.getElementById("fourthGlyph").setAttribute("onclick","ourEgo()");
         }
      }
   }else{
   if(x==2){
      if(y==1){
         document.getElementById("secondGlyph").src = "SECOND_2.png";
      }else{
         document.getElementById("secondGlyph").src = "SECOND.png";
         updateMyPictars(z,0,z-1);
      }
   }else{
   if(x==3){
      if(y==1){
         document.getElementById("thirdGlyph").src = "THIRD_2.png";
      }else{
         document.getElementById("thirdGlyph").src = "THIRD.png";
         updateMyPictars(z,0,z-1);
      }
   }else{
   if(x==4){
      if(y==1){
         document.getElementById("fourthGlyph").src = "FOURTH_2.png";
      }else{
         document.getElementById("fourthGlyph").src = "FOURTH.png";
         updateMyPictars(z,0,z-1);
      }
   }else{
   if(x==5){
      if(y==1){
         document.getElementById("fifthGlyph").src = "FIFTH_2.png";
      }else{
         document.getElementById("fifthGlyph").src = "FIFTH.png";
         updateMyPictars(z,0,z-1);
      }
   }}}}}
}

function myEgo() {
   var d = 0;
   var b = progress;
   if (progress == 0){
      progress += 1;
      var d = 1;
   }else{
      progress = 0;
   }
   updateMyPictars(1,d,b);
   updateProgress();
}

function hisEgo() {
   var d = 0;
   var b = progress;
   if (progress == 1){
      progress += 1;
      var d = 1;
   }else{
      progress = 0;
   } 
   updateMyPictars(2,d,b);
   updateProgress();
}

function herEgo() {
   var d = 0;
   var b = progress;
   if (progress == 2){
      progress += 1;
      var d = 1;
   }else{
      progress = 0;
   } 
   updateMyPictars(3,d,b);
   updateProgress();
}

function ourEgo() {
   var d = 0;
   var b = progress;
   if (progress == 3){
      progress += 1;
      var d = 1;
   }else{
      progress = 0;
   } 
   updateMyPictars(4,d,b);
   updateProgress();
}
 
function theirEgo() {
   var d = 0;
   var b = progress;
   if (progress == 4){
      progress += 1;
      var d = 1;
      document.getElementById("lockOnTheDoor").setAttribute("href","CardGame/grats.html");
      document.getElementById("fourthGlyph").removeAttribute("onclick");
   }else{
      progress = 0;
   }
      updateMyPictars(5,d,b);
      updateProgress();
}