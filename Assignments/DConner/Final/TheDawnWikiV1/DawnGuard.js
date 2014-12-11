function contMenu(id){
   var fontClass = document.getElementById("fa-" + id).className
   if (fontClass.indexOf("fa-caret-right") > -1){
      document.getElementById("fa-" + id).className = "fa fa-caret-down fa-fw";
      var elems = document.getElementsByClassName("navchild-" + id);
      for (var i=0; i<elems.length;i+=1){
         elems[i].style.display = 'block';
      }
   }else{
      document.getElementById("fa-" + id).className = "fa fa-caret-right fa-fw";
      var elems = document.getElementsByClassName("navchild-" + id);
      for (var i=0; i<elems.length;i+=1){
         elems[i].style.display = 'none';
      }
   }
};

function onLoad(){
   var navElems = document.getElementsByClassName("navselec");
   for (var i=0; i<navElems.length ; i+=1){
      navElems[i].tagg = i
      navElems[i].addEventListener("click", function(){
         contMenu(this.tagg);
      });
   };
};
