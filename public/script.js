function popup2(){
    var btn = document.getElementById("bt2").innerHTML;
    if(btn == "LOG IN"){
        document.querySelector(".popup2").style.display = "flex";
        document.body.style.overflow = "hidden";
    }
    else{
        logout();
    }
}
function close_popup2(){
    document.querySelector(".popup2").style.display = "none";
    document.body.style.overflow = "scroll";
    document.getElementById("username2").value = "";
    document.getElementById("pass").value = "";
}

function login(name){
    document.querySelector(".user_profile").style.display = "inline";
    document.getElementById("user_name").innerHTML = name;
    document.getElementById("bt2").innerHTML = "LOG OUT";
    close_popup2();
}

function logout(){
    document.querySelector(".user_profile").style.display = "none";
    document.getElementById("bt2").innerHTML = "LOG IN";
}
function popup(){
    document.querySelector(".popup").style.display = "flex";
    $(".popup").animate({opacity: "1"}, "slow");
    document.body.style.overflow = "hidden";
}
function close_popup(){
    $(".popup").animate({opacity: "0"}, "slow");
    document.querySelector(".popup").style.display = "none";
    document.body.style.overflow = "scroll";
}
var modal = document.getElementById("popup");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.body.style.overflow = "scroll";
  }
}