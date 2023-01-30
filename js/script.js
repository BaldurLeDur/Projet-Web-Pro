$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal({
        'startingTop': "0%",
        'endingTop': "1%",
        'opacity': 0
    });
    $('.parallax').parallax();
    $('.collapsible').collapsible();
});

function PasswordReverse() {
    const password = $("#password");
    if (password.attr("type") == "password") {
        password.attr("type", "text")
    } else {
        password.attr("type", "password")
    }
}