function LoginPrep(){
   document.getElementById("login").style.display = "none";
   document.getElementById("signup").style.display = "none";
   document.getElementById("userinput").style.display = "block";
   document.getElementById("passinput").style.display = "block";
   document.getElementById("butninput").style.display = "block";
}

function LOGIN(){
   if(document.getElementById("username").value != ""){
      var nem = document.getElementById("username").value;
      document.getElementById("yourname").innerHTML = nem;
      document.getElementById("userinput").style.display="none";
      document.getElementById("passinput").style.display="none";
      document.getElementById("butninput").style.display="none";
      document.getElementById("profpic").style.display="block";
      document.getElementById("usrshowme").style.display="block";
      document.getElementById("logoutshowme").style.display="block";
   }

}

function LOGOUT(){
   document.getElementById("profpic").style.display="none";
   document.getElementById("usrshowme").style.display="none";
   document.getElementById("logoutshowme").style.display="none";
   document.getElementById("username").value = "";
   document.getElementById("login").style.display = "block";
   document.getElementById("signup").style.display = "block";

}

function LoginLoad(){
   document.getElementById("login").addEventListener("click", function(){
      LoginPrep();
   });
   document.getElementById("butninput").addEventListener("click", function(){
   LOGIN();
   });
   document.getElementById("logout").addEventListener("click", function(){
   LOGOUT();
   });
}