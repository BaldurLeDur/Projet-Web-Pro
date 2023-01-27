$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('#password').click(function(){
        validate();
    })
    $('#confirm_password').keyup(function(){

        validate();
        console.log("rr");
    });
    $('#confirm_password').click(function(){
        validate();
        console.log("hh");
    });
});

function validate() {
 
    var a = document.getElementById("password").value;
    var b = document.getElementById("confirm_password").value;
    var element = document.getElementById("confirm_password");
    console.log("valeurs de a:" +a +"longueurs : " +a.length);
    console.log("valeurs de b:" +b +"longueurs : " +b.length);
    console.log("valeurs de e:" +element);

    if (a!=b) {
        element.classList.add("invalid");
        return false; }
    else {
        element.classList.add("valid");
        return false; }}


    
