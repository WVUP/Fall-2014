var cardMan = [["z","z","z","z"],["z","z","z","z"],["z","z","z","z"],["z","z","z","z"]];

var holdMyBeer = [0,0];

function getRandomInt(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


function getMahAxe(){
   for(x=0;x<8;x++){
      for(y=0;y<2;y++){
         while(true){
            var a = getRandomInt(0,3);
            var b = getRandomInt(0,3);
            if(cardMan[a][b] == "z"){
               cardMan[a][b] = x;
               break;
            }
         }
      }
   }
}

function areTheyInHere(x){
   if(document.getElementById(x).getAttribute("src") != document.getElementById(holdMyBeer[1]).getAttribute("src")){
   
   document.getElementById(holdMyBeer[1]).src = "cardBack.png";
   document.getElementById(x).src = "cardBack.png";
   }
}


function breakThisDoor(x){
   var k = x % 4;
   var g = Math.floor((x-1)/4);
   if(document.getElementById(x).getAttribute("src") == "cardBack.png"){
      if(cardMan[g][k] == 0){
         document.getElementById(x).src = "CardA.png";

         if(holdMyBeer[0] == 1){
            areTheyInHere(x);
         }else{
            holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
         }

      }else{
         if(cardMan[g][k] == 1){
            document.getElementById(x).src = "CardB.png";

            if(holdMyBeer[0] == 1){
               areTheyInHere(x);
            }else{
               holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
            }

         }else{
            if(cardMan[g][k] == 2){
               document.getElementById(x).src = "CardC.png";

               if(holdMyBeer[0] == 1){
                  areTheyInHere(x);
               }else{
                  holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
               }

            }else{
               if(cardMan[g][k] == 3){
                  document.getElementById(x).src = "CardD.png";

                  if(holdMyBeer[0] == 1){
                     areTheyInHere(x);
                  }else{
                     holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
                  }

               }else{
                  if(cardMan[g][k] == 4){
                     document.getElementById(x).src = "CardE.png";

                     if(holdMyBeer[0] == 1){
                        areTheyInHere(x);
                     }else{
                        holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
                     }

                  }else{
                     if(cardMan[g][k] == 5){
                        document.getElementById(x).src = "CardF.png";

                        if(holdMyBeer[0] == 1){
                           areTheyInHere(x);
                        }else{
                           holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
                        }

                     }else{
                        if(cardMan[g][k] == 6){
                           document.getElementById(x).src = "CardG.png";

                           if(holdMyBeer[0] == 1){
                              areTheyInHere(x);
                           }else{
                              holdMyBeer[0] = 1;
            holdMyBeer[1] = x;
                           }

                        }else{
                           if(cardMan[g][k] == 7){
                              document.getElementById(x).src = "CardH.png";

                              if(holdMyBeer[0] == 1){
                                 areTheyInHere(x);
                              }else{
                                 holdMyBeer[0] = 1;
            holdMyBeer[1] = x;

                              }
                           }
                        }
                     }
                  }
               }
            }
         }
      }
   }
   
}