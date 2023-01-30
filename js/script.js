$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal({
        'startingTop': "0%",
        'endingTop': "1%",
        'opacity': 0
    });
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('#confirm_password').keyup(function(){
        validate();
    });
    $('#confirm_password').click(function(){
        validate();
    });
    $('#show_button_one').click(function() {
        $(this).toggleClass('myclass');
        $(this).toggleClass('showhidenew');
    });
});

function validate() {
 
    var a = document.getElementById("first_password").value;
    var b = document.getElementById("confirm_password").value;
    var element = document.getElementById("confirm_password");
    var size = b.length
   
    const verified = false
    if (a!=b && size!=0) {
        element.classList.add("invalid");
        element.classList.remove("valid");}
    else if (size!=0) {
        element.classList.add("valid");
        element.classList.remove("invalid");
        verified = true;
        return false; }}
    


function PasswordReverse() {
    const password = $("#password");
    if (password.attr("type") == "password") {
        password.attr("type", "text")
    } else {
        password.attr("type", "password")
    }
}
