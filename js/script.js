$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('#confirm_password').keyup(function(){
        validate();
    });
    $('#confirm_password').click(function(){
        validate();
    });
});

function validate() {
 
    var a = document.getElementById("password").value;
    var b = document.getElementById("confirm_password").value;
    var element = document.getElementById("confirm_password");
    const verified = false
    if (a!=b) {
        element.classList.add("invalid");
        return false; }
    else {
        element.classList.add("valid");
        verified = true;
        return false; }}
    
